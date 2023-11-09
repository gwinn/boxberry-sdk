<?php

namespace Gwinn\Boxberry\Builders;

use Gwinn\Boxberry\EventSubscribers\ResponseFixEventSubscriber;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Exceptions\InvalidJsonException;
use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Error;
use Gwinn\Boxberry\Model\Response\ResponseInterface as Response;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;

class ResponseBuilder
{
    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @var string
     */
    protected $rawResponse;

    public function __construct(ResponseInterface $response)
    {
        $this->serializer = SerializerBuilder::create()->setPropertyNamingStrategy(
            new SerializedNameAnnotationStrategy(
                new IdenticalPropertyNamingStrategy()
            )
        )->configureListeners(
            function (EventDispatcher $dispatcher): void {
                $dispatcher->addSubscriber(new ResponseFixEventSubscriber());
            }
        )->build();
        $this->rawResponse = $response->getBody()->getContents();
    }

    /**
     * @throws ApiException
     */
    public function serializeResponse(string $className): Response
    {
        $this->errorProcessing();

        try {
            /** @var Response $response */
            $response = $this->serializer->deserialize($this->rawResponse, $className, 'json');
        } catch (RuntimeException $exception) {
            throw new InvalidJsonException(
                sprintf(
                    'Error json: %s | %s (raw: %s)',
                    $className,
                    $exception->getMessage(),
                    $this->rawResponse
                ),
                400
            );
        }

        return $response;
    }

    /**
     * @throws ApiException
     */
    public function serializeArrayResponse(string $className, string $elementClassName): ArrayResponse
    {
        $this->errorProcessing();

        try {
            $response = $this->serializer->deserialize(
                $this->rawResponse,
                sprintf('array<%s>', $elementClassName),
                'json'
            );
        } catch (RuntimeException $exception) {
            throw new InvalidJsonException(
                sprintf(
                    'Error json: %s | %s (raw: %s)',
                    $elementClassName,
                    $exception->getMessage(),
                    $this->rawResponse
                ),
                400
            );
        }
        /** @var ArrayResponse $arrayResponse */
        $arrayResponse = new $className($response);

        return $arrayResponse;
    }

    /**
     * @throws ApiException
     */
    public function errorProcessing(): void
    {
        /** @var Error $errors */
        $errors = $this->serializer->deserialize($this->rawResponse, Error::class, 'json');
        if (!empty($errors->message) && ($errors->error || $errors->errBool)) {
            throw new ApiException($errors->message, 400);
        }
        if (!empty($errors->errString)) {
            throw new ApiException($errors->errString, 400);
        }
    }
}

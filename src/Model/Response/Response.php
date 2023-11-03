<?php

namespace Gwinn\Boxberry\Model\Response;

use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Exceptions\InvalidJsonException;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\ResponseInterface;
use JMS\Serializer\Exception\RuntimeException;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\ValidatorBuilder;

/**
 * Class Response
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Response
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class Response implements ResponseInterface
{
    /* @var ResponseInterface $guzzleResponse */
    protected $guzzleResponse;

    /* @var Serializer $serializer */
    protected $serializer;

    /* @var ValidatorInterface $validator */
    protected $validator;

    /**
     * @var int $statusCode
     */
    protected $statusCode;

    /**
     * @var mixed $response
     */
    protected $response;

    /**
     * @var string $responseRaw
     */
    protected $responseRaw;

    /**
     * Response constructor.
     *
     * @param ResponseInterface $response
     * @param string $className
     * @throws ApiException
     */
    public function __construct(ResponseInterface $response, string $className='')
    {
        $this->guzzleResponse = $response;

        $this->serializer = SerializerBuilder::create()->setPropertyNamingStrategy(
            new SerializedNameAnnotationStrategy(
                new IdenticalPropertyNamingStrategy()
            )
        )->build();

        $validator = new ValidatorBuilder();
        $this->validator = $validator->getValidator();
        $this->statusCode = $response->getStatusCode();
        $this->responseRaw = $response->getBody()->getContents();
        $this->response = $this->serializeResponse($this->responseRaw, $className);
    }

    /**
     * @param string $raw
     * @param string $className
     * @return mixed
     * @throws ApiException
     */
    private function serializeResponse(string $raw, string $className ='')
    {
        try {
            $errors = $this->serializer->deserialize($raw, Error::class, 'json');
            if (!empty($errors->message) && ($errors->error || $errors->err_bool)) {
                throw new ApiException($errors->message);
            }
            if (!empty($errors->err_string)) {
                throw new ApiException($errors->err_string);
            }
        } catch (RuntimeException $exception) {
        }
        unset($exception);

        if(empty($className)){
            return new SuccessResponse();
        }

        try {
            $response = $this->serializer->deserialize($raw, $className, 'json');
        } catch (RuntimeException $exception) {
            throw new InvalidJsonException(
                sprintf(
                    'Error json: %s | %s (raw: %s)',
                    $className,
                    $exception->getMessage(),
                    $raw
                )
            );
        }

        return $response;
    }

    /**
     * Retrieves the HTTP protocol version as a string.
     *
     * @return string HTTP protocol version.
     */
    public function getProtocolVersion(): string
    {
        return $this->guzzleResponse->getProtocolVersion();
    }

    /**
     * Return an instance with the specified HTTP protocol version.
     *
     * @param string $version HTTP protocol version
     *
     * @return static
     */
    public function withProtocolVersion($version): MessageInterface
    {
        return $this->guzzleResponse->withProtocolVersion($version);
    }

    /**
     * Retrieves all message header values.
     *
     * @return string[][] Returns an associative array of the message's headers. Each
     *     key MUST be a header name, and each value MUST be an array of strings
     *     for that header.
     */
    public function getHeaders(): array
    {
        return $this->guzzleResponse->getHeaders();
    }

    /**
     * Checks if a header exists by the given case-insensitive name.
     *
     * @param string $name Case-insensitive header field name.
     *
     * @return bool Returns true if any header names match the given header
     *     name using a case-insensitive string comparison. Returns false if
     *     no matching header name is found in the message.
     */
    public function hasHeader($name): bool
    {
        return $this->guzzleResponse->hasHeader($name);
    }

    /**
     * Retrieves a message header value by the given case-insensitive name.
     *
     * @param string $name Case-insensitive header field name.
     *
     * @return string[] An array of string values as provided for the given
     *    header. If the header does not appear in the message, this method MUST
     *    return an empty array.
     */
    public function getHeader($name): array
    {
        return $this->guzzleResponse->getHeader($name);
    }

    /**
     * Retrieves a comma-separated string of the values for a single header.
     *
     * @param string $name Case-insensitive header field name.
     *
     * @return string A string of values as provided for the given header
     *    concatenated together using a comma. If the header does not appear in
     *    the message, this method MUST return an empty string.
     */
    public function getHeaderLine($name): string
    {
        return $this->guzzleResponse->getHeaderLine($name);
    }

    /**
     * Return an instance with the provided value replacing the specified header.
     *
     * @param string          $name  Case-insensitive header field name.
     * @param string|string[] $value Header value(s).
     *
     * @return static
     * @throws \InvalidArgumentException for invalid header names or values.
     */
    public function withHeader($name, $value): MessageInterface
    {
        return $this->guzzleResponse->withHeader($name, $value);
    }

    /**
     * Return an instance with the specified header appended with the given value.
     *
     * @param string          $name  Case-insensitive header field name to add.
     * @param string|string[] $value Header value(s).
     *
     * @return static
     * @throws \InvalidArgumentException for invalid header names or values.
     */
    public function withAddedHeader($name, $value): MessageInterface
    {
        return $this->guzzleResponse->withAddedHeader($name, $value);
    }

    /**
     * Return an instance without the specified header.
     *
     * @param string $name Case-insensitive header field name to remove.
     *
     * @return static
     */
    public function withoutHeader($name): MessageInterface
    {
        return $this->guzzleResponse->withoutHeader($name);
    }

    /**
     * Gets the body of the message.
     *
     * @return StreamInterface Returns the body as a stream.
     */
    public function getBody(): StreamInterface
    {
        return $this->guzzleResponse->getBody();
    }

    /**
     * Return an instance with the specified message body.
     *
     * @param StreamInterface $body Body.
     *
     * @return static
     * @throws \InvalidArgumentException When the body is not valid.
     */
    public function withBody(StreamInterface $body): MessageInterface
    {
        return $this->guzzleResponse->withBody($body);
    }

    /**
     * Gets the response status code.
     *
     * @return int Status code.
     */
    public function getStatusCode(): int
    {
        return $this->guzzleResponse->getStatusCode();
    }

    /**
     * Return an instance with the specified status code and, optionally, reason phrase.
     *
     * @param int    $code         The 3-digit integer result code to set.
     * @param string $reasonPhrase The reason phrase to use with the
     *                             provided status code; if none is provided, implementations MAY
     *                             use the defaults as suggested in the HTTP specification.
     *
     * @return static
     * @throws \InvalidArgumentException For invalid status code arguments.
     */
    public function withStatus($code, $reasonPhrase = ''): ResponseInterface
    {
        return $this->guzzleResponse->withStatus($code, $reasonPhrase);
    }

    /**
     * Gets the response reason phrase associated with the status code.
     *
     * @return string Reason phrase; must return an empty string if none present.
     */
    public function getReasonPhrase(): string
    {
        return $this->guzzleResponse->getReasonPhrase();
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response): void
    {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getResponseRaw(): string
    {
        return $this->responseRaw;
    }

    /**
     * @param string $responseRaw
     */
    public function setResponseRaw(string $responseRaw): void
    {
        $this->responseRaw = $responseRaw;
    }

    /**
     * HTTP request was successful
     *
     * @return bool
     */
    public function isSuccessful()
    {
        return $this->statusCode < 400;
    }
}

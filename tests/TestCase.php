<?php

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use Gwinn\Boxberry\Client;
use Gwinn\Boxberry\Exceptions\ApiException;
use Gwinn\Boxberry\Exceptions\InvalidJsonException;
use Gwinn\Boxberry\Model\Response\Error;
use Gwinn\Boxberry\Model\Response\Response;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

/**
 * Class TestCase
 *
 * @package  Gwinn\Boxberry\Tests
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class TestCase extends \PHPUnit\Framework\TestCase
{
    /* @var Serializer $serializer */
    protected $serializer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->serializer = SerializerBuilder::create()->setPropertyNamingStrategy(
            new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(
                new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy()
            )
        )->build();
    }

    /**
     * @param null $mockHandler
     *
     * @return Client
     */
    public function getApiClient($mockHandler = null): Client
    {
        if (empty($mockHandler)) {
            $mockHandler = new MockHandler([]);
        }

        $client = new GuzzleHttp\Client(
            array_merge(
                Client::CONFIG,
                ['handler' => HandlerStack::create($mockHandler)]
            )
        );

        $apiClient = new Client('5448637f804cb40d491cbcbe6e511942');

        try {
            $reflection = new ReflectionClass($apiClient);
            $property = $reflection->getProperty('client');
            $property->setAccessible(true);
            $property->setValue($apiClient, $client);
        } catch (\ReflectionException $exception) {
            static::fail(
                sprintf(
                    'An error occurred while testing: %s in %s on line %s',
                    $exception->getMessage(),
                    $exception->getFile(),
                    $exception->getLine()
                )
            );
        }

        return $apiClient;
    }

    /**
     * @param string $raw_request
     * @param string $className
     * @return mixed
     */
    private function serializeRequest(string $raw_request, string $className ='')
    {
        try {
            $request = $this->serializer->deserialize($raw_request, $className, 'json');
        } catch (RuntimeException $exception) {
            throw new InvalidJsonException(
                sprintf(
                    'Error json: %s | %s (raw: %s)',
                    $className,
                    $exception->getMessage(),
                    $raw_request
                )
            );
        }

        return $request;
    }

    /**
     * @param Response $response
     */
    public static function assertResponse(Response $response): void
    {
        static::assertNotEmpty($response);
        static::assertIsObject($response);
        static::assertInstanceOf(Response::class, $response);
        static::assertEquals(200, $response->getStatusCode());
        static::assertIsString($response->getResponseRaw());
    }

    /**
     * @param Response $response
     * @param string                        $elementClassName
     * @param int                           $countElement
     * @param string                        $responseType
     */
    public static function assertResponseList(
        Response $response,
        string $elementClassName,
        string $responseType,
        int $countElement = 1
    ): void {
        if ('array' === $responseType) {
            static::assertIsArray($response->getResponse());
            static::assertCount($countElement, $response->getResponse());

            foreach ($response->getResponse() as $element) {
                static::assertInstanceOf($elementClassName, $element);
            }
        } else {
            static::assertInstanceOf($responseType, $response->getResponse());
        }
    }

    /**
     * @param Response $response
     * @param                               $className
     * @param array $equalsFields
     */
    public static function assertResponseGet(Response $response, $className, array $equalsFields = []): void
    {
        static::assertInstanceOf($className, $response->getResponse());

        foreach ($equalsFields as $nameField => $valueExpected) {
            static::assertEquals($valueExpected, $response->getResponse()->{$nameField});
        }
    }
}

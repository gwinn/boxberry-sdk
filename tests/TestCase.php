<?php

namespace Gwinn\Boxberry\Tests;

use GuzzleHttp;
use Gwinn\Boxberry\Client;
use Gwinn\Boxberry\Exceptions\InvalidJsonException;
use Gwinn\Boxberry\Model\Response\Response;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase as Test;
use Pock\Enum\RequestMethod;
use Pock\Enum\RequestScheme;
use Pock\Exception\JsonException;
use Pock\PockBuilder;
use ReflectionClass;

/**
 * Class TestCase
 *
 * @package  Gwinn\Boxberry\Tests
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class TestCase extends Test
{
    public const REQUESTS_FOLDER = __DIR__ . DIRECTORY_SEPARATOR . 'Requests' . DIRECTORY_SEPARATOR ;
    public const RESPONSE_FOLDER = __DIR__ . DIRECTORY_SEPARATOR . 'Response' . DIRECTORY_SEPARATOR ;
    public const ERROR_RESPONSE_FOLDER = __DIR__ . DIRECTORY_SEPARATOR . 'ErrorResponse' . DIRECTORY_SEPARATOR ;
    public const TEST_API_TOKEN='d6f33e419c16131e5325cbd84d5d6000';
    public const TEST_API_HOST='api.boxberry.ru';
    public $client;

    /* @var Serializer $serializer */
    protected $serializer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->serializer = SerializerBuilder::create()->setPropertyNamingStrategy(
            new SerializedNameAnnotationStrategy(
                new IdenticalPropertyNamingStrategy()
            )
        )->build();
    }

    /**
     * @throws JsonException
     */
    public function getMock($mockData): Client
    {
        $builder = new PockBuilder();
        $builder->matchMethod($mockData['requestedMethod'])
            ->matchScheme(RequestScheme::HTTPS)
            ->matchHost(self::TEST_API_HOST)
            ->matchHeaders(Client::HEADERS)
            ->reply($mockData['responseCode'])
            ->withHeader('Content-Type', 'application/json')
            ->withJson($mockData['response']);

        return new Client(self::TEST_API_TOKEN, $builder->getClient());
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
     * @param string   $elementClassName
     * @param int      $countElement
     * @param string   $responseType
     */
    public static function assertResponseList(
        Response $response,
        string $elementClassName,
        string $responseType
    ): void {
        if ('array' === $responseType) {
            static::assertIsArray($response->getResponse());

            foreach ($response->getResponse() as $element) {
                static::assertInstanceOf($elementClassName, $element);
            }
        } else {
            static::assertInstanceOf($responseType, $response->getResponse());
        }
    }

    /**
     * @param Response $response
     * @param $className
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

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
    public $client;

    /* @var Serializer $serializer */
    protected $serializer;

    public $request;

    protected function setUp(): void
    {
        parent::setUp();

        $this->serializer = SerializerBuilder::create()->setPropertyNamingStrategy(
            new SerializedNameAnnotationStrategy(
                new IdenticalPropertyNamingStrategy()
            )
        )->build();
        $this->client= new Client('d6f33e419c16131e5325cbd84d5d6000');
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
     * @throws JsonException
     */
    public function getMock($requestedMethod, $response): void
    {
        $builder = new PockBuilder();
        $builder->matchMethod($requestedMethod)
            ->matchScheme(RequestScheme::HTTPS)
            ->matchHost(Client::API_URL)
            ->matchHeaders([
                'Content-Type' => 'application/json'
            ])
            ->reply(200)
            ->withHeader('Content-Type', 'application/json')
            ->withJson($response);

        $client = new Client($builder->getClient());
        $client->setCredentials('username', 'password');
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

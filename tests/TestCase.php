<?php

namespace Gwinn\Boxberry\Tests;

use Gwinn\Boxberry\Client;
use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase as Test;
use Pock\Enum\RequestScheme;
use Pock\Exception\JsonException;
use Pock\PockBuilder;

/**
 * Class TestCase.
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @internal
 * @coversNothing
 */
class TestCase extends Test
{
    /**
     * @var string
     */
    public const REQUESTS_FOLDER = __DIR__ . DIRECTORY_SEPARATOR . 'Requests' . DIRECTORY_SEPARATOR;

    /**
     * @var string
     */
    public const RESPONSE_FOLDER = __DIR__ . DIRECTORY_SEPARATOR . 'Response' . DIRECTORY_SEPARATOR;

    /**
     * @var string
     */
    public const ERROR_RESPONSE_FOLDER = __DIR__ . DIRECTORY_SEPARATOR . 'ErrorResponse' . DIRECTORY_SEPARATOR;

    /**
     * @var string
     */
    public const TEST_API_TOKEN = 'd6f33e419c16131e5325cbd84d5d6000';

    /**
     * @var string
     */
    public const TEST_API_HOST = 'api.boxberry.ru';

    /**
     * @var Client
     */
    public $client;

    /**
     * @var Serializer
     */
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
    public function getMock(array $mockData): Client
    {
        $builder = new PockBuilder();
        $builder->matchMethod($mockData['requestedMethod'])
            ->matchScheme(RequestScheme::HTTPS)
            ->matchHost(self::TEST_API_HOST)
            ->matchHeaders(Client::HEADERS)
            ->reply($mockData['responseCode'])
            ->withHeader('Content-Type', 'application/json')
            ->withJson($mockData['response'])
        ;

        return new Client(self::TEST_API_TOKEN, $builder->getClient());
    }

    public static function assertResponseList(
        ResponseInterface $response,
        string $elementClassName,
        string $responseType
    ): void {
        static::assertInstanceOf($responseType, $response);
        if (isset($response->result) && is_array($response->result)) {
            foreach ($response->result as $element) {
                static::assertInstanceOf($elementClassName, $element);
            }
        }
    }
}

<?php
namespace Gwinn\Boxberry;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use Gwinn\Boxberry\Builders\RequestBuilder;
use InvalidArgumentException;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class Client
{
    use Traits\Lists;
    use Traits\Parcel;
    use Traits\Service;
    use Traits\Order;
    use Traits\Warehouse;

    public const API_URL = 'https://api.boxberry.ru/json.php';
    public const HEADERS = [
            'Content-type' => 'application/json',
            'Accept' => 'application/json',
            'Cache-Control' =>'no-cache'
        ];

    /**
     * @var array $params
     */
    protected $params = [
        'connect_timeout' => 10,
        'timeout' => 30
    ];
    
    /**
     * @var ClientInterface $client
     */
    protected $client;
    /**
     * @var string
     */
    protected $token;
    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * Client constructor.
     *
     * @param string $token api key value
     */

    public function __construct(string $token, ClientInterface $client)
    {
        if(empty($token)){
            throw new InvalidArgumentException('token is required');
        }
        $this->token = $token;
        $this->client = $client;

        $this->serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new SerializedNameAnnotationStrategy(
                    new IdenticalPropertyNamingStrategy()
                )
            )
            ->build()
        ;
    }

    /**
     * @throws ClientExceptionInterface
     */
    public function post(array $options = []): ResponseInterface
    {
        $builder= new RequestBuilder();
        $request = $builder->buildPostQuery(self::API_URL, self::HEADERS, $options);
        return $this->client->sendRequest($request);
    }

    /**
     * @throws ClientExceptionInterface
     */
    public function get(array $options = []): ResponseInterface
    {
        $builder= new RequestBuilder();
        $request = $builder->buildGetQuery(self::API_URL, self::HEADERS, $options);
        return $this->client->sendRequest($request);
    }
}
<?php
namespace Gwinn\Boxberry;

use GuzzleHttp\Client as GuzzleClient;
use InvalidArgumentException;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class Client
{
    use Traits\Lists;
    use Traits\Parcel;
    use Traits\Service;
    use Traits\Order;
    use Traits\Warehouse;

    const API_URL = 'https://api.boxberry.ru/json.php';
    const CONFIG = [
        'http_errors' => false,
        'headers'  => [
            'Content-type' => 'application/json',
            'Accept' => 'application/json',
            'Cache-Control' =>'no-cache'
        ],
    ];

    /**
     * @var array $params
     */
    protected $params = [
        'connect_timeout' => 10,
        'timeout' => 30
    ];
    
    /**
     * @var GuzzleClient $client
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

    public function __construct(string $token)
    {
        if(empty($token)){
            throw new InvalidArgumentException('token is required');
        }
        $this->token = $token;
        $this->client = new GuzzleClient(self::CONFIG);

        $this->serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new SerializedNameAnnotationStrategy(
                    new IdenticalPropertyNamingStrategy()
                )
            )
            ->build()
        ;
    }
}
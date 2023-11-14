<?php

namespace Gwinn\Boxberry\Factory;

use Gwinn\Boxberry\Client;
use Psr\Http\Client\ClientInterface;

class ApiClientFactory
{
    /**
     * @var HttpClientFactory
     */
    protected $httpClientFactory;

    public function __construct(HttpClientFactory $clientFactory)
    {
        $this->httpClientFactory = $clientFactory;
    }

    /**
     * @param string $token
     * @param array<string, string>|null $config
     * @return Client
     */
    public function create(string $token, array $config = null): Client
    {
        /** @var ClientInterface $httpClient*/
        $httpClient = $this->httpClientFactory->create($config);
        return new Client(
            $token,
            $httpClient
        );
    }
}

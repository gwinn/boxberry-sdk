<?php

namespace Gwinn\Boxberry\Factory;

use Gwinn\Boxberry\HttpClient\HttpClient;

class HttpClientFactory
{
    /**
     * @param array<string, string>|null $config
     * @return HttpClient
     */
    public function create(array $config = null): HttpClient
    {
        $config = $config ?? [
            'Content-type' => 'application/json',
            'Accept' => 'application/json',
            'Cache-Control' => 'no-cache',
        ];

        return new HttpClient($config);
    }
}

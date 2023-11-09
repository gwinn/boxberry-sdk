<?php

namespace Gwinn\Boxberry\Builders;

use GuzzleHttp\Psr7\Request;
use http\Exception\InvalidArgumentException;

class RequestBuilder
{
    /**
     * @param string $url
     * @param array<string, string> $headers
     * @param array<string, array<string, array<mixed>|string>> $options
     * @return Request
     */
    public function buildPostQuery(string $url, $headers, $options): Request
    {
        if (!isset($options['json'])) {
            throw new InvalidArgumentException('no arguments for post request');
        }
        $body = \GuzzleHttp\Utils::jsonEncode($options['json']);

        return new Request('POST', $url, $headers, $body);
    }

    /**
     * @param string $url
     * @param array<string, string> $headers
     * @param array<string, array<string, string>|int> $options
     * @return Request
     */
    public function buildGetQuery(string $url, $headers, $options): Request
    {
        if (!isset($options['query'])) {
            throw new InvalidArgumentException('no arguments for get request');
        }
        /** @var array<string, string> $data */
        $data = $options['query'];
        $body = http_build_query($data, '', '&', \PHP_QUERY_RFC3986);

        return new Request('GET', $url . '?' . $body, $headers);
    }
}

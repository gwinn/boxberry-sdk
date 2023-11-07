<?php

namespace Gwinn\Boxberry\Builders;

use GuzzleHttp\Psr7\Request;
use http\Exception\InvalidArgumentException;

class ResponseBuilder
{
    public function buildPostQuery($url, $headers, $options): Request
    {
        if (!isset($options['json'])) {
            throw new InvalidArgumentException('no arguments for post request');
        }
        $body = \GuzzleHttp\Utils::jsonEncode($options['json']);
        return new Request('POST', $url, $headers, $body);
    }

    public function buildGetQuery($url, $headers, $options): Request
    {
        if (!isset($options['query'])) {
            throw new InvalidArgumentException('no arguments for get request');
        }
        $body = \http_build_query($options['query'], '', '&', \PHP_QUERY_RFC3986);
        return new Request('GET', $url.'?'.$body, $headers);
    }
}

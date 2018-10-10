<?php

namespace Jasonrgd\GraphQL;

use League\OAuth2\Client\Provider\AbstractProvider as OAuth2Provider;
use Psr\Cache\CacheItemPoolInterface as Cache;

class ClientBuilder
{
    public static function build(string $endpoint, array $guzzleOptions = []): Client
    {
        $guzzleOptions = array_merge(['base_uri' => $endpoint], $guzzleOptions);

        return new \Jasonrgd\GraphQL\Client(
            new \GuzzleHttp\Client($guzzleOptions),
            new \Jasonrgd\GraphQL\ResponseBuilder()
        );
    }
}

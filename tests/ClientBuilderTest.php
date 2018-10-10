<?php

namespace Jasonrgd\GraphQL\Test;

use GuzzleHttp\Cookie\CookieJar;
use Jasonrgd\GraphQL\ClientBuilder;
use PHPUnit\Framework\TestCase;

class ClientBuilderTest extends TestCase
{
    public function testBuild()
    {
        $client = ClientBuilder::build('http://foo.bar/qux');
        $this->assertInstanceOf(\Jasonrgd\GraphQL\Client::class, $client);
    }

    public function testBuildWithGuzzleOptions()
    {
        $guzzleOptions = [
            'cookies' => new CookieJar(),
        ];

        $client = ClientBuilder::build('http://foo.bar/qux', $guzzleOptions);
        $this->assertInstanceOf(\Jasonrgd\GraphQL\Client::class, $client);
    }
}

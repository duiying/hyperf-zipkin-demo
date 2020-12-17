<?php

namespace App\Logic;

use Hyperf\Guzzle\ClientFactory;

class TestLogic
{
    /**
     * @var \Hyperf\Guzzle\ClientFactory
     */
    private $clientFactory;

    public function __construct(ClientFactory $clientFactory)
    {
        $this->clientFactory = $clientFactory;
    }

    /**
     * 测试 guzzle
     *
     * @return array
     */
    public function testGuzzle()
    {
        $client = $this->clientFactory->create(['base_uri' => 'http://www.baidu.com']);
        $res = $client->get('/');
        return [
            'code' => $res->getStatusCode()
        ];
    }
}
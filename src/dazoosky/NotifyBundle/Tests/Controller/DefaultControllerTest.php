<?php

namespace dazoosky\NotifyBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/');

        $this->assertContains(json_encode(['msg' => 'Hello world']), $client->getResponse()->getContent());
    }
}

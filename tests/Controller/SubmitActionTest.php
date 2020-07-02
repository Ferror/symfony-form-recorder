<?php

declare(strict_types=1);

namespace Ferror\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubmitActionTest extends WebTestCase
{
    public function testItSubmits(): void
    {
        $client = static::createClient();

        $client->request('GET', '/submit');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testItCatchesHoneyPot(): void
    {
        $client = static::createClient();

        $client->request('GET', '/submit', ['_gotcha' => 'bot-value']);

        $this->assertEquals(400, $client->getResponse()->getStatusCode());
    }
}

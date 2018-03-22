<?php

namespace Utilisateurs\UtilisateursBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Mehdi');

        $this->assertTrue($crawler->filter('html:contains("Hello Mehdi")')->count() > 0);
    }
}

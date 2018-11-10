<?php

namespace Acme\ClientBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AjaxControllerTest extends WebTestCase
{
    public function testIndexcontent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/indexcontent');
    }

}

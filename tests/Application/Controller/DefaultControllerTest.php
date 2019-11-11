<?php
declare(strict_types=1);

namespace Application\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class DefaultControllerTest extends WebTestCase
{
    public function testItLoadsMainPage() : void
    {
        $client = self::createClient();
        $client->request('GET', '/');
        $response = $client->getResponse();

        $this->assertTrue($response->isSuccessful());
    }
}

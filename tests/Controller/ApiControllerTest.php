<?php

namespace App\Tests\Controller;

use App\Controller\ApiController;
use PHPUnit\Framework\Attributes\Test;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ApiControllerTest extends KernelTestCase
{
    #[Test]
    public function indexIs(): void
    {
        $controller = new ApiController();
        $response = $controller->index();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJsonStringEqualsJsonString(
            json_encode(['api' => 'ApiController index method']),
            $response->getContent()
        );
//        $this->assertTrue(true);
    }

}
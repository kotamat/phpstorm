<?php

namespace Tests\Feature;

use ApiSpec\ApiSpecTestCase;
use Tests\CreatesApplication;

class ExampleTest extends ApiSpecTestCase
{
    use CreatesApplication;

    protected $isExportSpec = true;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->getJson('/api/');

        $response->assertStatus(200);
    }
}

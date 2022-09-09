<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_example()
    {
        $response = $this->get('api/records/1');
        $response->assertStatus(200);
    }

    public function test_example_202()
    {
        $response = $this->get('api/records/3');
        $response->assertStatus(202);
    }

    public function test_example_404()
    {
        $response = $this->get('api/records/4');
        $response->assertStatus(404);
    }
}

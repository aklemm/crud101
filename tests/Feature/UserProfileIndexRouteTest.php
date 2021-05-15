<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserProfileIndexRouteTest extends TestCase
{
    public function test_route_loads()
    {
        $response = $this->get('/user-profiles');
        $response->assertStatus(200);
    }
}

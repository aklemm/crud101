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

    public function test_controller_is_UserProfiles_IndexController()
    {
        $response = $this->get('/user-profiles');
        $actual = get_class(\Route::current()->getController());
        $expected = 'App\Http\Controllers\UserProfiles\IndexController';
        $this->assertSame($expected, $actual);
    }
}

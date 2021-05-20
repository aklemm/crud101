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

    public function test_program_index_controller_calls_getData_method_on_IndexQuery_class()
    {
        $indexQueryMock = \Mockery::mock(IndexQuery::class);
        $indexQueryMock->shouldReceive('getData')->once();
        $this->app()->instance(IndexQuery::class, $indexQueryMock);
        $results = $this->get('/user-profiles');
    }
}

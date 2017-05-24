<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class PhoneTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testPostAsUnauthenticated()
    {
      $response = $this->post("/products");
      $response->assertStatus(302);
    }
/*
    public function testPostAsAuthenticated()
    {
      $user = factory(User::class)->create();

      $response = $this->actingAs($user)
                       ->post("/products");
      $response->assertStatus(500);
    }
*/
}

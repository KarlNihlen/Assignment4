<?php

namespace Tests\Unit;

use App\Http\Controllers\ProductsController;
use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



final class ProductTest extends TestCase
{
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testApplication()
    {
      $response = $this->withSession(['foo' => 'bar'])
                                    ->get('/');
    }

    public function testApplicationUser()
    {
      $user = factory(User::class)->create();
      $response = $this->actingAs($user)
                       ->withSession(['foo' => 'bar'])
                       ->get('/');
    }



  



}

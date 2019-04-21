<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModelTest extends TestCase
{
	/**
     * A basic test example.
     *
     * @return void
     * @test
     */
    

//    public function user_name_attribute()
//    {
//        // create user
//    	$user = User::create(['name'=>'Mahadi','email'=>'abualmahadi@yahoo.com','password'=>'random']);
//
//     }


   public function createUser()
   {
       // create user
   	
   		$user = User::create(['name'=>'Mahadi','email'=>'abualmahadi@yahoo.com','password'=>'random']);
		$this->assertStatus(200);
    }

}

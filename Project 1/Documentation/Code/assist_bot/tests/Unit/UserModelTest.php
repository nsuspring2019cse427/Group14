<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModelTest extends TestCase
{

    public function user_name_attribute()
    {
        // create user
    	$user = User::create(['name'=>'Mahadi','email'=>'abualmahadi@yahoo.com','password'=>'random']);

     }
}

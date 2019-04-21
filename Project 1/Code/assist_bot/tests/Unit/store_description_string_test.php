<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class store_description_string_test extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->user = User::first();
    }


    /** 
     * 3 assertions but show 1, both are valid.
     * @test
     */
    public function store_description_string()
    {
        // Storage::fake('avatars');
        // $file = UploadedFile::fake()->image('avatar.pdf');

        $response = $this->actingAs($this->user)->post('/forms/create', [
            'title'=>'hello',
            'description'=>222,
            'file'=> $file,
            'tags'=>[1, 2]
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'description' => 'The description must be a string.'
        ]);
    }

     
	
}

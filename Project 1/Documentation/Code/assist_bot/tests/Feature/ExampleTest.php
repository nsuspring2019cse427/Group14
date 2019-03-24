<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */


    public function homepage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

//    public function testMessages()
//    {
//        $response = $this->get('/messages');
//        $response->assertStatus(200);
//    }

    public function testTagStore()
    {
        $data = [
            'name'=>'test'
        ];
        $response = $this->post('/tag/create', $data);
        $response->assertRedirect();
    }
    public function testTagIndex()
    {
        $response = $this->get('/tag');
        $response->assertStatus(200);
    }


//    public function testCreateNewProfile()
//    {
//        $response = $this->get('/createNewProfile');
//        $response->assertStatus(200);
//    }

    public function testBotman()
    {
        $response = $this->get('/botman/tinker');
        $response->assertStatus(200);
    }
    public function testBotmanPost()
    {
        $response = $this->post('/botman');
        $response->assertOk();
    }



}

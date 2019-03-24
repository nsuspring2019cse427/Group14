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

    public function testFormList()
    {
        $response = $this->get('/forms');
        $response->assertStatus(200);
    }
    public function testFormCreate()
    {
        $response = $this->get('/forms/create');
        $response->assertStatus(200);
    }
    public function testFormStore()
    {
        Storage::fake('avatars');
        $file = UploadedFile::fake()->image('avatar.jpg');
        $data = [
            'title'=>'test',
            'description'=>'test des',
            'file'=> $file,
            'tags'=>[1, 2]
        ];
        $response = $this->post('/forms/create', $data);
        $response->assertRedirect();

    }
    public function testFormSearch()
    {
        $response = $this->get('/forms/search');
        $response->assertStatus(200);
    }
    public function testFormDownload()
    {
        $response = $this->get('/forms/download/5'); // 5 is parametter
        $response->assertStatus(200);
    }

    public function testQAList()
    {
        $response = $this->get('/qa');
        $response->assertStatus(200);
    }
    public function testQACreate()
    {
        $response = $this->get('/qa/create');
        $response->assertStatus(200);
    }
    public function testQAStore()
    {
        $data = [
            'question'=>'test',
            'answer'=>'test des'
        ];
        $response = $this->post('/qa/create', $data);
        $response->assertRedirect();
    }

    public function testTagCreate()
    {
        $response = $this->get('/tag/create');
        $response->assertStatus(200);
    }
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

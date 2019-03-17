<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testDashBoard()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(200);
    }

    public function testMessages()
    {
        $response = $this->get('/messages');
        $response->assertStatus(200);
    }

    public function testFormCreate()
    {
        $response = $this->get('forms/create');
        $response->assertStatus(200);
    }

    public function testFormSearch()
    {
        $response = $this->get('forms/search');
        $response->assertStatus(200);
    }

    public function testFormDownload()
    {
        $response = $this->get('forms/download');
        $response->assertStatus(200);
    }

    public function testQACreate()
    {
        $response = $this->get('qa/create');
        $response->assertStatus(200);
    }

    public function testTagCreate()
    {
        $response = $this->get('tag/create');
        $response->assertStatus(200);
    }

    public function testTagIndex()
    {
        $response = $this->get('tag/index');
        $response->assertStatus(200);
    }

    public function testCreateNewProfile()
    {
        $response = $this->get('/createNewProfile');
        $response->assertStatus(200);
    }

    public function testBotman()
    {
        $response = $this->get('/botman');
        $response->assertStatus(200);
    }

    public function testGoogleLogin()
    {
        $response = $this->get('login/google');
        $response->assertStatus(200);
    }

    public function testGoogleCallback()
    {
        $response = $this->get('login/google/callback');
        $response->assertStatus(200);
    }
}

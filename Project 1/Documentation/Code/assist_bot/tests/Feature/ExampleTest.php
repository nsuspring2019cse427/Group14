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
        $response = $this->get('/dashboard');
        $response = $this->get('/messages');
        $response = $this->get('/create');
        $response = $this->get('/search');
        $response = $this->get('/download');
        $response = $this->get('/createNewProfile');
        $response = $this->get('/botman');
        $response = $this->get('/login/google');
        $response = $this->get('/login/google/callback');
        $response->assertStatus(200);
    }
}

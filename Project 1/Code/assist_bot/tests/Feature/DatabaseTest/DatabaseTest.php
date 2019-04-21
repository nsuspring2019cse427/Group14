<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
public function testDatabase()
{
    // Make call to application...

    $this->assertDatabaseHas('users', [
    	'name' => 'Mahadi'
        'email' => 'abualmahadi@yahoo.com'
    ]);

    $this->assertDatabaseHas('tags', [
    	'name' => 'test'
    ]);

    $this->assertDatabaseHas('q_as', [
    	'questions' => 'hi'
        'answers' => 'hello'
    ]);

    $this->assertDatabaseHas('forms', [
    	'title' => 'test'
        'description' => 'test des'
        'file' => 'fkOync1QKzDrnSzw2TYlhyx6uQvlvtx3h2OMnyhv.jpeg'
    ]);

    }
}

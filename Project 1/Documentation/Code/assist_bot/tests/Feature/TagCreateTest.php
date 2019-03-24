<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagCreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function testTagCreate()
    {
        $response = $this->get('/tag/create');
        $response->assertStatus(200);
    }
}

?>
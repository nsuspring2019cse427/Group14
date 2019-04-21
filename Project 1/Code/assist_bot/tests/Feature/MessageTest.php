<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
   public function testMessages()
   {
       $response = $this->get('/messages');
       $response->assertStatus(200);
   }
}

?>
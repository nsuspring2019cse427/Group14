<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateNewProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
   public function testCreateNewProfile()
   {
       $response = $this->get('/createNewProfile');
       $response->assertStatus(200);
   }
}

?>
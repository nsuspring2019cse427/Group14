<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FormStoreTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
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
}

?>
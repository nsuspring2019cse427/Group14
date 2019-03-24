<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagStoreTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function testTagStore()
    {
        $data = [
            'name'=>'test'
        ];
        $response = $this->post('/tag/create', $data);
        $response->assertRedirect();
    }
}

?>
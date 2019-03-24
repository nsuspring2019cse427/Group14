<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QAStoreTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function testQAStore()
    {
        $data = [
            'question'=>'test',
            'answer'=>'test des'
        ];
        $response = $this->post('/qa/create', $data);
        $response->assertRedirect();
    }
}

?>
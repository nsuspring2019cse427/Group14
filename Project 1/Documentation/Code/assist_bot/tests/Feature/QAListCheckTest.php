<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashBoardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function testQAList()
    {
        $response = $this->get('/qa');
        $response->assertStatus(200);
    }
}

?>
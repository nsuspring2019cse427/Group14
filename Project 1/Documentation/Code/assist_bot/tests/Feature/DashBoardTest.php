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
    public function testDashBoard()
    {
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
    }
}

?>
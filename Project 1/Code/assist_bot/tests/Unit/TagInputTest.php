<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class TagInputTest extends TestCase
{
	
    public function setUp()
    {
        parent::setUp();
        $this->user = User::first();
    }

     /** 
      * 3 assertions but show 1, both are valid.
      * @test
     */
	public function store_question_required()
    {
        $response = $this->actingAs($this->user)->post('/tag/create', [
            'name'=>'',
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'name' => 'The name field is required.'
        ]);
    }

	
}

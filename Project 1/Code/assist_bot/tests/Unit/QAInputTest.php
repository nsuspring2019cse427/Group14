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

class QAInputTest extends TestCase
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
        $response = $this->actingAs($this->user)->post('/qa/create', [
            'question'=>'',
            'answer'=>'tanvir',
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'question' => 'The question field is required.'
        ]);
    }

	
}

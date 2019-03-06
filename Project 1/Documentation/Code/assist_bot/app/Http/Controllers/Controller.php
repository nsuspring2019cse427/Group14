<?php

namespace App\Http\Controllers;

use App\QA;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	
	
	public function botman()
	{
		//return request('message');
		
		DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);
		$botman = resolve('botman');
		
		$question = QA::where('questions', 'like', '%'.request('message').'%')->first();
		if($question){
			$botman->hears($question->questions, function (BotMan $bot) use ($question) {
				$bot->reply($question->answers);
			});
		}
		$botman->fallback(function($bot) {
			$bot->reply('Sorry, I did not understand these commands...');
		});
		$botman->listen();
	}
	
	public function botmanTinker()
	{
		return view('botman.tinker');
	}
	
	
	
	
}

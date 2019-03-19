<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('FrontEnd/welcome');
});


Auth::routes();

Route::get('/dashboard', 'DashBoardController@index')->name('dashBoard');

Route::get('/messages', 'MessagesController@index')->name('messages');

Route::group(['prefix' => 'forms'], function (){
    Route::get('/', 'FormsController@index')->name('forms');
    Route::get('/create', 'FormsController@create')->name('forms.create');
    Route::post('/create', 'FormsController@store')->name('forms.store');
    Route::get('/search', 'FormsController@search')->name('forms.search');
    Route::get('/download/{id}', 'FormsController@download')->name('forms.download');
});
Route::group(['prefix' => 'qa'], function (){
    Route::get('/', 'QAController@index')->name('qa.index');
    Route::get('/create', 'QAController@create')->name('qa.create');
    Route::post('/create', 'QAController@store')->name('qa.store');
});
Route::group(['prefix' => 'tag'], function (){
    Route::get('/', 'TagController@index')->name('tag.index');
    Route::get('/create', 'TagController@create')->name('tag.create');
    Route::post('/create', 'TagController@store')->name('tag.store');
});


Route::get('/createNewProfile', 'CreateNewProfileController@index')->name('createNewProfile');


Route::post('/botman', 'Controller@botman');
Route::get('/botman/tinker', 'Controller@botmanTinker');



// Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');

Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
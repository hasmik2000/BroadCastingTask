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
use App\Events\MessageSent;
use App\Listeners\fetchMessages;

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
   Route::get('/messages/user/{id}', 'MessageController@fetch');
//   Route::post('/messages/user/{id}', 'MessageController@send');
    Route::post('send', 'MessageController@send');
});

//Route::get('/alertBox', function () {
//   return view('fetchMessages');
//});
//
//Route::get('/fireEvent', function () {
//   event(new MessageSent());
//});
//Route::get('message/index', 'MessageController@index');
//Route::get('message/send', 'MessageController@send');
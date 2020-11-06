<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
     return view('welcome');
 });

*/

Route::get('/', function (){
    return view('index');
});

Auth::routes();

Route::get('/chatbox', 'App\Http\Controllers\UsersController@index')->name('inbox');
Route::get('/select/{id?}', 'App\Http\Controllers\UsersController@select')->name('contact');
Route::get('/home', 'App\Http\Controllers\MessagesController@index')->name('home');
Route::get('/create/{id?}/{subject?}', 'App\Http\Controllers\MessagesController@create')->name('create');
Route::post('/send', 'App\Http\Controllers\MessagesController@send')->name('send');
Route::get('/sent', 'App\Http\Controllers\MessagesController@sent')->name('sent-messages');
Route::get('/read/{id}', 'App\Http\Controllers\MessagesController@read')->name('read');
Route::get('/delete/{id}', 'App\Http\Controllers\MessagesController@delete')->name('delete');
Route::get('/deleted', 'App\Http\Controllers\MessagesController@deleted')->name('deleted-messages');
Route::get('/return/{id}', 'App\Http\Controllers\MessagesController@return')->name('return');



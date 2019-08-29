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
    return view('welcome');
});

Route::middleware('checkup')->get('/test',function(){
  Return 'Hello world';
});
Route::middleware('throttle:5,1')->group(function () {
  Route::get('/user', function () {
      return 'accessed';
  });
});

Route::middleware('throttle:5,1')->group(function(){
Route::prefix('opicho')->get('/success',function(){
return 'success';
});
});

Route::middleware('throttle:5,1')->get('/exp',function(){
 return 'mastering route';
});

Route::fallback(function(){
return "no routes available";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('basics','BasicsController');

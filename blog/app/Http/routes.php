<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/index', function (){
  return view('index');
});
Route::get('/login', function(){
  return view('login');
});
Route::get('/closet', function(){
    return view ('closet');
});
Route::get('clothes/shirts', function(){
    return view('clothes/shirts');
});
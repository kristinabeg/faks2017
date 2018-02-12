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
Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/', function () {
    //return view('welcome');
  return view('fakultet');
});

Route::resource("Zupanija","ZupanijaController");

Route::get('/korisnici', 'usercontroller@getusers');
Route::get('/s', 'usercontroller@studenti');

Route::get('/neki-blade-test', function () {
    return view('test');
});

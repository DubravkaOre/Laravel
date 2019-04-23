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
Route::get('/register',function() {
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
Route::get('/test', function() {
   return view('test');
});
Route::get('blade', function () {
    return view('child');
});
//insert data
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert'); 


Route::resource('shares', 'CustomerController');

Route::get('insert','StudController@insertform');
Route::post('create','StudController@insert');
Route::get('view-records','StudController@index');

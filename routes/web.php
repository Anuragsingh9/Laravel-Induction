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
 
// Route::get('/', function(){
//     return view('form');
// })->middleware('test');

 Route::get('/', 'FormController@index');

// Route::get('/forms','FormController@index');

Route::get('/create','FormController@create');

Route::post('/store','FormController@store');

Route::get('/edit/{id}','FormController@edit');

Route::get('/show/{id}','FormController@show');


Route::post('/update/{id}','FormController@update');

Route::get('/delete/{id}','FormController@destroy');

Route::resource('users','UsersController');

Route::get('/app',function () {
    return view('app');
});


Route::get('/master',function () {
    return view('master');
});







Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');









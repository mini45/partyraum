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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
    Route::get('calendar',['as'=>'calendar','uses'=>'CalendarController@index']);
    Route::get('profil',['as'=>'profil','uses'=>'CalendarController@index']);


    Route::get('webdav',['as'=>'profil','uses'=>'WebDavController@test']);


});







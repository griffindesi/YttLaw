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
Route::get('api/users/{user}', function (App\User $user) {
    return $user;
});


Route::get('/Admin', 'HomeController@index')->name('Admin');
Route::get('/About_Us','FrontController@AboutUs');
Route::get('/Kornar_Toygar','FrontController@Kornar_Toygar');
Route::get('/Raed_Abu_Alhaijaa','FrontController@Raed_Abu_Alhaijaa');
Route::get('/Melike_Ünlüsü','FrontController@Melike_Ünlüsü');
Route::get('/Serap_Duman','FrontController@Serap_Duman');
Route::get('/single_news','FrontController@single_news');
Route::get('/single-practice','FrontController@single_practice');
Route::get('/Attorney_Mert_Yalçın','FrontController@Attorney_Mert_Yalçın');
Route::get('/Attorney_Kortan_Toygar','FrontController@Attorney_Kortan_Toygar');
Route::get('/Attorney_Mert_Karayol','FrontController@Attorney_Mert_Karayol');
Route::get('/single_vacancy','FrontController@single_vacancy');

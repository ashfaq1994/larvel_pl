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
    // return view('welcome');
    // return \App\Room::find(1)->RoomType->name;

    session()->flush();



});

Auth::routes();


Route::get('/search', 'Search@index')->name('Search');
Route::get('/check', 'Search@check')->name('check');
Route::get('/checkroom', 'Search@checkRoom')->name('checkRoom');
Route::get('/room/anyData', 'RoomController@anyData')->name('room.anyData');
Route::resource('room', 'RoomController');

Route::resource('room-type', 'RoomTypeController');

// Route::get('/admin', 'RoomController@index')->name('room');

Route::get('/home', 'HomeController@index')->name('home');

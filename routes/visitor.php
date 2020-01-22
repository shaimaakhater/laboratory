<?php
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/', function () {
    return view('index');
});

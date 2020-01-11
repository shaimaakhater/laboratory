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

//admin group
Route::group(['middleware' => ['auth']],function(){
    require_once __DIR__ .'/admin.php';
});
//user group
Route::group(['middleware' => ['auth']],function(){
    require_once __DIR__ .'/user.php';
});
require_once __DIR__ .'/visitor.php';

Auth::routes();

 
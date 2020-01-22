<?php

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function () {

    Config::set('auth.defines','admin');
    Route::get('login','AdminAuthController@login');
    Route::post('login','AdminAuthController@dologin')->name('dologin');
    Route::group(['middleware'=>'admin:admin'],function (){
        Route::get('/',function(){
            return view('admin.home');
        });
        Route::resource('admin','AdminController');
        Route::any('logout','AdminAuthController@logout')->name('logout');

    });

});

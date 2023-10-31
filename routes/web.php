<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/category', 'HomeController@category')->name('category');
});

Route::group(['namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('/admin', 'AdminController@index')->name('index');
    // Route::get('/admin1', 'AdminController@index1')->name('index1');
    
});
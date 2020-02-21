<?php

Route::get('/', 'SiteController@index');

Route::resource('books', 'BookController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

//Аутентификация
Auth::routes();

Route::get('/', 'MainPageController@template')->name('mainpage');

Route::get('/home', 'HomeController@index')->name('home');

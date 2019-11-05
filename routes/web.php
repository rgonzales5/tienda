<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|AUTOR:ROLANDO GONZALES
|FECHA:2019-11-05
|
*/

Route::get('/', 'TestController@welcome');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['cors']], function () {
  Route::get('api/test', 'CarnetController@test')->name('test');
  Route::post('api/carne', 'CarnetController@carneIdcbis')->name('carneIdcbis');
});
<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('api/test', 'ApiController@test')->name('test');
    Route::post('api/carne', 'ApiController@carneIdcbis')->name('carneIdcbis');
  });
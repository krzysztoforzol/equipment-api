<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], static function () {
    Route::get('/items', 'ItemController@index');
    Route::post('/buy', 'BuyController@store');

    Route::get('/bags', 'BagController@index');
    Route::get('/bags/{id}', 'BagController@show');
});

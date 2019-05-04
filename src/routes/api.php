<?php

Route::group(['namespace' => 'ContractZero\CoinMarketerClient\Http\Controllers', 'middleware' => ['api'], 'prefix' => 'api'], function (){
    Route::group(['prefix' => '/cryptocurrency'], function (){
        Route::get('maps', 'CryptocurrencyController@maps');
        Route::get('info', 'CryptocurrencyController@info');
    });
});

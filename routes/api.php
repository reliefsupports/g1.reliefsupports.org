<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/v1/entry/needs', 'NeedsController@get');
    Route::post('/v1/entry/needs', 'NeedsController@post');
    
    Route::get('/v1/entry/donations', 'DonationController@get');
    Route::post('/v1/entry/donations', 'DonationController@post');
});



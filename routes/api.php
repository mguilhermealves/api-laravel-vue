<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('auth', 'Auth\AuthApiController@authenticate');
Route::post('auth-refresh', 'Auth\AuthApiController@refresh');
Route::get('me', 'Auth\AuthApiController@getAuthenticatedUser');

Route::group([
    'prefix' => 'v1',
    'namespace' => 'Api\v1',
    'middleware' => 'auth:api'
], function () {
    Route::get('categories/{id}/products', 'CategoryController@products');
    Route::apiResource('categories', 'CategoryController');

    Route::apiResource('products', 'ProductController');
});

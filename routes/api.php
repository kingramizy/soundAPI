<?php

use Illuminate\Http\Request;
Use App\App;
use App\Category;

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

Route::group(['prefix' => 'v1'], function() {
    Route::resource('apps', 'AppController', ['only' => ['index', 'show']]);
    Route::resource('apps.categories', 'CategoryController', ['only' => ['index', 'show']]);
});

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

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

Route::get('/pools', [\App\Http\Controllers\IMS::class, 'getPools'])->name('getPools');
Route::get('/cookie', [\App\Http\Controllers\IMS::class, 'cookie'])->name('cookie');




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

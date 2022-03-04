<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/brand', 'App\Http\Controllers\BrandController');

Route::resource('/category', 'App\Http\Controllers\CategoryController');

Route::resource('/country',CountryController::class);
//  Route::post('/brand/destroy',[BrandController::class,'destroy']);
Route::resource('/state',StateController::class);
Route::resource('/city',CityController::class);




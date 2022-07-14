<?php

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestApiController;
use App\Http\Controllers\UserController;

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
Route::get('/first-api',[TestApiController::class,'index'])->name('index.api');
Route::post('/store-api',[TestApiController::class,'store'])->name('store.api');
Route::get('/show-api',[TestApiController::class,'show'])->name('show.api');

Route::post("login",[UserController::class,'index']);
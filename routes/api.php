<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/user/signup',  [UserController::class, 'store']);

Route::post('/user/signin',  [UserController::class, 'signIn']);


Route::middleware('guest')->group(function () {

	Route::post('/user/forgot-password',  [UserController::class, 'forgotPassword']);

	Route::get('/user/reset-password',  function(){})->name('password.reset');

	Route::post('/user/reset-password',  [UserController::class, 'resetPassword'])->name('password.update');

});






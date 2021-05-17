<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('email/welcome', function() {


	return new App\Mail\Welcome;

});


Route::get('/', function () {

	$users = User::all();

    return view('index', ['users'=> $users]);

})->name('index');



Route::get('/register', [UserController::class, 'create'])->middleware('logged.in');



Route::post('/register', [UserController::class, 'store']);


Route::get('/login', [UserController::class, 'login'])->middleware('logged.in');

Route::post('/login', [UserController::class, 'verifyLogin']);



Route::get('/logout', [UserController::class, 'logout']);


Route::get('/user/{username}', [UserController::class, 'show']);







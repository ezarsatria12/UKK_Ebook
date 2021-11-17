<?php

use App\Http\Controllers\AddBookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dasboard/hello');
})->name('dasboard')->middleware('auth');

Route::get('/user', function () {
    return view('dasboard/user');
})->middleware('auth');

Route::get('/viewbook', function () {
    return view('dasboard/viewbook');
})->middleware('auth');
Route::get('/register', [UserController::class, 'index'])->middleware('guest');
Route::post('/register', [UserController::class, 'store']);

Route::get('/addbook', [AddBookController::class, 'index'])->middleware('auth');
Route::post('/addbook', [AddBookController::class, 'store']);



Route::post('/out', [LogoutController::class, 'out']);
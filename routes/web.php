<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('users');
});

Route::get('/noaccess', function () {
    return view('noaccess');
});
Route::get('/inner', function () {
    return view('inner');
});
Route::post('users',[usersController::class,'registerUser']);


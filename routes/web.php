<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('Admin', function () {
    return view('Admin');
})->middleware('auth');

Route::get('/Login',[LoginController::class,'Login'])->name('login')->middleware('guest');
Route::post('/Loginproses',[LoginController::class,'Loginproses'])->name('Loginproses');
Route::get('/Register',[LoginController::class,'Register'])->name('Register')->middleware('guest');
Route::post('/Registeruser',[LoginController::class,'Registeruser'])->name('Registeruser');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SelfCareController;
use App\Http\Controllers\LoginController;
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
// login
Route::get('/', function () {
    return view('login');
});

// Register
Route::get('/register', function(){
    return view('register');
});

// dashboard
Route::get('/dashboard', function(){
    return view('dashboard');
});

// data perjalanan

Route::get('/tampilandata', [SelfCareController::class,'tampilan'])->name('tampilandata');

Route::get('/tambahdata', [SelfCareController::class,'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [SelfCareController::class,'insertdata'])->name('insertdata');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SelfCareController;
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

Route::get('/', [LoginController::class, 'index'])->name('login');
    
Route::post('/', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']); 

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


// data user
Route::get('/datauser', [DataUserController::class,'index'])->name('datauser');
Route::get('/delete/{id}', [DataUserController::class,'delete'])->name('delete');

// data admin

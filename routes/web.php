<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('dashboard');
});


Route::get('tampilandata', [SelfCareController::class,'tampilan'])->name('tampilandata');
Route::get('tambahdata', [SelfCareController::class,'tambahdata'])->name('tambahdata');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanLaptopController;
use App\Http\Controllers\RegisterController;
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



Route::middleware('isGuest')->group(function () {
    Route::get('/', [PeminjamanLaptopController::class,'index']);
    Route::get('/login', [PeminjamanLaptopController::class,'login']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [PeminjamanLaptopController::class,'register']);
    Route::post('/register', [RegisterController::class,'register']);
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('isLogin')->group(function () {
    Route::get('/',[PeminjamanLaptopController::class,'index']);
    Route::get('/create',[PeminjamanLaptopController::class,'create']);
    Route::post('/create',[PeminjamanLaptopController::class,'create'])->name('create');
    Route::get('/data',[PeminjamanLaptopController::class,'data']);
    Route::post('/data',[PeminjamanLaptopController::class,'store'])->name('data');
    Route::patch('/kembali/{id}',[PeminjamanLaptopController::class,'kembali'])->name('edit');
    Route::delete('/delete/{id}',[PeminjamanLaptopController::class,'delete'])->name('delete');
});
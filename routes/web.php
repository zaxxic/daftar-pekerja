<?php

use App\Http\Controllers\dashboardUserController;
use App\Http\Controllers\detailLowonganController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerController;
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



Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/cek', function () {
    return view('cek-daftar');
});

// Route::resource('login', loginController::class);

Route::resource('register', registerController::class);
Route::get('register' , [registerController::class , 'index'])->name('register');

Route::get('/login', [loginController::class, 'showLogin'])->name('login');

Route::post('/form-login', [loginController::class, 'login'])->name('fromLogin');

Route::resource('dashboard-user', dashboardUserController::class);
Route::get('/dashboard-user', [dashboardUserController::class, 'index'])->name('dashboard-user');

route::resource('detail-lowongan', detailLowonganController::class);



Route::get('/profile', [ProfileController::class, 'showProfile'])->name('login');


Route::get('/', function () {
    return view('index');
});
Route::middleware(['auth'])->group(function () {
});

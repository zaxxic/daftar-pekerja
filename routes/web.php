<?php

use App\Http\Controllers\loginController;
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

Route::resource('register', registerController::class);

Route::get('/login-admin', [loginController::class, 'showLogin'])->name('login');
Route::post('/login', [loginController::class, 'login'])->name('fromLogin');



Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });
});

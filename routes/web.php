<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardUserController;
use App\Http\Controllers\detailLowonganController;

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
Route::get('/dashboard-admin', function () {
    return view('admin-dashboard.index');
});

Route::get('/cek', function () {
    return view('cek-daftar');
});

// Route::resource('login', loginController::class);

Route::resource('lowongan', LowonganController::class);
Route::resource('divisi', DivisiController::class);
Route::get('register' , [registerController::class , 'index'])->name('register');
Route::post('register-store' , [registerController::class , 'store'])->name('register-store');

Route::get('/login', [loginController::class, 'showLogin'])->name('login');
Route::post('/form-login', [loginController::class, 'login'])->name('form-login');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::resource('dashboard-user', dashboardUserController::class);
Route::get('/dashboard-user', [dashboardUserController::class, 'index'])->name('dashboard-user');

route::resource('detail-lowongan', detailLowonganController::class);
Route::get('/detail-lowongan{id}', [detailLowonganController::class, 'show'])->name('detailLowongan');






Route::group(['middleware' => ['auth', 'user_role']], function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');

});

Route::group(['middleware' => ['auth', 'admin_role']], function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');

});

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Route::get('approval', [ApprovalController::class, 'index'])->name('approval');
Route::patch('acc/{id}', [ApprovalController::class, 'update'])->name('acc');
Route::patch('reject', [ApprovalController::class, 'index'])->name('reject');
Route::get('detail-approval', [ApprovalController::class, 'show'])->name('detail-approval');

Route::get('pekerja', [PekerjaController::class, 'index'])->name('pekerja');

Route::get('error-403', function () {
    return view('403');
})->name('unauthorized');
Route::get('pekerja', [PekerjaController::class, 'index'])->name('pekerja');

Route::get('detail', [LowonganController::class, 'detail'])->name('detail');
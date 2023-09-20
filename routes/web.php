<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\PekerjaDitolakController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DetailLowonganController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Models\Lowongan;

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


;


// Route::resource('login', loginController::class);


Route::get('register' , [RegisterController::class , 'index'])->name('register')->middleware('guest');
Route::post('register-store' , [RegisterController::class , 'store'])->name('register-store');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/form-login', [LoginController::class, 'login'])->name('form-login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');



Route::middleware('checkLogin')->group(function () {
    Route::middleware('role:admin')->group(function () {
    Route::resource('lowongan', LowonganController::class);
    Route::resource('divisi', DivisiController::class)->except(['show', 'update','edit']);
    Route::delete('hapus-lowongan', [LowonganController::class, 'hapus'])->name('hapus-lowongan');

    Route::get('approval', [ApprovalController::class, 'index'])->name('approval');
    Route::patch('acc/{id}', [ApprovalController::class, 'update'])->name('acc');
    Route::patch('reject/{id}', [ApprovalController::class, 'reject'])->name('reject');
    Route::get('detail-approval', [ApprovalController::class, 'show'])->name('detail-approval');

    //Pekerja yang sudah diterima / berstatus diterima
    Route::get('pekerja', [PekerjaController::class, 'index'])->name('pekerja');
    Route::patch('nonactive/{id}', [PekerjaController::class, 'update'])->name('nonactive');
    Route::get('detail-pekerja', [ApprovalController::class, 'show'])->name('detail-pekerja');

    //Pekerja yang ditolak dan dinonaktifkan / berstatus ditolak
    Route::get('pekerja-ditolak', [PekerjaDitolakController::class, 'index'])->name('pekerja-ditolak');

    //Lowongan aktif / nonaktif
    Route::patch('nonactive-lowongan/{id}', [LowonganController::class, 'nonactive'])->name('nonactive-lowongan');
    Route::patch('active-lowongan/{id}', [LowonganController::class, 'active'])->name('active-lowongan');
    Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin');

    Route::get('/user/{id}/cv', [ApprovalController::class, 'cv'])->name('user.cv');
    Route::get('/user/{id}/lamaran', [ApprovalController::class, 'lamaran'])->name('user.lamaran');
    });


    Route::middleware(['role:user'])->group(function () {
        // user
        Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
        Route::post('/ubah-password', [ProfileController::class, 'updatePassword'])->name('ubah-password');
        Route::patch('/ubah-profile', [ProfileController::class, 'updateProfile'])->name('ubah-profile');
        Route::patch('/ubah-foto', [ProfileController::class, 'updateFoto'])->name('ubah-foto');
        Route::resource('detail-lowongan', DetailLowonganController::class);
        route::post('batalkan-lowongan',[ DetailLowonganController::class, 'batalkan'])->name('batalkan-lowongan');
        Route::get('/detail-lowongan{id}', [DetailLowonganController::class, 'show'])->name('detailLowongan');
        Route::get('/dashboard-user', [DashboardUserController::class, 'index'])->name('dashboard-user');
        Route::get('/lowongan-user', [DashboardUserController::class, 'lowongan'])->name('lowongan-user');
        Route::post('/dashboard-filter', [DashboardUserController::class, 'filterLowongan'])->name('dashboard-filter');

    });
    });



Route::get('/', function () {
    return view('index');
})->name('dashboard');


Route::get('error-403', function () {
    return view('403');
})->name('unauthorized');


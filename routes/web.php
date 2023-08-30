<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\dashboardAdminController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\PekerjaDitolakController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardUserController;
use App\Http\Controllers\detailLowonganController;
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



Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/dashboard-admin', [dashboardAdminController::class, 'index'])->name('dashboard-user');

Route::get('/cek', function () {
    return view('cek-daftar');
});

// Route::resource('login', loginController::class);

Route::resource('lowongan', LowonganController::class);
Route::resource('divisi', DivisiController::class);
Route::delete('hapus-lowongan', [LowonganController::class, 'hapus'])->name('hapus-lowongan');
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
    Route::post('/ubah-password', [ProfileController::class, 'updatePassword'])->name('ubah-password');
    Route::put('/ubah-profile', [ProfileController::class, 'updateProfile'])->name('ubah-profile');

});

Route::group(['middleware' => ['auth', 'admin_role']], function () {

});
Route::get('/', function () {
    return view('index');
})->name('dashboard');

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

Route::get('error-403', function () {
    return view('403');
})->name('unauthorized');

Route::get('detail', [LowonganController::class, 'detail'])->name('detail');

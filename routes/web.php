<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\PekerjaDitolakController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DetailLowonganController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PekerjaLulusController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\VacancieSaveController;
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
    Route::get('/detail-user/{id}', [ApprovalController::class, 'show'])->name('detail-user');
    Route::patch('save/{id}',[SaveController::class, 'save']);
    Route::get('PekerjaDisimpan',[SaveController::class, 'index'])->name('PekerjaDisimpan');
    Route::patch('BatalSimpan/{id}',[SaveController::class, 'batal']);
    Route::patch('pekerja-lulus/{id}', [PekerjaController::class, 'lulus'])->name('pekerja-lulus');
    Route::get('lulus', [PekerjaLulusController::class, 'index'])->name('lulus');
    Route::patch('pecat/{id}', [PekerjaLulusController::class, 'update'])->name('pecat');
    Route::get('/pekerja-disimpan', [SaveController::class, 'index'])->name('pekerja-disimpan');
    Route::post('/pekerja-sama', [ApprovalController::class, 'pekerjaSama'])->name('pekerja-sama');
    Route::post('/pekerja-selengkapnya', [ApprovalController::class, 'pekerjaSelengkapnya'])->name('pekerja-selengkapnya');

    Route::get('/tampil-pekerja/{id}', [ApprovalController::class, 'pekerja'])->name('tampil-pekerja');

    Route::get('/pekerja-disimpan', [SaveController::class, 'index'])->name('pekerja-disimpan');
    Route::patch('pekerja-lulus/{id}', [PekerjaController::class, 'lulus'])->name('pekerja-lulus');

    Route::get('lulus', [PekerjaLulusController::class, 'index'])->name('lulus');
    Route::patch('pecat/{id}', [PekerjaLulusController::class, 'update'])->name('pecat');
    Route::post('/pekerja-sama', [ApprovalController::class, 'pekerjaSama'])->name('pekerja-sama');
    Route::post('/pekerja-selengkapnya', [ApprovalController::class, 'pekerjaSelengkapnya'])->name('pekerja-selengkapnya');
    });


    Route::middleware(['role:user'])->group(function () {
        // user
        Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
        Route::post('/pendidikan', [ProfileController::class, 'School'])->name('pendidikan');
        Route::get('/tampilkan/pendidikan/{id}', [ProfileController::class, 'DataPendidikan'])->name('tampilkan/pendidikan');
        Route::put('/Edit/pendidikan/{id}', [ProfileController::class, 'EditSchool'])->name('Edit/pendidikan');
        Route::delete('/delete/pendidikan/{id}', [ProfileController::class, 'DeletePendidikan'])->name('delete/pendidikan');
        Route::get('/profileuser', [ProfileController::class, 'profileuser'])->name('profileuser');
        Route::post('/ubah-password', [ProfileController::class, 'updatePassword'])->name('ubah-password');
        Route::post('/summary', [ProfileController::class, 'summary'])->name('summary');
        Route::post('/add-experience', [ExperienceController::class, 'store'])->name('add-experience');
        Route::put('/experience-update/{id}', [ExperienceController::class, 'update'])->name('experience-update');
        Route::delete('/experience-delete/{id}', [ExperienceController::class, 'destroy'])->name('experience-delete');
        Route::post('/add-skill', [SkillController::class, 'store'])->name('add-skill');
        Route::put('/skill-update/{id}', [SkillController::class, 'update'])->name('skill-update');
        Route::delete('/skill-delete/{id}', [SkillController::class, 'destroy'])->name('skill-delete');
        Route::post('/add-certificate', [CertificateController::class, 'store'])->name('add-certificate');
        Route::put('/certificate-update/{id}', [CertificateController::class, 'update'])->name('certificate-update');
        Route::delete('/certificate-delete/{id}', [CertificateController::class, 'destroy'])->name('certificate-delete');
        Route::patch('/ubah-foto', [ProfileController::class, 'updateFoto'])->name('ubah-foto');
        Route::patch('/ubah-profile', [ProfileController::class, 'updateProfile'])->name('ubah-profile');
        Route::resource('detail-lowongan', DetailLowonganController::class);
        route::post('batalkan-lowongan',[ DetailLowonganController::class, 'batalkan'])->name('batalkan-lowongan');
        Route::get('/detail-lowongan{id}', [DetailLowonganController::class, 'show'])->name('detailLowongan');
        Route::get('/dashboard-user', [DashboardUserController::class, 'index'])->name('dashboard-user');
        Route::get('/lowongan-user', [DashboardUserController::class, 'lowongan'])->name('lowongan-user');
        Route::post('/dashboard-filter', [DashboardUserController::class, 'filterLowongan'])->name('dashboard-filter');
        Route::post('/summary', [ProfileController::class, 'summary'])->name('summary');
        Route::post('/add-experience', [ExperienceController::class, 'store'])->name('add-experience');
        Route::put('/experience-update/{id}', [ExperienceController::class, 'update'])->name('experience-update');
        Route::delete('/experience-delete/{id}', [ExperienceController::class, 'destroy'])->name('experience-delete');
        Route::post('/add-skill', [SkillController::class, 'store'])->name('add-skill');
        Route::put('/skill-update/{id}', [SkillController::class, 'update'])->name('skill-update');
        Route::delete('/skill-delete/{id}', [SkillController::class, 'destroy'])->name('skill-delete');
        Route::post('/add-certificate', [CertificateController::class, 'store'])->name('add-certificate');
        Route::put('/certificate-update/{id}', [CertificateController::class, 'update'])->name('certificate-update');
        Route::delete('/certificate-delete/{id}', [CertificateController::class, 'destroy'])->name('certificate-delete');
        Route::post('/pendidikan', [ProfileController::class, 'School'])->name('pendidikan');
        Route::get('/tampilkan/pendidikan/{id}', [ProfileController::class, 'DataPendidikan'])->name('tampilkan/pendidikan');
        Route::put('/Edit/pendidikan/{id}', [ProfileController::class, 'EditSchool'])->name('Edit/pendidikan');
        Route::delete('/delete/pendidikan/{id}', [ProfileController::class, 'DeletePendidikan'])->name('delete/pendidikan');
        Route::patch('/simpan-lowongan/{id}', [VacancieSaveController::class, 'update'])->name('simpan-lowongan');
        Route::get('/LowonganAktif', [ProfileController::class, 'lowonganProfile'])->name('LowonganAktif');
        Route::get('/LihatLowonganAktif', [ProfileController::class, 'LIhatlowonganProfile'])->name('LihatLowonganAktif');
        Route::get('/Tampilkan-lowongan', [VacancieSaveController::class, 'index'])->name('Tampilkan-lowongan');
        Route::get('/Lowongan-Simpan', [VacancieSaveController::class, 'LowonganSimpan'])->name('Lowongan-Simpan');
        Route::get('/Selegkapnya-Lowongan-Simpan', [VacancieSaveController::class, 'SelegkapnyaLowonganSimpan'])->name('Selegkapnya-Lowongan-Simpan');
    });
    });

Route::get('/', function () {
    return view('index');
})->name('dashboard');


Route::get('error-403', function () {
    return view('403');
})->name('unauthorized');

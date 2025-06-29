<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
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

// Halaman beranda bebas diakses (root diarahkan ke beranda)
Route::redirect('/', '/beranda');
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

// Login & logout routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::post('/pembayaran/batal', function () {
    // Logika pembatalan pembayaran, redirect ke halaman konfirmasi atau status
    return redirect()->route('pembayaran.batal.konfirmasi');
})->name('pembayaran.batal');

Route::get('/pembayaran-batal', function () {
    return view('pembayaran-batal');
})->name('pembayaran.batal.konfirmasi');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/login', [App\Http\controllers\AdminController::class, 'showAdminLoginForm'])->name('admin.login');
Route::get('/admin/register', [App\Http\controllers\AdminController::class, 'showRegisterForm'])->name('admin.register');
Route::get('/admin/dashboard', [App\Http\controllers\AdminController::class, 'showAdminDashboard'])->name('admin.dashboard');


Route::post('/admin/login', [App\Http\controllers\Auth\LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [App\Http\controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');
Route::post('/admin/register', [App\Http\controllers\Auth\RegisterController::class, 'register'])->name('admin.register');
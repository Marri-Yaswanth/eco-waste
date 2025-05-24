<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminCollectionController;
use App\Http\Controllers\Admin\AdminTransportationController;
use App\Http\Controllers\Admin\AdminDisposalController;
use App\Http\Controllers\Admin\AdminSegregationController;

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\CollectionController;
use App\Http\Controllers\User\TransportationController;
use App\Http\Controllers\User\DisposalController;
use App\Http\Controllers\User\ReportController;
use App\Http\Controllers\User\SegregationController;
use Illuminate\Support\Facades\Auth;


Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/collections', [CollectionController::class, 'index'])->name('collections');
    Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
    Route::get('/transportation', [TransportationController::class, 'index'])->name('transportation');
    Route::get('/disposal', [DisposalController::class, 'index'])->name('disposal');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    Route::get('/segregation', [SegregationController::class, 'index'])->name('segregation');
});


Route::get('/login-as-admin', function () {
    $admin = \App\Models\User::find(1);
    Auth::login($admin);
    return redirect()->route('admin.dashboard');
})->name('login.as.admin');



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/collections', [AdminCollectionController::class, 'index'])->name('admin.admincollections');
    Route::get('/transportation', [AdminTransportationController::class, 'index'])->name('admin.transportation');
    Route::get('/disposal', [AdminDisposalController::class, 'index'])->name('admin.disposal');
    Route::get('/segregation', [AdminSegregationController::class, 'index'])->name('admin.segregation');
});

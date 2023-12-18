<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\UserControllerSA;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class ,'index'])->name('home');

Route::prefix('employee')->middleware(['auth', 'employee'])->group(function () {
    Route::get('/home',  [HomeController::class, 'employeeHome'])->name('employee.home');
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('user.profile');
    Route::get('/create/profile', [UserProfileController::class, 'create'])->name('create.profile');
    Route::post('/store/profile', [UserProfileController::class, 'store'])->name('store.profile');


});

Route::prefix('supervisor')->middleware(['auth', 'supervisor'])->group(function () {
    Route::get('/home', [HomeController::class, 'supervisorHome'])->name('supervisor.home');
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('user.profile');
    Route::get('/create/profile', [UserProfileController::class, 'create'])->name('create.profile');
    Route::post('/store/profile', [UserProfileController::class, 'store'])->name('store.profile');

});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/home',  [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('user.profile');
    Route::get('/create/profile', [UserProfileController::class, 'create'])->name('create.profile');
    Route::post('/store/profile', [UserProfileController::class, 'store'])->name('store.profile');
    Route::resource('/users', UserController::class);

});

Route::prefix('super-admin')->middleware(['auth', 'super_admin'])->group(function () {
    Route::get('/home',  [HomeController::class, 'superAdminHome'])->name('super_admin.home');
    Route::get('/user/profile', [UserProfileController::class, 'show'])->name('user.profile');
    Route::get('/create/profile', [UserProfileController::class, 'create'])->name('create.profile');
    Route::post('/store/profile', [UserProfileController::class, 'store'])->name('store.profile');
    Route::resource('/users', UserControllerSA::class);

});


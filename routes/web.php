<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\UserControllerSA;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth','verified','profile.complete'])->get('/home', [HomeController::class ,'index'])->name('home');
Route::middleware(['auth','verified'])->resource('profile', ProfileController::class);

Route::prefix('employee')->middleware(['auth','verified','employee'])->group(function () {
    Route::get('/home',  [HomeController::class, 'employeeHome'])->name('employee.home');
});

Route::prefix('supervisor')->middleware(['auth','verified','supervisor' ])->group(function () {
     Route::get('/home', [HomeController::class, 'supervisorHome'])->name('supervisor.home');

});

Route::prefix('admin')->middleware(['auth','verified','admin'])->group(function () {
     Route::get('/home',  [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('/users', UserController::class);

});

Route::prefix('super-admin')->middleware(['auth','super_admin'])->group(function () {
    Route::get('/home',  [HomeController::class, 'superAdminHome'])->name('super_admin.home');
    Route::resource('/users', UserControllerSA::class);

});


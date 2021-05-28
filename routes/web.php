<?php

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
    return view('auth.login');
});

Auth::routes();
Route::get('index',[App\Http\Controllers\User\UserController::class,'index'])->name('user.index');
Route::get('create',[App\Http\Controllers\User\UserController::class,'create'])->name('user.create');
Route::post('store',[App\Http\Controllers\User\UserController::class,'store'])->name('user.store');
Route::get('destroy',[App\Http\Controllers\User\UserController::class,'destroy'])->name('user.destroy');
Route::resource('role',App\Http\Controllers\RoleController::class);
Route::post('permission/store',[App\Http\Controllers\RoleController::class,'storePermission'])->name('store_permission');
Route::resource('banquet',App\Http\Controllers\Banquet\BanquetController::class);
Route::resource('booking',App\Http\Controllers\Booking\BookingController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('Program',[App\Http\Controllers\Program\ProgramController::class,'index'])->name('program.index');
Route::get('Program/create',[App\Http\Controllers\Program\ProgramController::class,'create'])->name('program.create');
Route::post('Program/store',[App\Http\Controllers\Program\ProgramController::class,'store'])->name('program.store');
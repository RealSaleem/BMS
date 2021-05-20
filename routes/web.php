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
Route::get('index',[App\Http\Controllers\UserController::class,'index'])->name('user.index');
Route::get('create',[App\Http\Controllers\UserController::class,'create'])->name('user.create');
Route::post('store',[App\Http\Controllers\UserController::class,'store'])->name('user.store');
// Route::get('destroy',[App\Http\Controllers\UserController::class,'destroy'])->name('user.destroy');
Route::resource('user',App\Http\Controllers\UserController::class);
Route::resource('role',App\Http\Controllers\RoleController::class);
Route::post('permission/store',[App\Http\Controllers\RoleController::class,'storePermission'])->name('store_permission');
Route::resource('banquet',App\Http\Controllers\Banquet\BanquetController::class);
Route::resource('booking',App\Http\Controllers\Booking\BookingController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'user'], function () 
// {


// });

// Route::post('store',[App\Http\Controllers\RolePermissionController::class,'storePermission'])->name('permission.store');
// Route::get('index',[App\Http\Controllers\RolePermissionController::class,'index'])->name('role.index');
// Route::get('create',[App\Http\Controllers\RolePermissionController::class,'create'])->name('role.create');
// Route::post('store',[App\Http\Controllers\RolePermissionController::class,'store'])->name('role.store');

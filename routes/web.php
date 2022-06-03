<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\Bool_;

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
Route::get('/login',[UserController::class,'loginView'])->name('login');
Route::post('login-verification',[UserController::class,'login'])->name('verify');
Route::post('register-account',[UserController::class,'store'])->name('register');
Route::get('/hotel/home',[UserController::class,'homeView'])->name('home');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/admin-panel',[UserController::class,'adminView'])->name('admin');
Route::get('/admin/room/edit',[RoomController::class,'edit'])->name('edit.room');
Route::post('/admin/room/update/{id}',[RoomController::class,'update'])->name('update.room');
Route::post('/admin/room/delete/{id}',[RoomController::class,'destroy'])->name('delete.room');
Route::get('/admin/room/add',[RoomController::class,'create'])->name('add.room');
Route::post('/admin/room/create',[RoomController::class,'store'])->name('create.room');
Route::post('/admin/customer/view/{id}',[BookingController::class,'view'])->name('view.booking');
Route::post('/admin/user/delete/{id}',[UserController::class,'destroy'])->name('delete.user');
Route::get('/user/edit',[UserController::class,'edit'])->name('edit.data');
Route::post('/user/update/{id}',[UserController::class,'update'])->name('update.user');
Route::get('/admin/add',[UserController::class,'create'])->name('add.admin');
//Route::post('/admin/customer/delete/{id}',[UserController::class,'destroy'])->name('delete.admin');
Route::get('/hotel/services',[UserController::class,'servicesView'])->name('services');
Route::get('/hotel/gallery',[UserController::class,'galleryView'])->name('gallery');
Route::get('/hotel/booking/date',[BookingController::class,'dateView'])->name('date');
Route::get('/hotel/booking/rooms',[BookingController::class,'roomView'])->name('choose.rooms');
Route::post('/hotel/booking/check',[BookingController::class,'verifyRooms'])->name('confirm.rooms');
Route::post('/hotel/booking/store',[BookingController::class,'store'])->name('store.booking');
Route::get('/hotel/booking/confirm',[BookingController::class,'confirmView'])->name('confirm');
Route::get('/hotel/room/bookings/',[BookingController::class,'roomBookings'])->name('room.bookings');

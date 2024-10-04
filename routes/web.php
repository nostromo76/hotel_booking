<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/reservation', [HomeController::class, 'reservations'])->name('reservations');
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

Route::post('/book/{room_id}', [RoomController::class, 'book'])->name('book');
Route::get('/rooms/{room_id}', [RoomController::class, 'show'])->name('rooms.show');


Route::get('/categories', [RoomCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{roomname}', [RoomCategoryController::class, 'show'])->name('categories.show');
Route::get('/book/{roomname}', [BookingController::class, 'show'])->name('book');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');






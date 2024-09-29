<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');
Route::get('/reservation', [HomeController::class, 'reservations'])->name('reservations');
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');


Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/book/{id}', [RoomController::class, 'book'])->name('book');

Route::get('/rooms/{room_id}', [RoomController::class, 'show'])->name('rooms.show');




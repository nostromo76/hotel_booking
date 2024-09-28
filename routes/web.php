<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');
Route::get('/reservation', [HomeController::class, 'reservations'])->name('reservations');
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');



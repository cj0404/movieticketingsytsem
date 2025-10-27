<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\TicketController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

Route::get('/showtimes', [ShowtimeController::class, 'index'])->name('showtimes.index');
Route::get('/showtimes/{id}', [ShowtimeController::class, 'show'])->name('showtimes.show');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');

Route::view('/about', 'about')->name('about');

Route::get('/', function () {
    return view('welcome');
});

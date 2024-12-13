<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MoviesController;


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/films', [FilmController::class, 'index'])->name('films.index');
Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
Route::get('/films/pdf', [FilmController::class, 'pdf'])->name('films.pdf');
Route::post('/films', [FilmController::class, 'store'])->name('films.store');
Route::get('films/edit/{id}', [FilmController::class, 'edit'])->name('films.edit');
Route::put('/films/update/{id}', [FilmController::class, 'update'])->name('films.update');
Route::delete('/films/{film}', [FilmController::class, 'destroy'])->name('films.destroy');

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Movies Routes
Route::get('/movies', [MoviesController::class, 'index'])->name('movies');

// Homepage Route
Route::get('/', function () {
    return view('index');
});

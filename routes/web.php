<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\SearchController;
use App\Http\Livewire\MoviesSearch;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/movies', MoviesSearch::class);
    Route::get('/chart', [ChartJSController::class, 'index'])->name('chart');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
});


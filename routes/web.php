<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::controller(MovieController::class)->group(function () {
    Route::get('/',  'index')->name('/');
    Route::get('/origin',  'origin')->name('/origin');
    Route::get('/genre',  'genre')->name('/genre');
    Route::get('/about',  'about')->name('/about');
    Route::get('/detail/{movie}',  'show')->name('movie.show');
    Route::get('dashboard',  'dashboard')->name('dashboard')->middleware('auth');
    Route::get('/create',  'create')->name('movie.create')->middleware('auth');
    Route::post('/',  'store')->name('movie.store')->middleware('auth');
    Route::get('/edit/{movie}',  'edit')->name('movie.edit')->middleware('auth');
    Route::patch('/{movie}',  'update')->name('movie.update')->middleware('auth');
    Route::delete('/{movie}',  'destroy')->name('movie.destroy')->middleware('auth');
});

Route::controller(ReviewController::class)->group(function () {
    Route::get('/detail/review/{review}',  'show')->name('review.show');
    Route::get('/dashboard/review',  'dashboard')->name('review.dashboard')->middleware('auth');
    Route::get('/review/create',  'create')->name('review.create')->middleware('auth');
    Route::post('/review',  'store')->name('review.store')->middleware('auth');
    Route::get('/edit/review/{review}',  'edit')->name('review.edit')->middleware('auth');
    Route::patch('/review/{review}',  'update')->name('review.update')->middleware('auth');
    Route::delete('/review/{review}',  'destroy')->name('review.destroy')->middleware('auth');
    Route::post('/review-rating', [ReviewController::class, 'reviewRating'])->name('review.rating');
});

Route::controller(GenreController::class)->group(function () {
    Route::get('/detail/genre/{genre}',  'show')->name('genre.show');
    Route::get('/dashboard/genre',  'dashboard')->name('genre.dashboard')->middleware('auth');
    Route::get('/genre/create',  'create')->name('genre.create')->middleware('auth');
    Route::post('/genre',  'store')->name('genre.store')->middleware('auth');
    Route::get('/edit/genre/{genre}',  'edit')->name('genre.edit')->middleware('auth');
    Route::patch('/genre/{genre}',  'update')->name('genre.update')->middleware('auth');
    Route::delete('/genre/{genre}',  'destroy')->name('genre.destroy')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

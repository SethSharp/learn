<?php

use Inertia\Inertia;
use App\Http\Controllers\ShowLessons;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::prefix('courses')->name('courses.')->group(function() {
    Route::middleware(['auth'])->group(function() {
        Route::get('/{course}/lessons', ShowLessons::class)->name('lessons.show');
    });
});

Route::get('/achievements', function() {
    return Inertia::render('Achievements');
})->middleware(['auth', 'verified'])->name('achievements');

Route::get('/profile', function() {
    return Inertia('Profile');
})->middleware(['auth', 'verified'])->name('profile');

require __DIR__.'/auth.php';

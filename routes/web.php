<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ShowAchievementsController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\ShowCourseLessonsController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ShowCoursesController;
use App\Http\Controllers\ShowMyCoursesController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::prefix('dashboard')->name('dashboard')->group(function() {
    Route::middleware(['auth'])->group(function() {
        Route::get('/profile', ShowProfileController::class);
        Route::get('/mycourses', ShowMyCoursesController::class)->name('.courses');
        Route::get('/achievements', ShowAchievementsController::class)->name('.achievements');
    });
});

Route::prefix('courses')->name('courses.')->group(function() {
    Route::middleware(['auth'])->group(function() {
        Route::get('/', ShowCoursesController::class)->name('courses.show');
        Route::get('/{id}/lessons', ShowCourseLessonsController::class)->name('courses.lessons');
    });
});

Route::get('/logout', [LogoutController::class, 'perform'])->middleware('auth', 'verified');

require __DIR__.'/auth.php';

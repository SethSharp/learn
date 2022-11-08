<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Public\IndexCourseController;
use App\Http\Controllers\Public\ShowCoursesController;
use App\Http\Controllers\Members\ShowDashboardController;

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
    return Inertia::render('Welcome');
});

Route::prefix('/dashboard')->name('dashboard')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', ShowDashboardController::class)->name('.dashboard');
    });
});

Route::get('/logout', [LogoutController::class, 'perform'])->middleware('auth', 'verified');

Route::prefix('/courses')->name('courses.')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/all', ShowCoursesController::class)->name('course.show');
        Route::get('/all/{course}/lessons', IndexCourseController::class)->name('course.lessons');
    });
    Route::middleware('auth')->prefix('/{course}/lessons')->name('.lessons')->group(function () {
        Route::get('{lesson}', \App\Http\Controllers\Lessons\ShowLessonController::class)->name('.show');
        Route::post('{lesson}/save', \App\Http\Controllers\Lessons\SaveLessonController::class)->name('s.ave');
        Route::get('{lesson}/load', \App\Http\Controllers\Lessons\LoadLessonController::class)->name('.load');
    });
});

require __DIR__ . '/auth.php';

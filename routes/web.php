<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Public\IndexCourseController;
use App\Http\Controllers\Public\ShowCoursesController;

// New new
use App\Http\Controllers\Members\Courses\IndexMyCoursesController;
use App\Http\Controllers\Members\Courses\ShowMyCoursesController;
use App\Http\Controllers\Members\ShowProfileController;
use App\Http\Controllers\Members\ShowAchievementsController;

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
        Route::get('/profile', ShowProfileController::class)->name('.profile');
        Route::get('/mycourses', ShowMyCoursesController::class)->name('.mycourses');
        Route::get('/mycourses/{course}/lessons', IndexMyCoursesController::class)->name('.mycourse');
        Route::get('/achievements', ShowAchievementsController::class)->name('.achievements');
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
        Route::post('{lesson}/save', \App\Http\Controllers\Lessons\SaveLessonController::class)->name('.save');
        Route::get('{lesson}/load', \App\Http\Controllers\Lessons\LoadLessonController::class)->name('.load');
    });
});

require __DIR__ . '/auth.php';

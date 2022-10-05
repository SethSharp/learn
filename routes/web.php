<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ShowDashboardController;
use App\Http\Controllers\ShowCourseLessonsController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ShowCoursesController;

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

Route::get('/dashboard', ShowDashboardController::class)->middleware('auth', 'verified')->name('dashboard');

Route::prefix('courses')->name('courses.')->group(function() {
    Route::middleware(['auth'])->group(function() {
        Route::get('/', ShowCoursesController::class)->name('courses.show');
        Route::get('/{id}/lessons', ShowCourseLessonsController::class)->name('courses.lessons');
    });
});

Route::get('/logout', [LogoutController::class, 'perform'])->middleware('auth', 'verified');

require __DIR__.'/auth.php';

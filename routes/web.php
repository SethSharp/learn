<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    $data = [
        ['title'=>'Lesson - 1', 'desc'=>'Lesson 1 desc', 'src'=>'/images/placeholder.png', 'selected'=>false, 'unlocked'=>true],
        ['title'=>'Lesson - 2', 'desc'=>'Lesson 2 desc', 'src'=>'/images/placeholder.png', 'selected'=>false, 'unlocked'=>true],
        ['title'=>'Lesson - 3', 'desc'=>'Lesson 3 desc', 'src'=>'/images/placeholder.png', 'selected'=>false, 'unlocked'=>true],
        ['title'=>'Lesson - 4', 'desc'=>'Lesson 4 desc', 'src'=>'/images/placeholder.png', 'selected'=>false, 'unlocked'=>true],
        ['title'=>'Lesson - 5', 'desc'=>'Lesson 5 desc', 'src'=>'/images/placeholder.png', 'selected'=>false, 'unlocked'=>false],
        ['title'=>'Lesson - 6', 'desc'=>'Lesson 6 desc', 'src'=>'/images/placeholder.png', 'selected'=>false, 'unlocked'=>false]
    ];
    return Inertia('Dashboard', [
        'lessonData' => $data
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/achievements', function() {
    return Inertia('Achievements');
})->middleware(['auth', 'verified'])->name('achievements');

Route::get('/profile', function() {
    return Inertia('Profile');
})->middleware(['auth', 'verified'])->name('profile');

require __DIR__.'/auth.php';

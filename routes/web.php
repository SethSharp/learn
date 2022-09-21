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
        ['title'=>'Lesson - 1', 'desc'=>'Lesson 1 desc', 'src'=>'/images/tmpBackground_2.jfif', 'selected'=>false, 'unlocked'=>true, 'progress' => '100%'],
        ['title'=>'Lesson - 2', 'desc'=>'Lesson 2 desc', 'src'=>'/images/tmpBackground.jpg', 'selected'=>false, 'unlocked'=>true, 'progress' => '90%'],
        ['title'=>'Lesson - 3', 'desc'=>'Lesson 3 desc', 'src'=>'/images/tmpBackground.jpg', 'selected'=>false, 'unlocked'=>true, 'progress' => '0%'],
        ['title'=>'Lesson - 4', 'desc'=>'Lesson 4 desc', 'src'=>'/images/tmpBackground.jpg', 'selected'=>false, 'unlocked'=>false, 'progress' => '0%'],
        ['title'=>'Lesson - 5', 'desc'=>'Lesson 5 desc', 'src'=>'/images/tmpBackground.jpg', 'selected'=>false, 'unlocked'=>false, 'progress' => '0%'],
        ['title'=>'Lesson - 6', 'desc'=>'Lesson 6 desc', 'src'=>'/images/tmpBackground.jpg', 'selected'=>false, 'unlocked'=>false, 'progress' => '0%']
    ];
    return Inertia('Dashboard', [
        'lessonData' => $data
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/achievements', function() {
    $data = [
        ['title'=>'Hello there', 'desc'=>'Wake up in the facility', 'date'=>'21/9/22'],
        ['title'=>'You got a friend in me', 'desc'=>'Find your buddy codybot', 'date'=>'21/9/22'],
        ['title'=>'Light the way', 'desc'=>'Turn the lights on', 'date'=>'22/9/22'],
        ['title'=>'We aren`t alone...', 'desc'=>'Discover the dead...undead body', 'date'=>'22/9/22'],
    ];
    return Inertia('Achievements',[
        'achievementData' => $data
    ]);
})->middleware(['auth', 'verified'])->name('achievements');

Route::get('/profile', function() {
    return Inertia('Profile');
})->middleware(['auth', 'verified'])->name('profile');

require __DIR__.'/auth.php';

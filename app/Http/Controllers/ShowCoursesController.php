<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Illuminate\Http\Request;

class ShowCoursesController extends Controller
{
    public function __invoke(): Response {
        $courses = [
            ['title'=> 'Larascape', 'lessons'=>12, 'progress'=> 50]
        ];
        return Inertia('Courses', [
            'courses' => $courses
        ]);
    }
}

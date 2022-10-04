<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Inertia\Response;
use Illuminate\Http\Request;

class ShowCoursesController extends Controller
{
    public function __invoke(): Response {
        $courses = Course::all();
        return Inertia('Courses', [
            'courses' => $courses
        ]);
    }
}

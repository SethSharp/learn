<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Course;

class ShowCoursesController extends Controller
{
    public function __invoke(): Response
    {
        $courses = Course::withCount('lessons')->get();
        return Inertia('Courses', [
            'courses' => $courses
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Course;

class ShowMyCoursesController extends Controller
{
    public function __invoke(): Response
    {
        $courses = Course::withCount('lessons')->get();
        return Inertia('MyCourses', [
            'courses' => $courses
        ]);
    }
}

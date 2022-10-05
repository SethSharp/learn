<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Course;
use Illuminate\Http\Request;

class ShowMyCoursesController extends Controller
{
    public function __invoke(): Response
    {
        $courses = Course::withCount('lessons')->get();
        // dd($courses);
        return Inertia('MyCourses', [
            'courses' => $courses
        ]);
    }
}

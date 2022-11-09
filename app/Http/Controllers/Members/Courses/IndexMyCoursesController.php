<?php

namespace App\Http\Controllers\Members\Courses;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Course;
use App\Http\Controllers\Controller;

class IndexMyCoursesController extends Controller
{
    public function __invoke(Course $course): Response
    {
        // dd($course->load('lessons'));
        return Inertia::render('Members/Courses/Show', [
            'course' => $course->load('lessons')
        ]);
    }
}

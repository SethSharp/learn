<?php

namespace App\Http\Controllers\Members\Courses;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Course;
use App\Http\Controllers\Controller;

class ShowMyCoursesController extends Controller
{
    public function __invoke(): Response
    {
        // $courses = Course::all();
        //with('lessons')->get(),
        return Inertia::render('Members/MyCourses', [
            'courses' => Course::all()
        ]);
    }
}

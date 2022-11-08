<?php

namespace App\Http\Controllers\Public;

use App\Models\Course;
use App\Http\Controllers\Controller;

class IndexCourseController extends Controller
{
    public function __invoke(Course $course)
    {
        return Inertia('Public/Courses/Show', [
            'name' => $course->name,
            'lessons' => $course->load('lessons')->lessons
        ]);
    }
}

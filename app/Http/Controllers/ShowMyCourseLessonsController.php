<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Course;

class ShowMyCourseLessonsController extends Controller
{
    public function __invoke(Course $course)
    {
        return Inertia('MyCourseLessons', [
            'name' => $course->name,
            'lessons' => $course->load('lessons')->lessons
        ]);
    }
}

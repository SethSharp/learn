<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;


class ShowCourseLessonsController extends Controller
{
    public function __invoke(Course $course)
    {
        $lessons = Lesson::where('course_id', $course->id)->get();
        return Inertia('Lessons', [
            'name' => $course->name,
            'lessons' => $lessons,
        ]);
    }
}

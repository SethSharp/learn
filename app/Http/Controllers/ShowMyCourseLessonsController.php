<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Course;
class ShowMyCourseLessonsController extends Controller
{
    public function __invoke(Course $course)
    {
        $lessons = Lesson::where('course_id', $course->id)->get();
        return Inertia('MyCourseLessons', [
            'name' => $course->name,
            'lessons' => $lessons
        ]);
    }
}

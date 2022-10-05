<?php

namespace App\Http\Controllers;

use App\Models\Lesson;

class ShowMyCourseLessonsController extends Controller
{
    public function __invoke($course_id)
    {
        $lessons = Lesson::where('course_id', $course_id)->get();

        return Inertia('MyCourseLessons', [
            // TODO: name as slug (not id)
            'name' => $course_id,
            'lessons' => $lessons
        ]);
    }
}

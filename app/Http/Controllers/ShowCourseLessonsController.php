<?php

namespace App\Http\Controllers;

use App\Models\Lesson;

class ShowCourseLessonsController extends Controller
{
    public function __invoke($course_id) {
        $lessons = Lesson::where('course_id', $course_id)->get();
        return Inertia('Lessons', [
            //TODO: name as slug (not id)
            'name' => $course_id,
            'lessons' => $lessons
        ]);
    }
}

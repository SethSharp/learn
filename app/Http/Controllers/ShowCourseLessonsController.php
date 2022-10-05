<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ShowCourseLessonsController extends Controller
{
    public function __invoke($course_id) {
        $lessons = Lesson::all()->where('course_id', $course_id)->toArray();
        // dd($lessons);
        return Inertia('Lessons', [
            //TODO: name as slug (not id)
            'name' => $course_id,
            'lessons' => $lessons
        ]);
    }
}

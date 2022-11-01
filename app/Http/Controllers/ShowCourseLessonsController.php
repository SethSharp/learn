<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
class ShowCourseLessonsController extends Controller
{
    public function __invoke(Course $course)
    {
        $lessons = Lesson::where('course_id', $course->id)->get();
        return Inertia('Lessons', [
            // TODO: name as slug (not id)
            'name' => $course->name,
            'lessons' => $lessons,
            'user' => Auth::check()
        ]);
    }
}

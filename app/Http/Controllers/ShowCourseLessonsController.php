<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Exception;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ShowCourseLessonsController extends Controller
{
    public function __invoke($course_name)
    {
        try {
            $course = Course::firstwhere('name', $course_name);
            $lessons = Lesson::where('course_id', $course->id)->get();
            return Inertia('Lessons', [
                'name' => $course->name,
                'lessons' => $lessons,
                'user' => Auth::check()
            ]);
        } catch (Exception $e) {
            return Inertia('ErrorPage', [
                'error' => "Course could not be found or does not exist"
            ]);
        }
    }
}

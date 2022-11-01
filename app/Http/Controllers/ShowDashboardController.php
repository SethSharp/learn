<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowDashboardController extends Controller
{
    public function __invoke(): Response
    {
        if (Auth::user()) {
            $courses = Course::withCount('lessons')->get();
            $l = Lesson::all();
            $lessons = array();
            $prev = 1;
            $temp = array();
            foreach ($l as $lesson) {
                if ($lesson->course_id == $prev) {
                    array_push($temp, $lesson);
                } else {
                    array_push($lessons, $temp);
                    $temp = array();
                    array_push($temp, $lesson);
                    $prev = $lesson->course_id;
                }
            }
            array_push($lessons, $temp);
            return Inertia('Dashboard', [
                'courses' => $courses,
                'lessons' => $lessons,
                'user' => Auth::check()
            ]);
        }
        return Inertia('Welcome');
    }
}

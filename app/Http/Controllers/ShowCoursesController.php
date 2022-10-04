<?php

namespace App\Http\Controllers;


use App\Models\User;
use Inertia\Response;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ShowCoursesController extends Controller
{
    public function __invoke(): Response {
        $courses = Course::withCount('lessons')->get();
        return Inertia('Courses', [
            'courses' => $courses
        ]);
    }
}

<?php

namespace App\Http\Controllers\Lessons;

use Inertia\Response;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowLessonController extends Controller
{
    public function __invoke(Course $course, Lesson $lesson): Response
    {
        return inertia('Lessons/Show', [
            'lesson'=> $lesson,
            'course'=> $course
        ]);
    }
}

<?php

namespace App\Http\Controllers\Lessons;

use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use App\Http\Controllers\Controller;

class LoadLessonController extends Controller
{
    public function __invoke(Course $course, Lesson $lesson)
    {
        try {
            $state = auth()->user()
                ->lessons()
                ->find($lesson->id)
                ->pivot
                ->game_state;
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return response()->json(['gameLoaded' => $state]);
    }
}

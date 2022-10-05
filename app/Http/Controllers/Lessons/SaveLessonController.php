<?php

namespace App\Http\Controllers\Lessons;

use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class SaveLessonController extends Controller
{
    public function __invoke(Request $request, Course $course, Lesson $lesson): JsonResponse
    {
        auth()->user()
         ->lessons()
         ->syncWithPivotValues(
             [$lesson->id],
             ['game_state' => $request->input('game_state')]
         );

        return response()->json(['gameSaved' => true]);
    }
}

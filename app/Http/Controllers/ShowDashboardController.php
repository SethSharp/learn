<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowDashboardController extends Controller
{
    public function __invoke(): Response {
        if (Auth::user()) {
            $lessons = Lesson::all()->where('course_id', 1)->toArray();
            return Inertia('Dashboard', [
                'lessons' => $lessons
            ]);
        }
        return Inertia('Welcome');
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ShowDashboardController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('Dashboard', [
            'courses' => Course::with('lessons')->get(),
        ]);
    }
}

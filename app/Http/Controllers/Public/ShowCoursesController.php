<?php

namespace App\Http\Controllers\Public;

use Inertia\Response;
use App\Models\Course;
use App\Http\Controllers\Controller;

class ShowCoursesController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('Public/Courses/Index', [
            'courses' => Course::withCount('lessons')->get()
        ]);
    }
}

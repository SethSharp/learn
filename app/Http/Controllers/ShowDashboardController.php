<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Course;

class ShowDashboardController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('Dashboard', [
            'courses' => Course::with('lessons')->get(),
        ]);
    }
}

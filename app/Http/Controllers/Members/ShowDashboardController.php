<?php

namespace App\Http\Controllers\Members;

use Inertia\Response;
use App\Models\Course;
use App\Http\Controllers\Controller;

class ShowDashboardController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('Members/Dashboard', [
            'courses' => Course::with('lessons')->get(),
        ]);
    }
}

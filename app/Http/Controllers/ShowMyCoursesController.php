<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class ShowMyCoursesController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('MyCourses');
    }
}

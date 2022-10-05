<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class ShowAchievementsController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('Achievements');
    }
}

<?php

namespace App\Http\Controllers\Members;

use Inertia\Response;
use App\Http\Controllers\Controller;

class ShowAchievementsController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('Members/Achievements');
    }
}

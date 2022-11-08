<?php

namespace App\Http\Controllers;

use Inertia\Response;

class ShowProfileController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('Profile');
    }
}

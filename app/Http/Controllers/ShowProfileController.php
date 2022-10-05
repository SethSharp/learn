<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowProfileController extends Controller
{
    public function __invoke(): Response {
        if (Auth::user()) {
            return Inertia('Profile');
        }
        return Inertia('Welcome');
    }
}

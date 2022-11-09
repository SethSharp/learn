<?php

namespace App\Http\Controllers\Members;

use Inertia\Response;
use App\Http\Controllers\Controller;

class ShowProfileController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia('Members/Profile');
    }
}

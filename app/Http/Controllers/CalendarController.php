<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class CalendarController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return Inertia::render('Core/Calendar/Index', [
            'user' => $user
        ]);
    }
}

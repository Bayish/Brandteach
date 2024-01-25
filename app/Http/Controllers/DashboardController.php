<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $students = User::where('company_id', '=', $user->company_id)
            ->whereHas('role', function ($query) {
                $query->where('name', 'student');
            })
            ->get();
        if($user->isTeacher()) {
            $teachers = User::where('company_id','=', $user->company_id)->get();

            return Inertia::render('Teacher/Index', [
                'teachers' => $teachers,
                'students' => $students,
                'user' => $user
            ]);
        }

        return Inertia::render('Student/Index', [
            'students' => $students,
            'user' => $user
        ]);
    }
}

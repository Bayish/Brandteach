<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
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

            return Inertia::render('Core/Course/Index', [
                'teachers' => $teachers,
                'students' => $students,
                'user' => $user
            ]);
        }

        return Inertia::render('Core/Course/Index', [
            'students' => $students,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $group)
    {
        //
    }
}

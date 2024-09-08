<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticateController extends Controller
{
    public function show(): Response
    {
        return Inertia::render('Auth/Login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {

        if( !$request->authenticate() ){
            return redirect()->back()->withErrors([
                'email' => 'Invalid credentials. Please try again.',
            ]);
        }
        $request->authenticate();
        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('participant')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('participant.login'));
    }
}

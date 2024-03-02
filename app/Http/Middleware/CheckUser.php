<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('admin')->user()) {
            return redirect(route('dashboard.admin'));
        }
        if (Auth::guard('teacher')->user()) {
            return redirect(route('dashboard.teacher'));
        }
        if (Auth::guard('student')->user()) {
            return redirect(route('dashboard.student'));
        }
        if ($request->ajax() || $request->wantsJson()) {
            return response('Unauthorized.', 401);
        } else {
            return redirect(route('login.admin'));
        }
    }
}

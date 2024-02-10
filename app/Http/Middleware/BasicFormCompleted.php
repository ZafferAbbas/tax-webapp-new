<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class BasicFormCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is logged in
        if (Auth::check()) {
            // Check if the user is trying to access the basic-details form
            if ($request->is('basic-details')) {
                // If basic details are already provided, redirect to the dashboard
                if (Auth::user()->basic_provided) {
                    return redirect()->route('dashboard');
                }
                // If basic details are not provided, allow access to the form
                else {
                    return $next($request);
                }
            }
        }

        // Proceed to the next middleware if none of the conditions above are met
        return $next($request);
    }
}

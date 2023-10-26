<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Check the user's type
            $userType = auth()->user()->type;

            if ($userType == 1) {
                // User is an admin, allow access to admin routes
                return $next($request);
            }
        }

        // User is not an admin, redirect or handle as needed
        return redirect('/'); // You can customize the redirection as per your requirements.

    }
}

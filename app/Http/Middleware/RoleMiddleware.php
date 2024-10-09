<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role;

            if ($userRole === $role) {
                return $next($request); // Proceed to the requested route
            }

            // Redirect based on user role with error message
            switch ($userRole) {
                case 'admin':
                case 'doctor':
                case 'patient':
                    // Return an error response if user tries to access admin dashboard without permission
                    return abort(403, 'Unauthorized access to this section.'); // Change the message as needed
                default:
                    return redirect('/'); // Redirect unauthorized users to home
            }
        }

        // Redirect to home if not authenticated
        return redirect('/');
    }
}

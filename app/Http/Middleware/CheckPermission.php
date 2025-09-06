<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$permissions): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();
        
        // Check if user has any of the required permissions
        foreach ($permissions as $permission) {
            // Handle pipe-separated permissions (OR logic)
            if (str_contains($permission, '|')) {
                $orPermissions = explode('|', $permission);
                if ($user->hasAnyPermission(...$orPermissions)) {
                    return $next($request);
                }
            } else {
                // Single permission
                if ($user->can($permission)) {
                    return $next($request);
                }
            }
        }

        // If no permissions matched, return 403
        if ($request->expectsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'You do not have permission to access this resource.'
            ], 403);
        }

        abort(403, 'You do not have permission to access this resource.');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class CheckStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->user()->isStudent()) {
            flash('You have to be a student to see this!', 'danger');
            return redirect('/');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $age = auth()->user()->age;
        if($age < 18) {
            return redirect('/home');
        }
        return $next($request);
    }
}

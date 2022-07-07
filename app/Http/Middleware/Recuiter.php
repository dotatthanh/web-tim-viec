<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Recuiter
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
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role_id < 3) {
                return $next($request);
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect('login');
        }
        
    }
}

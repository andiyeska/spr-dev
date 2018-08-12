<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class ACheck
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
            $user = User::find(Auth::id());
            $role = $user->role;
            if($role === 'AF' || $role === 'AFR') {
                return $next($request);
            } else if($role === 'U') {
                return redirect()->route('home.index');
            } else {
                return redirect()->route('eod.index');
            }
        } else {
            return redirect()->route('eod.signIn');
        }
    }
}

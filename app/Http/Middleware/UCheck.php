<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class UCheck
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
            if($user->role === 'U') {
                return $next($request);
            } else {
                return redirect()->route('home.signOut');
            }
        } else {
            return redirect()->route('home.signIn');
        }
    }
}

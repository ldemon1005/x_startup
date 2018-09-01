<?php

namespace App\Http\Middleware;

use App\Models\Account;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckLoginAdmin
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
        if (Auth::check() && Auth::user()->type == Account::ADMIN) {
            return $next($request);
        }
        else{
            Auth::logout();
            Session::flush();
            return redirect('login');
        }
    }
}

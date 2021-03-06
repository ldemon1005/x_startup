<?php

namespace App\Http\Middleware;

use App\Models\Account;
use Closure;
use Illuminate\Support\Facades\Auth;

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
            return redirect('login');
        }
    }
}

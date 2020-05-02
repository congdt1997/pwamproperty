<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckMiddleware
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
        if (Auth::check()){
            $role = Auth::user();
            if (($role->idRole == 1)||($role->idRole == 2)){
                return $next($request);
            }else{
                return redirect('client/home/error');
            }
        }else{
            return redirect('client/home/error');
        }

    }
}

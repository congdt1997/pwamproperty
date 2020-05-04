<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class staffMiddleware
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
            if (($role->idRole == 2)||($role->idRole == 1)){
                return $next($request);
            }else{
                return redirect('client/home/error');
            }
        }else{
            return redirect('client/home/error');
        }
    }
}

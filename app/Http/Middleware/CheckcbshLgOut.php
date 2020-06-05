<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckcbshLgOut
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
         if(Auth::guest())
        {
            return redirect()->intended('dangnhap');
        }
        return $next($request);
    }
}

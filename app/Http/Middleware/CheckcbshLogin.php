<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckcbshLogin
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
         if(Auth::check())
        {
        if( Auth::user()->level == 1)
            return $next($request);
        if( Auth::user()->level == 0)
        {
            Auth::logout();
            return redirect()->intended('dangnhap')->with('status', 'Tài khoản của bạn không thể truy cập vào trang này');
        }
        }

        
    }
}

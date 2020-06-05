<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    //
    public function getLogin()
    {
    	return view('gplx.cbsh.login');
    }
   public function postLogin(Request $r1)
   {
   	$arr=['email' => $r1 -> email, 'password'=>$r1 -> password];
    	if($r1->remember = 'Remember Me')
    	{
    		$remember= true; // lưu đăng nhập
    	}
    	else
    	{
    		$remember= false; // không lưu đăng nhập
    	}
    	if(Auth::attempt($arr,$remember))
    	{
    		return redirect()->intended('/gplx/cbsh/home');
    	}
    	else 
    	{
    		return back()->withInput()->with('error','tài khoản hoặc mật khẩu chưa đúng');
    	}
   }
}

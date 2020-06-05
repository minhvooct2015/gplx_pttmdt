<?php

namespace App\Http\Controllers\nguoidung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddnguoidungRequest;
use App\User;
use Auth;
use App\Models\gplx_banglaixe;


class DangkyController extends Controller
{
    //
    public function getdk()
    {
    	return view('gplx.nguoidung.register');
    }
    public function postdk(AddnguoidungRequest $re)
    {
        $gv = new User();
        $gv->hoten=$re->name;
         $gv->ngaysinh=$re->ngsinh;
        $gv->password=bcrypt($re->password); 
        $gv->email=$re->email; 
        $gv->hokhau=$re->hk;
        $gv->noio=$re->no; 
        $gv->sodienthoai=$re->sdt; 
        $gv->level=0; 
        $gv->cmnd=$re->cmnd; 
    	$gv->save();
        $ch = new gplx_banglaixe;
        $ch->blx_hx=1;
        $ch->blx_ngaycap=0;
        $ch->blx_so=0;
        $ch->blx_noicap=0;
        $ch->id_hv=$gv->id;
        $ch->save();
    	return redirect('dangnhap'); 
    }
     public function getdn()
    {
        return view('gplx.nguoidung.login');
    }
  public function postdn(Request $r1)
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
            if( Auth::user()->level == 1)
            return redirect()->intended('/gplx/cbsh/home');
        else return redirect('gplx/nguoidung/home'); 
        }
        else 
        {
            return back()->withInput()->with('error','tài khoản hoặc mật khẩu chưa đúng');
        }
   }
}

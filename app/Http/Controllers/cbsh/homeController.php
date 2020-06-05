<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
class homeController extends Controller
{
    // 
    public function gethome()
    {
        $data['list']= DB::table('gplx_user')->where('level', 0)->count();
        $data['list1']= DB::table('cbsh_lophoclx')->count();
        $data['list2']= DB::table('cbsh_giaovien')->count();
        $data['list3']= DB::table('gplx_user')->where('level', 1)->count();

        // dd($data['list']);
    	return view('gplx.cbsh.index',$data);
    }
    public function getout()
    {
    	Auth::logout();
    	return redirect()->intended('dangnhap');
    }
}

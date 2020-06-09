<?php

namespace App\Http\Controllers\nguoidung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\banner;
class NguoidungngoaiController extends Controller
{
    //
    public function gethome()
    {	
    	$data['list1']=DB::table('motahangxe')
    	->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')               
          ->where('hx_id', '>', 1)
        ->paginate(3);

     //    dd($data['list']);
    	// $data['list1'] = DB::table('motahangxe')
    	// ->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')->paginate(3);
    	$data['list']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        //dd($data['list']);
    	return view('gplx.nguoidung.homengoai',$data);
    }
    public function lienhe()
    {   
       
        $data['list']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        //dd($data['list']);
        return view('gplx.nguoidung.lienhe',$data);
    }
     public function gioithieu()
    {   
       
        $data['list']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        //dd($data['list']);
        return view('gplx.nguoidung.gioithieu',$data);
    }
    public function hometk(Request $re)
    {   
        $data['list']=$re->name;
        $data['list2']= DB::table('cbsh_lophoclx')
        ->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')
        ->join('motahangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')
        ->where('cbsh_lophoclx.lhlx_ten', 'like','%'.$data['list'].'%' )
        ->paginate(2);
        //dd($data['list2']);
         $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        return view('gplx.nguoidung.hometk',$data);
    }

}

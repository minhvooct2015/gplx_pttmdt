<?php

namespace App\Http\Controllers\nguoidung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use DB;
use App\Models\hangxe;
use App\Models\motahangxe;
class ttNguoidungcontroller extends Controller
{
    //
    public function getttnd()
    {	 $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
    	return view('gplx.nguoidung.ttcanhan',$data);
    }
    public function gethome()
    {	 $id=Auth::user()->id;

         $blx= DB::table('gplx_banglaixe')
        ->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
        ->where('gplx_user.id', '=', $id)
        ->select('blx_hx')
        ->get();
        
        foreach ($blx as $user) {
                $data[]= $user->blx_hx;
            }
        $pdkmoi= DB::table('phieudangky')
         ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->where('gplx_user.id', '=', $id)
        ->where('phieudangky.pdk_diemTH', '=', 0)
        ->where('phieudangky.pdk_diemLT', '=', 0)

        ->select('pdk_hx')
        ->get();
         foreach ($pdkmoi as $user) {
                $data1[]= $user->pdk_hx;
            }
        $pdkdau= DB::table('phieudangky')
         ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->where('gplx_user.id', '=', $id)
        ->where('phieudangky.pdk_diemTH', '>=', 18)
        ->where('phieudangky.pdk_diemLT', '>=', 18)

        ->select('pdk_hx')
        ->get();
         foreach ($pdkdau as $user) {
                $data2[]= $user->pdk_hx;
            }

            if(!empty($data2) && !empty($data1)){
        $data['list1']=DB::table('motahangxe')
    	->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')               
          ->where('hx_id', '>', 1)
        ->whereNotIn('hx_id', $data)
        ->whereNotIn('hx_id', $data1)
        ->whereNotIn('hx_id', $data2)
        ->paginate(3);
    }
    elseif (!empty($data2)) {
        $data['list1']=DB::table('motahangxe')
        ->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')               
          ->where('hx_id', '>', 1)
        ->whereNotIn('hx_id', $data)
        ->whereNotIn('hx_id', $data2)
        ->paginate(3);
    }
    elseif (!empty($data1)) {
        $data['list1']=DB::table('motahangxe')
        ->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')               
          ->where('hx_id', '>', 1)
        ->whereNotIn('hx_id', $data)
       ->whereNotIn('hx_id', $data1)
        ->paginate(3);
    }
   elseif (!empty($data)) 
    {
        $data['list1']=DB::table('motahangxe')
        ->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')               
          ->where('hx_id', '>', 1)
        ->whereNotIn('hx_id', $data)
        // ->whereNotIn('hx_id', $data1)
        // ->whereNotIn('hx_id', $data2)
        ->paginate(3);
    }
    else
    {

        $data['list1']=DB::table('motahangxe')
        ->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')               
          ->where('hx_id', '>', 1)
        //->whereNotIn('hx_id', $data)
        // ->whereNotIn('hx_id', $data1)
        // ->whereNotIn('hx_id', $data2)
        ->paginate(3);
    }
        $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
         //dd($data1);
    	// $data['list1'] = DB::table('motahangxe')
    	// ->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')->paginate(3);
    	return view('gplx.nguoidung.home',$data);
    }
    // public function hometk(Request $re)
    // {   
    //     $data['list2']= DB::table('cbsh_lophoclx')
    //     ->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')
    //     ->join('cbsh_lophoclx', 'cbsh_lophoclx.lhlx_ten', 'like',$re->name )
    //     ->get();
    //     return view('gplx.nguoidung.hometk',$data);
    // }

}

<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\phieudangky;
use App\Models\hangxe;
class ThongkeController extends Controller
{
    //
     public function thongke()
    {
    	 $data['list3']= DB::table('phieudangky')->count();
    	 //dd( $data['list3']);
    	 //lay het hang xe
    	 $sohangxe=DB::table('cbsh_hangxe')->select('hx_id','hx_giatien')
    	 ->where('hx_id', '>', 1)->get();
    	 
    	 $slpdk=DB::table('phieudangky')
    	  ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
                     ->select('phieudangky.pdk_hx','cbsh_hangxe.hx_giatien',DB::raw('count(*) as slpdk'))
                     ->groupBy('phieudangky.pdk_hx','cbsh_hangxe.hx_giatien')
                     ->get();
          // foreach ($slpdk as $user) {
          //       $data[]= $user->blx_hx;
          //   }  
          $tong=DB::table('cbsh_hangxe')->select('hx_id','hx_giatien')
    	 ->where('hx_id', '>', 1)
    	 //->where('hx_id', '=', $slpdk->pdk_hx)
    	 ->get();
    	 $data['tongtien']=0;
    	  foreach($slpdk as $da)
    	  {
    	  	$tong=$da->hx_giatien * $da->slpdk;
    	  	$data['tongtien']=$data['tongtien']+$tong;
    	  
    	  }

          // $tongtien= DB::table('phieudangky')          
          // ->get();
    	 //dd($tongtien);

    	return view('gplx.cbsh.thongke',$data);
    }
}

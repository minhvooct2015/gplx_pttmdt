<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\gplx_lichthi;
use App\Models\gplx_giaovien;
use App\Models\hangxe;
use DB;
use App\Models\gplx_lophoclichthi;
use App\Models\gplx_lophoclx;
use App\Http\Requests\AddlophoclichthiRequest;
use App\Http\Requests\EditlophoclichthiRequest;

class LophocLichthiController extends Controller
{
    //
    public function saplt()
    {
 
    	  // = gplx_lichthi::all();
        $lich=DB::table('cbsh_lichthi_lophoc')
        ->select('id_lt')
        ->get();
        foreach ($lich as $user) {
                $data[]= $user->id_lt;
            }
          $data['ngaythi']= DB::table('cbsh_lichthi')
        ->join('cbsh_loailichhoc', 'cbsh_lichthi.id_llt', '=', 'cbsh_loailichhoc.llh_id')
        ->join('cbsh_chothi', 'cbsh_lichthi.lt_chothi', '=', 'cbsh_chothi.cth_id')
        ->whereNotIn('lt_id', $data)
        ->get();


    	 $data['list'] = gplx_lophoclx::all();
    	 $data['list2']= DB::table('cbsh_lichthi_lophoc')
    	->join('cbsh_lophoclx', 'cbsh_lichthi_lophoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
    	->join('cbsh_lichthi', 'cbsh_lichthi_lophoc.id_lt', '=', 'cbsh_lichthi.lt_id')
         ->join('cbsh_loailichhoc', 'cbsh_lichthi.id_llt', '=', 'cbsh_loailichhoc.llh_id')
    	->get();
    	return view('gplx.cbsh.saplichthilophoc',$data);
    }
     public function thempostltlh(AddlophoclichthiRequest $re)
    {
        $ltlh= gplx_lophoclichthi::where('id_lt', '=', $re->lt)->where('id_lhlx', '=', $re->lh)->first();
        if($ltlh)
        {
            return redirect('gplx/cbsh/lichthilh')->with('success' ,'Dữ liệu đã tồn tại'); 
        }
        else
        {
    	$gv = new gplx_lophoclichthi;
        $gv->id_lt=$re->lt;
        $gv->id_lhlx=$re->lh; 
    	$gv->save();
    	return redirect('gplx/cbsh/lichthilh'); 
        }
    }
    public function sualtlh($id)
    {
    	$data['lt']=gplx_lophoclichthi::find($id);
    	$data['list'] = gplx_lophoclx::all();
    	$data['list1'] = gplx_lichthi::all();
        // dd($data['list']);
        return view('gplx.cbsh.sualichthilophoc',$data);
    }
    public function postsualtlh(EditlophoclichthiRequest $re,$id)
    {
        $gv = gplx_lophoclichthi::find($id);
    	 $gv->id_lt=$re->lt;
        $gv->id_lhlx=$re->lh; 
    	$gv->save();
    	return redirect('gplx/cbsh/lichthilh'); 
    }
    public function xoalh($id)
    {
        gplx_lophoclichthi::destroy($id);
        return back();
    }
}

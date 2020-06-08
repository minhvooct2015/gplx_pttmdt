<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\gplx_lichthi;
use App\Models\gplx_chothi;
use App\Models\gplx_loailichhoc;
use App\Http\Requests\AddLichthiRequest;
use App\Http\Requests\EditLichthiRequest;
use DB;
class lichthiController extends Controller
{
    //
    public function getlth()
    {
    	
    	$data['list'] = gplx_chothi::all();
        $data['list1'] = gplx_loailichhoc::all();
    	$data['hxlist']= DB::table('cbsh_lichthi')->join('cbsh_chothi','cbsh_lichthi.lt_chothi','cbsh_chothi.cth_id')->orderBy('lt_id','desc')
         ->join('cbsh_loailichhoc', 'cbsh_lichthi.id_llt', '=', 'cbsh_loailichhoc.llh_id')
         ->get();
     //     dd($data2['hxlist']);
    	return view('gplx.cbsh.lichthi',$data);
    }
    
    public function thempostlt(AddLichthiRequest $re)
    {
         $ltlh= DB::table('cbsh_lichhoc')
         //->join('cbsh_lichthi','cbsh_lichthi.lt_ngaythi','cbsh_lichhoc.lh_ngay')
         ->where('cbsh_lichhoc.lh_ngay',$re->ngt)
          ->select('lh_ngay')
         ->first();
        //  if($ltlh)
        // {
        //     return redirect('gplx/cbsh/themlichhoc')->with('success' ,'Lịch học đã bị trùng'); 
        // }
        // else
        // {
         // foreach ($ltlh as $user) {
         //        $data[]= $user->lh_ngay;
         //    }
          //$lt=DB::table('cbsh_lichthi')->where($re->ngt,$data)->select('lt_ngaythi')->get();
    // dd($ltlh);
         if(!empty($ltlh))
         {
            return redirect('gplx/cbsh/dslichthi')->with('success' ,'Lịch thi trùng với lịch học'); 
            

         }
         else
         {
            $ch = new gplx_lichthi;
            $ch->lt_ngaythi=$re->ngt;
            $ch->lt_slug=str_slug($re->ngt);
            $ch->lt_giothi=$re->gt;
            $ch->id_llt=$re->llt;
            $ch->lt_chothi=$re->dc;
            $ch->save();
                    return back(); 
         }
        
    	
    }
    public function suadslth($id)
    {
         $data['lt']=gplx_lichthi::find($id);
         $data['l'] = gplx_chothi::all();
        $data['list1'] = gplx_loailichhoc::all();
         $data1['list']= DB::table('cbsh_lichthi')
         ->join('cbsh_chothi','cbsh_lichthi.lt_chothi','cbsh_chothi.cth_id')
         ->join('cbsh_loailichhoc', 'cbsh_lichthi.id_llt', '=', 'cbsh_loailichhoc.llh_id')
         ->orderBy('lt_id','desc')->get();

        return view('gplx.cbsh.sualichthi',$data,$data1);
    }
    public function postsuadslt(EditLichthiRequest $re,$id)
    {
        $ch = gplx_lichthi::find($id);
        $ch->lt_ngaythi=$re->ngt;
    	$ch->lt_slug=str_slug($re->ngt);
        $ch->lt_giothi=$re->gt;
         $ch->id_llt=$re->llt;
        $ch->lt_chothi=$re->dc;
    	$ch->save();
        return redirect('gplx/cbsh/dslichthi'); 
    }
    public function xoadslt($id)
    {
        gplx_lichthi::destroy($id);
        return back();
    }
}

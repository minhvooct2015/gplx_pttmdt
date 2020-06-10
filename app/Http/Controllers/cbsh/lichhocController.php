<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\gplx_lophoclx;
use App\Models\gplx_lichhoc;
use App\models\gplx_chohoc;
use App\Models\gplx_loailichhoc;
use App\Http\Requests\AddlichhocRequest;
use App\Http\Requests\EditlichhocRequest;
class lichhocController extends Controller
{
    //
    public function dslichhoc()
    {
    	
    	$data['list'] = gplx_lophoclx::all();

    	$data['list1'] = gplx_chohoc::all();
    	$data['list2'] = gplx_loailichhoc::all();
    	 $data['list3']= DB::table('cbsh_lichhoc')
         ->orderBy('cbsh_lichhoc.lh_id','desc')
    	->join('cbsh_loailichhoc', 'cbsh_lichhoc.id_llh', '=', 'cbsh_loailichhoc.llh_id')
    	->join('cbsh_chohoc', 'cbsh_lichhoc.id_ch', '=', 'cbsh_chohoc.ch_id')
    	->join('cbsh_lophoclx', 'cbsh_lichhoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
    	->paginate(5);
    	//dd($data['list']);
    	// dd($data1['list1']);
    	//dd($data['list3']);
    	return view('gplx.cbsh.dslichhoc',$data);
    }
    public function dslichhocth()
    {
         $data['list3']= DB::table('cbsh_lichhoc')
        ->join('cbsh_loailichhoc', 'cbsh_lichhoc.id_llh', '=', 'cbsh_loailichhoc.llh_id')
        ->join('cbsh_chohoc', 'cbsh_lichhoc.id_ch', '=', 'cbsh_chohoc.ch_id')
        ->join('cbsh_lophoclx', 'cbsh_lichhoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
        ->join('cbsh_giaovien', 'cbsh_lophoclx.lhlx_gv', '=', 'cbsh_giaovien.gv_id')
        ->orderBy('cbsh_lichhoc.lh_id', 'desc')
        ->paginate(5);
        // dd($data['list3']);
        // dd($data1['list1']);
        //dd($data['list2']);
        return view('gplx.cbsh.dslichhocth',$data);
    }




     public function themlichhoc()
    {
        $data['list'] = gplx_lophoclx::all();

        $data['list1'] = gplx_chohoc::all();
        $data['list2'] = gplx_loailichhoc::all();
         
        return view('gplx.cbsh.themlichhoc',$data);
    }
    public function thempostdslichhoc(AddlichhocRequest $re)
    {
        //  $ltlh= gplx_lichhoc::where('lh_ngay', '=', $re->ngh)
        //  //->where('id_lhlx', '=', $re->lhlx)
        //  ->where('id_ch', '=', $re->ch)

        //  ->first();
        // // dd($ltlh);
        //  if($ltlh)
        // {
        //     return redirect('gplx/cbsh/themlichhoc')->with('success' ,'Lịch học đã bị trùng'); 
        // }
        // else
        // {
    	$gv = new gplx_lichhoc;
        $gv->id_llh=$re->llh;
        $gv->id_ch=$re->ch; 
        $gv->id_lhlx=$re->lhlx; 
        $gv->lh_ngay=$re->ngh; 
        $gv->lh_giohocbatdau=$re->gh; 
    	$gv->save();
    	return redirect('gplx/cbsh/dslichhoc'); 
    }
    // }
    public function sualh($id)
    {
         $data['lt']= gplx_lichhoc::find($id);
        $data['list'] = gplx_lophoclx::all();
        $data['list1'] = gplx_chohoc::all();
        $data['list2'] = gplx_loailichhoc::all();
        return view('gplx.cbsh.sualichhoc',$data);
    }
    public function postsualh(EditlichhocRequest $re,$id)
    {
        $gv = gplx_lichhoc::find($id);
        $gv->id_llh=$re->llh;
        $gv->id_ch=$re->ch; 
        $gv->id_lhlx=$re->lhlx; 
        $gv->lh_ngay=$re->ngh; 
        $gv->lh_giohocbatdau=$re->gh; 
        $gv->save();
        return redirect('gplx/cbsh/dslichhoc'); 
    }
    public function xoalh($id)
    {
        gplx_lichhoc::destroy($id);
        return back();
    }
}

<?php

namespace App\Http\Controllers\nguoidung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use DB;
use App\Models\hangxe;
use App\Models\gplx_lichhoc;
use App\Models\gplx_lophoclx;
use App\Http\Requests\EditphieudangkyRequest;
use App\Http\Requests\AddphieudangkyRequest;
use App\Models\phieudangky;
use App\Models\gplx_banglaixe;
use RealRashid\SweetAlert\Facades\Alert;


class PhieudkController extends Controller
{
    //
      public function thempdk()
    {	
    	// $data['list1']=DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();
         
    	$id=Auth::user()->id;

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
    else 
    {
        $data['list1']=DB::table('motahangxe')
        ->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')               
          ->where('hx_id', '>', 1)
        ->whereNotIn('hx_id', $data)
        // ->whereNotIn('hx_id', $data1)
        //  ->whereNotIn('hx_id', $data2)
         ->get();
    }


        // $data['blx']= DB::table('gplx_banglaixe')
        // ->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
        // ->where('gplx_user.id', '=', $id)->select('hx_id')
        // ->get();

    	$data['list']= DB::table('gplx_banglaixe')
    	->join('cbsh_hangxe', 'gplx_banglaixe.blx_hx', '=', 'cbsh_hangxe.hx_id')
    	->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
    	->where('gplx_user.id', '=', $id)->orderBy('gplx_banglaixe.blx_hx','desc')
    	->get();
    	$data['list2']= DB::table('cbsh_lophoclx')
        ->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')
    	->get();
    	  //dd( $data['list1']);
        $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
    	return view('gplx.nguoidung.thempdk',$data);
    }
    public function thempdkid($id)
    {   
        // $data['list1']=DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();
         $data['lt']=hangxe::find($id);
         $hxid=DB::table('cbsh_hangxe')->where('cbsh_hangxe.hx_id', '=', $id)
         ->select('hx_id')->get();
         //dd($hxx);
         foreach ($hxid as $user) {
                $xe[]= $user->hx_id;
            }
        $id=Auth::user()->id;

         $blx= DB::table('gplx_banglaixe')
        ->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
        ->where('gplx_user.id', '=', $id)
        ->select('blx_hx')
        ->get();
        
        foreach ($blx as $user) {
                $data[]= $user->blx_hx;
            }

        $data['list1']=DB::table('cbsh_hangxe')                 
          ->where('hx_id', '>', 1)
        ->whereNotIn('hx_id', $data)->get();


        // $data['blx']= DB::table('gplx_banglaixe')
        // ->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
        // ->where('gplx_user.id', '=', $id)->select('hx_id')
        // ->get();

        $data['list']= DB::table('gplx_banglaixe')
        ->join('cbsh_hangxe', 'gplx_banglaixe.blx_hx', '=', 'cbsh_hangxe.hx_id')
        ->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
        ->where('gplx_user.id', '=', $id)->orderBy('gplx_banglaixe.blx_hx','desc')
        ->get();
        $data['list2']= DB::table('cbsh_lophoclx')
        ->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')
        ->where('cbsh_lophoclx.lhlx_hx', '=', $xe)
        ->get();
        // $data['list2']= DB::table('cbsh_lichhoc')
        // ->join('cbsh_loailichhoc', 'cbsh_lichhoc.id_llh', '=', 'cbsh_loailichhoc.llh_id')
        // ->join('cbsh_chohoc', 'cbsh_lichhoc.id_ch', '=', 'cbsh_chohoc.ch_id')
        // ->join('cbsh_lophoclx', 'cbsh_lichhoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
        // ->get();
          //dd( $data['list1']);
        $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        return view('gplx.nguoidung.thempdkid',$data);
    }
     public function dspdk()
    {   
        $id=Auth::user()->id;
        $data['list']= DB::table('phieudangky')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->join('cbsh_lophoclx', 'phieudangky.pdk_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
        ->where('gplx_user.id', '=', $id)
        ->paginate(4);
        $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        return view('gplx.nguoidung.dsphieudangky',$data);
    }
     public function thempostpdk(AddphieudangkyRequest $re)
    {
        $id=Auth::user()->id;
        // $blx=gplx_banglaixe::whereRaw('blx_id = (select max(`blx_id`) from gplx_banglaixe where   gplx_banglaixe.id_hv = '$id')')->get();
        $blx1=DB::table('gplx_banglaixe')->where('id_hv', $id)->max('blx_hx');
        $blx=DB::table('gplx_banglaixe')->where('blx_hx', $blx1)->max('blx_id');
          // dd($blx);
        $f1= $re->sk1->getClientOriginalName();
        $f2= $re->sk2->getClientOriginalName();
        $f3= $re->a34->getClientOriginalName();
        $f4= $re->cm1->getClientOriginalName();
        $f5= $re->cm2->getClientOriginalName();
        $gv = new phieudangky;

        $gv->pdk_blx=$blx;
        echo $re->$blx;
        $gv->pdk_hx=$re->hx;
        $gv->pdk_lhlx=$re->lhlx;
        $gv->pdk_hv=$id;
        $gv->pdk_diemTH=0;
        $gv->pdk_diemLT=0;
        $gv->pdk_tinhtrangHP=0;

        $gv->pdk_anhsk1=$f1;
        $gv->pdk_anhsk2=$f2;
        $gv->pdk_anh34=$f3;
        $gv->pdk_anhcmnd1=$f4;
        $gv->pdk_anhcmnd2=$f5;
         $gv->save();
        $re->sk1->storeAs('anhPDK',$f1); ///Applications/XAMPP/xamppfiles/htdocs/laravel/laravel/storage/app/anhGV
        $re->sk2->storeAs('anhPDK',$f3);
        $re->a34->storeAs('anhPDK',$f3);
        $re->cm1->storeAs('anhPDK',$f4);
        $re->cm2->storeAs('anhPDK',$f5);
        return redirect('gplx/nguoidung/dspdk'); 
    }
    
    public function chitietpdk($id)
    {   
        $idu=Auth::user()->id;
        $data['list']= DB::table('phieudangky')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->join('cbsh_lophoclx', 'phieudangky.pdk_lhlx', '=', 'cbsh_lophoclx.lhlx_id')

        // ->join('cbsh_lichthi_lophoc', 'cbsh_lophoclx.lhlx_id', '=', 'cbsh_lichthi_lophoc.id_lhlx')
        // ->join('cbsh_lichthi', 'cbsh_lichthi_lophoc.id_lt', '=', 'cbsh_lichthi.lt_id')
        // ->join('cbsh_chothi', 'cbsh_lichthi.lt_chothi', '=', 'cbsh_chothi.cth_id')

        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
         ->join('cbsh_lichhoc', 'cbsh_lophoclx.lhlx_id', '=', 'cbsh_lichhoc.id_lhlx')
        ->join('cbsh_chohoc', 'cbsh_lichhoc.id_ch', '=', 'cbsh_chohoc.ch_id')
        ->join('cbsh_loailichhoc', 'cbsh_lichhoc.id_llh', '=', 'cbsh_loailichhoc.llh_id')
        ->where('gplx_user.id', '=', $idu)
        ->where('phieudangky.pdk_id', '=', $id)
        ->get();

        $data['list1']= DB::table('phieudangky')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->join('cbsh_lophoclx', 'phieudangky.pdk_lhlx', '=', 'cbsh_lophoclx.lhlx_id')

        ->join('cbsh_lichthi_lophoc', 'cbsh_lophoclx.lhlx_id', '=', 'cbsh_lichthi_lophoc.id_lhlx')
        ->join('cbsh_lichthi', 'cbsh_lichthi_lophoc.id_lt', '=', 'cbsh_lichthi.lt_id')
        ->join('cbsh_chothi', 'cbsh_lichthi.lt_chothi', '=', 'cbsh_chothi.cth_id')
       ->join('cbsh_loailichhoc', 'cbsh_lichthi.id_llt', '=', 'cbsh_loailichhoc.llh_id')
        ->where('gplx_user.id', '=', $idu)
        ->where('phieudangky.pdk_id', '=', $id)
        ->select('cbsh_lichthi.lt_ngaythi', 'cbsh_lichthi.lt_giothi','cbsh_chothi.cth_ten','cbsh_chothi.cth_diachi','cbsh_loailichhoc.llh_ten')
        ->distinct()
        ->get();
          // dd( $data['list1']);
         $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        return view('gplx.nguoidung.chitietpdk',$data);
    }
    public function xoapdk($id)
    {
        phieudangky::destroy($id);
        return back();
    }

}

<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use DB;
use App\Mail\MailtoGV;
use App\Models\gplx_lichhoc;
use App\Models\gplx_giaovien;
use App\Models\gplx_lophoclx;
use RealRashid\SweetAlert\Facades\Alert;


class MailController extends Controller
{
    //
    public function ctmail()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = getdate();
     $thang=$date["mon"];
    $nam=$date["year"];

   
    	$data['list3']= DB::table('cbsh_lichhoc')
        ->join('cbsh_loailichhoc', 'cbsh_lichhoc.id_llh', '=', 'cbsh_loailichhoc.llh_id')
        ->join('cbsh_chohoc', 'cbsh_lichhoc.id_ch', '=', 'cbsh_chohoc.ch_id')
        ->join('cbsh_lophoclx', 'cbsh_lichhoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
        ->join('cbsh_giaovien', 'cbsh_lophoclx.lhlx_gv', '=', 'cbsh_giaovien.gv_id')
        ->where('lh_ngay', 'like',"% $thang, $nam%")
        ->get();
         $data['list2']= DB::table('cbsh_lichthi')
        ->join('cbsh_loailichhoc', 'cbsh_lichthi.id_llt', '=', 'cbsh_loailichhoc.llh_id')
        ->join('cbsh_chothi', 'cbsh_lichthi.lt_chothi', '=', 'cbsh_chothi.cth_id')
        ->join('cbsh_lichthi_lophoc', 'cbsh_lichthi.lt_id', '=', 'cbsh_lichthi_lophoc.id_lt')
        ->join('cbsh_lophoclx', 'cbsh_lichthi_lophoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
        ->join('cbsh_giaovien_Lichthi', 'cbsh_lichthi.lt_id', '=', 'cbsh_giaovien_Lichthi.id_lt')
        ->join('cbsh_giaovien', 'cbsh_giaovien_Lichthi.id_gv', '=', 'cbsh_giaovien.gv_id')
        ->where('lt_ngaythi', 'like',"% $thang, $nam%")
        ->get();
        // dd($data['list3']);
        // dd($data1['list1']);
        //dd($data['list2']);

        return view('gplx.cbsh.gmail_xemtruoc',$data);


    }
    public function mail()
    {
    	$data=DB::table('cbsh_giaovien')->select('gv_email')->get();
    	$mail='minhvoct2014@gmail.com';
    	// $a = array();
    	// foreach($data as $da)
    	// {
    	// 	$a[] =  $da->toArray();
    	// 	//dd($a);

    	// }

    	 foreach($data as $da)
     {

    	 	 Mail::to($da->gv_email)->send(new MailtoGV);

    	 }
    	  Alert::success('Mail đã gửi thành công cho các giáo viên', 'Success Message');
    	
    	return back(); 
    }
}

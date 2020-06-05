<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\gplx_lichhoc;
use App\Models\gplx_giaovien;
use App\Models\gplx_lophoclx;
use DB;
class MailtoGV extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct( )
    {
        //
       
        //return view('gplx.cbsh.gmail',$data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
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
        return $this->view('gplx.cbsh.gmail',$data);
    }
}

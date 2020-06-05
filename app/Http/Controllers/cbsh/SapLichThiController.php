<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\gplx_giaovien_lichthi;
use App\Models\gplx_lichthi;
use App\Models\gplx_giaovien;
use App\Http\Requests\AddLichThivaGiaoVienRequest;
use App\Http\Requests\EditLichThivaGiaoVienRequest;
use DB;
class SapLichThiController extends Controller
{
    //
    public function saplt()
    {
    	 $lich=DB::table('cbsh_giaovien_Lichthi')
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
    	$data['gv']=gplx_giaovien::all();
    	return view('gplx.cbsh.sapLT',$data);
    }
    public function dslichthi()
    {
        
         $data['list3']= DB::table('cbsh_lichthi')
        ->join('cbsh_loailichhoc', 'cbsh_lichthi.id_llt', '=', 'cbsh_loailichhoc.llh_id')
        ->join('cbsh_chothi', 'cbsh_lichthi.lt_chothi', '=', 'cbsh_chothi.cth_id')
        ->join('cbsh_lichthi_lophoc', 'cbsh_lichthi.lt_id', '=', 'cbsh_lichthi_lophoc.id_lt')
        ->join('cbsh_lophoclx', 'cbsh_lichthi_lophoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
        ->join('cbsh_giaovien_Lichthi', 'cbsh_lichthi.lt_id', '=', 'cbsh_giaovien_Lichthi.id_lt')
        ->join('cbsh_giaovien', 'cbsh_giaovien_Lichthi.id_gv', '=', 'cbsh_giaovien.gv_id')
       ->orderBy('cbsh_lichthi.lt_id', 'desc')
        ->paginate(5);
         // dd($data['list3']);
        
        return view('gplx.cbsh.dslichthi',$data);
    }

 public function thempcgv(AddLichThivaGiaoVienRequest $re)
    {

        $ltlh= gplx_giaovien_lichthi::where('id_lt', '=', $re->lt)->where('id_gv', '=', $re->gv)->first();
        if($ltlh)
        {
            return redirect('gplx/cbsh/saplt')->with('success' ,'Dữ liệu đã tồn tại'); 
        }
        else
        {


    	$pc = new gplx_giaovien_lichthi;
    	$pc->id_lt=$re->lt;
    	$pc->id_gv=$re->gv;
    	$pc->save();
    	return redirect('gplx/cbsh/dspc'); 
    }
    }
    public function dspc()
    {
    	$data['list'] = gplx_giaovien_lichthi::all();


    	$data['list']= DB::table('cbsh_giaovien_Lichthi')
    	->join('cbsh_giaovien', 'cbsh_giaovien.gv_id', '=', 'cbsh_giaovien_Lichthi.id_gv')
    	->join('cbsh_lichthi', 'cbsh_lichthi.lt_id', '=', 'cbsh_giaovien_Lichthi.id_lt')
    	->join('cbsh_chothi','cbsh_chothi.cth_id','=','cbsh_lichthi.lt_chothi')
    	->orderBy('gvlt_id','desc')
    	->get();
    	//dd($data['list']);
    	return view('gplx.cbsh.dsgvgacthi',$data);
    }
    public function suabpc($id)
    {
        $data['lt']= gplx_giaovien_lichthi::find($id);
        $data['list'] = gplx_lichthi::all();
    	$data['list1'] = gplx_giaovien::all();
    	//dd($data['list']);
        return view('gplx.cbsh.sualtgv',$data);
    }
    public function postsuabpc(EditLichThivaGiaoVienRequest $re,$id)
    {
        $pc = gplx_giaovien_lichthi::find($id);
    	$pc->id_lt=$re->lt;
    	$pc->id_gv=$re->gv;
    	$pc->save();
        return redirect('gplx/cbsh/dspc'); 
    }
     public function xoapc($id)
    {
        gplx_giaovien_lichthi::destroy($id);
        return back();
    }






}
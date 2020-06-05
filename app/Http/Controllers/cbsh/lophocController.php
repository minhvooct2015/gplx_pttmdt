<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\gplx_giaovien;
use App\Models\hangxe;
use App\Models\gplx_lophoclx;
use App\Http\Requests\AddlophoclaxeRequest;
use App\Http\Requests\EditlophoclaxeRequest;
use DB;
class lophocController extends Controller
{
    //getdslh

    	 public function getdslh()
    	 {
    	$data['list'] = gplx_giaovien::all();
    	$data['list1'] = DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();;
    	$data['list2']= DB::table('cbsh_lophoclx')
    	->join('cbsh_giaovien', 'cbsh_lophoclx.lhlx_gv', '=', 'cbsh_giaovien.gv_id')
    	->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')
    	->get();
    	// dd($data2['alist']);
    	return view('gplx.cbsh.dslophoc',$data);
	    }
	     public function thempostlh(AddlophoclaxeRequest $re)
    {
        $ltlh= gplx_lophoclx::where('lhlx_gv', '=', $re->gv)->where('lhlx_hx', '=', $re->hx)
        ->where('lhlx_ten', '=', $re->name)->first();
        if($ltlh)
        {
            return redirect('gplx/cbsh/dslophoc')->with('success' ,'Dữ liệu đã tồn tại'); 
        }
        else{
    	$gv = new gplx_lophoclx;
        $gv->lhlx_gv=$re->gv;
        $gv->lhlx_hx=$re->hx;
        $gv->lhlx_ten=$re->name;
    	$gv->save();
    	return redirect('gplx/cbsh/dslophoc'); 
        }
    }
    public function suadslh($id)
    {
    	$data['lt']=gplx_lophoclx::find($id);
    	$data['list'] = gplx_giaovien::all();
    	$data['list1'] = hangxe::all();
        // dd($data['list']);
        return view('gplx.cbsh.sualophoc',$data);
    }
    public function postsuadslh(EditlophoclaxeRequest $re,$id)
    {
        $pc = gplx_lophoclx::find($id);
    	$pc->lhlx_hx=$re->hx;
    	$pc->lhlx_gv=$re->gv;
        $pc->lhlx_ten=$re->name;
    	$pc->save();
        return redirect('gplx/cbsh/dslophoc'); 
    }
     public function xoalh($id)
    {
        gplx_lophoclx::destroy($id);
        return back();
    }
}

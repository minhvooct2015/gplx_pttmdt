<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\gplx_loailichhoc;
use App\Http\Requests\AddloaiLHRequest;
use App\Http\Requests\EditloaiLHRequest;

class loailichhocController extends Controller
{
    //
    public function getdsllh()
    {
    	$data['llhlist'] = gplx_loailichhoc::all();
    	return view('gplx.cbsh.dsloailh',$data);
    }
     public function thempostllh(AddloaiLHRequest $re)
    {
    	$llh = new gplx_loailichhoc;
    	$llh->llh_ten=$re->name;
    	$llh->llh_slug=str_slug($re->name);
    	$llh->save();
    	return back(); 
    }
    public function suadsllh($id)
    {
         $data['llh']=gplx_loailichhoc::find($id);
        return view('gplx.cbsh.sualoailh',$data);
    }
     public function postsuadsllh(EditloaiLHRequest $re,$id)
    {
        $hx = gplx_loailichhoc::find($id);
        $hx->llh_ten=$re->name;
        $hx->llh_slug=str_slug($re->name);
        $hx->save();
        return redirect('gplx/cbsh/dsloailh'); 
    }
    public function xoadsllh($id)
    {
        gplx_loailichhoc::destroy($id);
        return back();
    }
}

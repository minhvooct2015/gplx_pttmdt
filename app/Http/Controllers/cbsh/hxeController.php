<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\hangxe;
use App\Http\Requests\themhxRequest;
use App\Http\Requests\suahxRequest;
use DB;
class hxeController extends Controller
{
    //
     public function getdshx()
    {

    	$data['hxlist'] = DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();
        
    	return view('gplx.cbsh.dshxe',$data);
    }
    public function themhx()
    {
    	
    	 return view('gplx.cbsh.dshxe');
    }
    public function themposthx(themhxRequest $re)
    {
    	$hx = new hangxe;
    	$hx->hx_ten=$re->name;
    	$hx->hx_slug=str_slug($re->name);
        $hx->hx_giatien=$re->gia;
    	$hx->save();
    	return back(); 
    }
    public function suadshx($id)
    {
        $data['hx']=hangxe::find($id);
        return view('gplx.cbsh.suahxe',$data);
    }
    public function postsuadshx(suahxRequest $re,$id)
    {
        $hx = hangxe::find($id);
        $hx->hx_ten=$re->name;
        $hx->hx_slug=str_slug($re->name);
         $hx->hx_giatien=$re->gia;
        $hx->save();
        return redirect('gplx/cbsh/dshangxe'); 
    }
    public function xoadshx($id)
    {
        hangxe::destroy($id);
        return back();
    }
    
}

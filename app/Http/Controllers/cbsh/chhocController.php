<?php

namespace App\Http\Controllers\cbsh;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\gplx_chohoc;
use App\Http\Requests\AddChohocRequest;
use App\Http\Requests\EditChohocRequest;
class chhocController extends Controller
{
    //
     public function getdsch()
    {
    	$data['chlist'] = gplx_chohoc::all();
    	return view('gplx.cbsh.dschohoc',$data);
    }
    public function thempostch(AddChohocRequest $re)
    {
    	$ch = new gplx_chohoc;
    	$ch->ch_ten=$re->name;
    	$ch->ch_slug=str_slug($re->name);
        $ch->ch_diachi=$re->dc;
    	$ch->save();
    	return back(); 
    }
    public function suadsch($id)
    {
         $data['ch']=gplx_chohoc::find($id);
        return view('gplx.cbsh.suach',$data);
    }
    public function postsuadsch(EditChohocRequest $re,$id)
    {
        $hx = gplx_chohoc::find($id);
        $hx->ch_ten=$re->name;
        $hx->ch_slug=str_slug($re->name);
        $hx->ch_diachi=$re->dc;
        $hx->save();
        return redirect('gplx/cbsh/dschohoc'); 
    }
    public function xoadsch($id)
    {
        gplx_chohoc::destroy($id);
        return back();
    }
}

<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\gplx_chothi;
use App\Http\Requests\AddchothiRequest;
use App\Http\Requests\EditchothiRequest;
class chothiController extends Controller
{
    //
    public function getdscth()
    {
    	$data['cthlist'] = gplx_chothi::all();
    	return view('gplx.cbsh.dschothi',$data);
    }
    public function thempostcth(AddchothiRequest $re)
    {
    	$ch = new gplx_chothi;
    	$ch->cth_ten=$re->name;
    	$ch->cth_slug=str_slug($re->name);
        $ch->cth_diachi=$re->dc;
    	$ch->save();
    	return back(); 
    }
    public function suadscth($id)
    {
         $data['ch']=gplx_chothi::find($id);
        return view('gplx.cbsh.suachothi',$data);
    }
    public function postsuadscth(EditchothiRequest $re,$id)
    {
        $hx = gplx_chothi::find($id);
        $hx->cth_ten=$re->name;
        $hx->cth_slug=str_slug($re->name);
        $hx->cth_diachi=$re->dc;
        $hx->save();
        return redirect('gplx/cbsh/dschothi'); 
    }
    public function xoadscth($id)
    {
        gplx_chothi::destroy($id);
        return back();
    }
}

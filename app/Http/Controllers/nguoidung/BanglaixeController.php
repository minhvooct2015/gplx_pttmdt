<?php

namespace App\Http\Controllers\nguoidung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\hangxe;
use App\Models\gplx_banglaixe;
use DB;
use App\Http\Requests\AddbanglaixeRequest;
use App\Http\Requests\EditbanglaixeRequest;
use App\User;
use Auth;

class BanglaixeController extends Controller
{
    //
    public function themblx()
    {	
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

    	$data['list']= DB::table('gplx_banglaixe')
    	->join('cbsh_hangxe', 'gplx_banglaixe.blx_hx', '=', 'cbsh_hangxe.hx_id')
    	->get();
        $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
    	return view('gplx.nguoidung.themblx',$data);
    }
    public function thempostblx(AddbanglaixeRequest $re)
    {
    	$ch = new gplx_banglaixe;
    	$ch->blx_hx=$re->hx;
    	$ch->blx_ngaycap=$re->ngc;
        $ch->blx_so=$re->so;
        $ch->blx_noicap=$re->nc;
        $ch->id_hv=Auth::user()->id;
    	$ch->save();
    	return redirect('gplx/nguoidung/dsbanglaixe');  
    }
     public function dsbanglaixe()
     
    {	
        $id=Auth::user()->id;
        $data['list']= DB::table('gplx_banglaixe')
    	->join('cbsh_hangxe', 'gplx_banglaixe.blx_hx', '=', 'cbsh_hangxe.hx_id')
        ->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
    	->where('cbsh_hangxe.hx_id', '>', 1)
        ->where('gplx_user.id', '=', $id)
        ->paginate(4);
       // dd($data['list']);
        $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
    	return view('gplx.nguoidung.dsbanglaixe',$data);
    }
     public function suablx($id)
    {
         $data['bl']=gplx_banglaixe::find($id);
         $data['list']= hangxe::all();
         $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        return view('gplx.nguoidung.suablx',$data);
    }
     public function postsuablx(EditbanglaixeRequest $re,$id)
    {
        $ch = gplx_banglaixe::find($id);
        $ch->blx_hx=$re->hx;
    	$ch->blx_ngaycap=$re->ngc;
        $ch->blx_so=$re->so;
        $ch->blx_noicap=$re->nc;
        $ch->id_hv=Auth::user()->id;
    	$ch->save();
    	return redirect('gplx/nguoidung/dsbanglaixe');  
    }
    public function xoablx($id)
    {
        gplx_banglaixe::destroy($id);
        return back();
    }
}

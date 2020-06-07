<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\hangxe;
use App\Models\motahangxe;
use App\Http\Requests\AddgiaovienRequest;
use App\Http\Requests\EditMotahxRequest;
class MotaHANGXEcontroller extends Controller
{
    //
    public function themmota()
    {   
        // $data['list1']=DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();


         $blx= DB::table('motahangxe')
        ->select('id_hx')
        ->get();
        // dd($blx);
        // if(empty($blx)){
        foreach ($blx as $user) {
                $data[]= $user->id_hx;
            }

        $data['list1']=DB::table('cbsh_hangxe')                 
          ->where('hx_id', '>', 1)
        ->whereNotIn('hx_id', $data)->get();
// }
// else  $data['list1']=DB::table('cbsh_hangxe')                 
//           ->where('hx_id', '>', 1)->get();





        return view('gplx.cbsh.motahx',$data);
    }
    public function thempostmota(AddgiaovienRequest $re)
    {
    	$filename= $re->img->getClientOriginalName();
    	$gv = new motahangxe;
    	$gv->mthx_chitiet=$re->mota;
    	$gv->id_hx=$re->hx;
        $gv->mthx_anh=$filename;
    	$gv->save();
    	$re->img->storeAs('anhHX',$filename); ///Applications/XAMPP/xamppfiles/htdocs/laravel/laravel/storage/app/anhGV
    	return redirect('gplx/cbsh/dsmota'); 
    }
    public function getdsmt()
    {
    	$data['gvlist'] = DB::table('motahangxe')
    	->join('cbsh_hangxe', 'motahangxe.id_hx', '=', 'cbsh_hangxe.hx_id')->get();
    	return view('gplx.cbsh.dsmotahx',$data);
    }
    public function suamthx($id)
    {
        $data['list1']=DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();
         $data['lt']=motahangxe::find($id);
          $lt=motahangxe::find($id);
          // dd($data['list1']);
        return view('gplx.cbsh.suamthx',$data);
    }
    public function postsuamthx(EditMotahxRequest $re,$id)
    {
        $pro= new motahangxe;
        $arr['mthx_chitiet']=$re->mota;
        $arr['id_hx']=$re->hx;
         if($re->hasFile('img'))
        {
             $img=$re->img->getClientOriginalName();
             $arr['mthx_anh']=$img;
              $re->img->storeAs('anhHX',$img);
        }
        $pro::where('mthx_id',$id)->update($arr);
        return redirect('gplx/cbsh/dsmota'); 
    }
    
     public function xoamthangxe($id)
    {
        motahangxe::destroy($id);
        return back();
    }




}

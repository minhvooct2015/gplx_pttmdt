<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\gplx_giaovien;
use App\Http\Requests\AddgiaovienRequest;
use App\Http\Requests\EditgiaovienRequest;
class GiaoVienController extends Controller
{
    //
     public function themgv()
    {
    	return view('gplx.cbsh.themGiaoVien');
    }
    public function thempostgv(AddgiaovienRequest $re)
    {
    	$filename= $re->img->getClientOriginalName();
    	$gv = new gplx_giaovien;
    	$gv->gv_ten=$re->name;
    	$gv->gv_slug=str_slug($re->name);
        $gv->gv_anh=$filename;
        $gv->gv_diachi=$re->dc;
        $gv->gv_trinhdo=$re->trd;
        $gv->gv_sdt=$re->sdt;
        $gv->gv_email=$re->email;
    	$gv->save();
    	$re->img->storeAs('anhGV',$filename); ///Applications/XAMPP/xamppfiles/htdocs/laravel/laravel/storage/app/anhGV
    	return redirect('gplx/cbsh/dsgiaovien'); 
    }
    public function dsgv()
    {
    	$data['gvlist'] = gplx_giaovien::all();
    	return view('gplx.cbsh.dsgiaovien',$data);
    }
    
    public function suagv($id)
    {
         $data['gv']=gplx_giaovien::find($id);
        return view('gplx.cbsh.suagv',$data);
    }

    public function postsuagv(EditgiaovienRequest $re,$id)
    {
        $pro= new gplx_giaovien;
        $arr['gv_ten']=$re->name;
        $arr['gv_slug']=str_slug($re->name);
        $arr['gv_diachi']=$re->dc;
        $arr['gv_trinhdo']=$re->trd;
        $arr['gv_sdt']=$re->sdt;
        $arr['gv_email']=$re->email;
         if($re->hasFile('img'))
        {
             $img=$re->img->getClientOriginalName();
             $arr['gv_anh']=$img;
              $re->img->storeAs('anhGV',$img);
        }
        $pro::where('gv_id',$id)->update($arr);
        return redirect('gplx/cbsh/dsgiaovien'); 
    }
    public function xoagv($id)
    {
        gplx_giaovien::destroy($id);
        return back();
    }


}

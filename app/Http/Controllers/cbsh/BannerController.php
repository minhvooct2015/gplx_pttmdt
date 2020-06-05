<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Http\Requests\AddthemBannerRequest;
use App\Http\Requests\EditgiaovienRequest;
use DB;
class BannerController extends Controller
{
    //
     public function getbanner()
    {
    	return view('gplx.cbsh.thembanner');
    }
    public function postbanner(AddthemBannerRequest $re)
    {
    	 $f1= $re->b1->getClientOriginalName();
        $f2= $re->b2->getClientOriginalName();
        $f3= $re->b3->getClientOriginalName();
        $f4= $re->b4->getClientOriginalName();
        $f5= $re->b5->getClientOriginalName();
        $f6= $re->b6->getClientOriginalName();
        $gv = new banner;


        $gv->ban_ngang1=$f1;
        $gv->ban_ngang2=$f2;
        $gv->ban_trai1=$f3;
        $gv->ban_trai2=$f4;
        $gv->ban_trai3=$f5;
        $gv->ban_trai4=$f6;
        $gv->ban_trangthai=0;
         $gv->save();
        $re->b1->storeAs('anhBanner',$f1); ///Applications/XAMPP/xamppfiles/htdocs/laravel/laravel/storage/app/anhGV
        $re->b2->storeAs('anhBanner',$f3);
        $re->b3->storeAs('anhBanner',$f3);
        $re->b4->storeAs('anhBanner',$f4);
        $re->b5->storeAs('anhBanner',$f5);
        $re->b6->storeAs('anhBanner',$f6);
        return redirect('gplx/cbsh/dsbanner'); 
    }
    public function dsbanner()
    {
    	$data['list'] = banner::all();
    	return view('gplx.cbsh.dsbanner',$data);
    }
    public function Showbanner($id)
    {
        
        $gv = banner::find($id);
        DB::table('banner')
            ->where('ban_id',$id )
            ->update(
            	['ban_trangthai' => 1]
        );
        $blx= DB::table('banner')
         ->where('ban_id','<>',$id )
        ->get();    
        // ->select('hx_id')->get();
        //dd($blx);
        foreach ($blx as $user) {
        	
                DB::table('banner')
        	->where('ban_id','<>',$id )
            ->update(
            	[ 'ban_trangthai' => 0]
        );
            }
            
        return redirect('gplx/cbsh/dsbanner'); 
    }
    public function xoabanner($id)
    {
        banner::destroy($id);
        return back();
    }
    public function suabanner($id)
    {
         $data['gv']=DB::table('banner')
            ->where('ban_id','=',$id )
            ->get();
         //dd($data['gv']);
        return view('gplx.cbsh.suabanner',$data);
    }
    public function suapostbanner(EditgiaovienRequest $re,$id)
    {
        $pro= new banner;
        $arr['ban_ngang1']=$re->b1;
        $arr['ban_ngang2']=$re->b2;
        $arr['ban_trai1']=$re->b3;
        $arr['ban_trai2']=$re->b4;
        $arr['ban_trai3']=$re->b5;
        $arr['ban_trai4']=$re->b6;
         if($re->hasFile('b1'))
        {
             $img1=$re->b1->getClientOriginalName();
            
              $re->b1->storeAs('anhBanner',$img1);
               $pro::where('ban_id',$id)->update(
                ['ban_ngang1' => $img1]
        );
        }
       

        if($re->hasFile('b2'))
        {
             $img2=$re->b2->getClientOriginalName();
             
              $re->b2->storeAs('anhBanner',$img2);
               $pro::where('ban_id',$id)->update(
                ['ban_ngang2' => $img2]
        );
        }
       
        if($re->hasFile('b3'))
        {
             $img3=$re->b3->getClientOriginalName();
             
              $re->b3->storeAs('anhBanner',$img3);
              $pro::where('ban_id',$id)->update(
                ['ban_trai1' => $img3]
        );
        }
         
        if($re->hasFile('b4'))
        {
             $img4=$re->b4->getClientOriginalName();
           
              $re->b4->storeAs('anhBanner',$img4);
              $pro::where('ban_id',$id)->update(
                ['ban_trai2' => $img4]
        );
        }
         
        if($re->hasFile('b5'))
        {
             $img5=$re->b5->getClientOriginalName();
            
              $re->b5->storeAs('anhBanner',$img5);
               $pro::where('ban_id',$id)->update(
                ['ban_trai3' => $img5]
        );
        }
       
        if($re->hasFile('b6'))
        {
             $img6=$re->b6->getClientOriginalName();
            
              $re->b6->storeAs('anhBanner',$img6);
               $pro::where('ban_id',$id)->update(
                ['ban_trai4' => $img6]
        );
        }
        
        return redirect('gplx/cbsh/dsbanner'); 
    }

}

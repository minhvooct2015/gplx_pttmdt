<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Auth;
use App\Models\gplx_lophoclx;
use App\Models\gplx_lichhoc;
use App\models\gplx_chohoc;
use App\models\hangxe;
use App\Models\gplx_loailichhoc;
use App\Models\gplx_banglaixe;
use App\Models\phieudangky;
use App\Http\Requests\AddlichhocRequest;
use App\Http\Requests\EditlichhocRequest;

class KetquaController extends Controller
{
    //
      public function getds()
    {
    	// $data['list'] = gplx_lophoclx::all();

    	// $data['list1'] = gplx_chohoc::all();
    	// $data['list2'] = gplx_loailichhoc::all();
    	 $data['list3']= DB::table('phieudangky')
    	->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
    	->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
    	->where('phieudangky.pdk_diemLT', '=', '0')
        ->where('phieudangky.pdk_diemTH', '=', '0')
        ->paginate(5);
         $data['list2']= DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();;
        
    	//dd($data['list2']);
    	return view('gplx.cbsh.dspdk',$data);
    }
     public function getdau()
    {
        // $data['list'] = gplx_lophoclx::all();

        // $data['list1'] = gplx_chohoc::all();
        // $data['list2'] = gplx_loailichhoc::all();
         $data['list3']= DB::table('phieudangky')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
        ->orderBy('pdk_id','desc')
        ->where('phieudangky.pdk_diemLT', '>=', '18')
        ->where('phieudangky.pdk_diemTH', '>=', '18')
        ->paginate(5);
         $data['list2']= DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();;
        
        //dd($data['list2']);
        return view('gplx.cbsh.dspdkdau',$data);
    }
    public function getrot()
    {
        // $data['list'] = gplx_lophoclx::all();

        // $data['list1'] = gplx_chohoc::all();
        // $data['list2'] = gplx_loailichhoc::all();
         $pdkr= DB::table('phieudangky')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
        // ->where('phieudangky.pdk_diemLT', '<', '18')
        // ->where('phieudangky.pdk_diemTH', '<', '18')
        ->where('phieudangky.pdk_diemLT', '>', '0')
        ->where('phieudangky.pdk_diemTH', '>', '0')
        ->orderBy('pdk_id','desc')
        ->get();
        // ->paginate(5);
foreach ($pdkr as $user) {
    if($user->pdk_diemLT <18 || $user->pdk_diemTH<18)
                $data[]= $user->pdk_id;
            }
            //dd($data1);
    if(!empty($data))
    {
        $data['list3']=DB::table('phieudangky')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
        ->whereIn('phieudangky.pdk_id', $data)
        ->orderBy('pdk_id','desc')
        
         ->paginate(5);
    }






         $data['list2']= DB::table('cbsh_hangxe')->where('hx_id', '>', 1)->get();;
        
        //dd($data['list2']);
        return view('gplx.cbsh.dspdkrot',$data);
    }
    public function ctpdk($id)
    {
         $data['lt']= phieudangky::find($id);
        $data['list']= DB::table('gplx_banglaixe')
    	->join('cbsh_hangxe', 'gplx_banglaixe.blx_hx', '=', 'cbsh_hangxe.hx_id')
    	->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
    	 ->join('phieudangky', 'gplx_banglaixe.blx_id', '=', 'phieudangky.pdk_blx')
    	  ->where('phieudangky.pdk_id', '=', $id)
    	->get();
    	// dd($data['list']);
         $data['list3']= DB::table('phieudangky')
    	->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
    	->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
    	 ->join('gplx_banglaixe', 'phieudangky.pdk_blx', '=', 'gplx_banglaixe.blx_id')
    	  ->where('phieudangky.pdk_id', '=', $id)
    	->get();
    	// dd($data['list3']);
    	
        return view('gplx.cbsh.chitietpdk',$data);
    }
    public function ctpdkdau($id)
    {
         $data['lt']= phieudangky::find($id);
        $data['list']= DB::table('gplx_banglaixe')
        ->join('cbsh_hangxe', 'gplx_banglaixe.blx_hx', '=', 'cbsh_hangxe.hx_id')
        ->join('gplx_user', 'gplx_banglaixe.id_hv', '=', 'gplx_user.id')
         ->join('phieudangky', 'gplx_banglaixe.blx_id', '=', 'phieudangky.pdk_blx')
          ->where('phieudangky.pdk_id', '=', $id)
        ->get();
        // dd($data['list']);
         $data['list3']= DB::table('phieudangky')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
         ->join('gplx_banglaixe', 'phieudangky.pdk_blx', '=', 'gplx_banglaixe.blx_id')
          ->where('phieudangky.pdk_id', '=', $id)
        ->get();
        // dd($data['list3']);
        
        return view('gplx.cbsh.chitietpdkdau',$data);
    }
    
     public function postctpdk(AddlichhocRequest $re,$id)
    {
        $idt=$id +1 ;
        $gv = phieudangky::find($id);
        DB::table('phieudangky')
            ->where('pdk_id',$id )
            ->update(
            	['pdk_diemLT' => $re->lt]
        );
            DB::table('phieudangky')
            ->where('pdk_id',$id )
            ->update(
            	['pdk_diemTH' => $re->th]
        );
        return redirect('gplx/cbsh/dspdk'); 
    }
}

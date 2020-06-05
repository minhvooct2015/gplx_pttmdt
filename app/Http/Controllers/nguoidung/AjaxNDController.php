<?php

namespace App\Http\Controllers\nguoidung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\hangxe;
use App\Models\gplx_lichhoc;
use App\Models\gplx_lophoclx;
use DB;
class AjaxNDController extends Controller
{
    public function layhx($hx)
    {
    	// $chohoc = DB::table('cbsh_lichhoc')
    	// ->join('cbsh_chohoc', 'cbsh_lichhoc.id_ch', '=', 'cbsh_chohoc.ch_id')
    	// ->join('cbsh_lophoclx', 'cbsh_lichhoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
    	// // ->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')
    	// ->where('cbsh_lophoclx.lhlx_hx', '=', $hx)->select('cbsh_chohoc.ch_ten', 'cbsh_chohoc.ch_id')->distinct()
    	// ->get();
        // $collection = collect($chohoc);

        // $a1 = $collection->unique('cbsh_lichhoc.id_ch')->values()->all(); 
    	   // dd($chohoc);
        // $chohoc = DB::table('cbsh_lichhoc')
        // ->join('cbsh_chohoc', 'cbsh_lichhoc.id_ch', '=', 'cbsh_chohoc.ch_id')
        // ->join('cbsh_lophoclx', 'cbsh_lichhoc.id_lhlx', '=', 'cbsh_lophoclx.lhlx_id')
        // // ->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')
        // ->where('cbsh_lophoclx.lhlx_hx', '=', $hx)
        // ->get();
        $chohoc = DB::table('cbsh_lophoclx')
        ->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')
        ->where('cbsh_lophoclx.lhlx_hx', '=', $hx)
        ->get();
        //  $chohoc= DB::table('cbsh_lophoclx')
        // ->join('cbsh_hangxe', 'cbsh_lophoclx.lhlx_hx', '=', 'cbsh_hangxe.hx_id')

        // ->get();
    	foreach($chohoc as $nt)
    	{
		echo "	<option value='".$nt->lhlx_id."'>".$nt->lhlx_ten ." </option>";
		}
    }
}
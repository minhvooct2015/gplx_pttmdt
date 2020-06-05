<?php

namespace App\Http\Controllers\cbsh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\gplx_lichthi;
use App\Models\phieudangky;
use DB;
class AjaxNamthiController extends Controller
{
    //
     public function laynamthi($namthi)
    {
    	$ngaythi = gplx_lichthi::where('lt_ngaythi', 'LIKE', '%' . $namthi . '%')->orderBy('lt_id','desc')->get();
    	foreach($ngaythi as $nt)
    	{
		echo "	<option value='".$nt->lt_id."'>".$nt->lt_ngaythi ."</option>";
		}
    }
    public function pdkhx($id)
    {
    	// $ngaythi = gplx_lichthi::where('pdk_hx', '=', $id)->orderBy('pdk_id','desc')->get();
    	
    	$ngaythi1= DB::table('phieudangky')
    	
    	->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
    	->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
    	->where('pdk_hx', '=', $id)
        ->orderBy('pdk_id','desc')
        ->where('phieudangky.pdk_diemLT', '=', '0')
        ->where('phieudangky.pdk_diemTH', '=', '0')
        ->get();
    	//dd($ngaythi1);
    	foreach($ngaythi1 as $hx)
    	{
            if($hx->pdk_tinhtrangHP==1) 
            {
                echo "  <tr>
                                <td>$hx->hoten</td>
                                <td>$hx->cmnd</td>
                                <td>$hx->hx_ten</td>
                                <td>
                                        <a href='http://127.0.0.1:8000/gplx/cbsh/ctpdk/$hx->pdk_id' class='btn btn-warning'><span ></span> Chấm điểm</a>
                                        
                                    </td>
                                    
                                </tr>";
            }
            else
                 echo "  <tr>
                                <td>$hx->hoten</td>
                                <td>$hx->cmnd</td>
                                <td>$hx->hx_ten</td>
                                ";
                echo "  <td style='color:red'>
                                Học viên chưa hoàn thành học phí       
                                        
                    </td> ";
		
		}
    }
     public function pdkhxdau($id)
    {
        // $ngaythi = gplx_lichthi::where('pdk_hx', '=', $id)->orderBy('pdk_id','desc')->get();
        
        $ngaythi1= DB::table('phieudangky')
        
        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->where('pdk_hx', '=', $id)
        ->orderBy('pdk_id','desc')
        ->where('phieudangky.pdk_diemLT', '>=', '18')
        ->where('phieudangky.pdk_diemTH', '>=', '18')
        ->get();
        //dd($ngaythi1);
         
        foreach($ngaythi1 as $hx)
        {
            if($hx->pdk_tinhtrangHP==1) 
            {
                echo "  <tr>
                                <td>$hx->hoten</td>
                                <td>$hx->cmnd</td>
                                <td>$hx->hx_ten</td>
                                <td>
                                        <a href='http://127.0.0.1:8000/gplx/cbsh/ctpdk/$hx->pdk_id' class='btn btn-warning'><span ></span> Chấm điểm</a>
                                        
                                    </td>
                                    
                                </tr>";
            }
            else
                echo "  <td style='color:red'>
                                Học viên chưa hoàn thành học phí       
                                        
                    </td> ";
        
        }
    }
         public function pdkhxrot($id)
    {
        // $ngaythi = gplx_lichthi::where('pdk_hx', '=', $id)->orderBy('pdk_id','desc')->get();
        
        $ngaythi1= DB::table('phieudangky')
        
        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
        ->join('gplx_user', 'phieudangky.pdk_hv', '=', 'gplx_user.id')
        ->where('pdk_hx', '=', $id)
        ->orderBy('pdk_id','desc')
        ->where('phieudangky.pdk_diemLT', '<', '18')
        ->where('phieudangky.pdk_diemTH', '<', '18')
        ->where('phieudangky.pdk_diemLT', '>', '0')
        ->where('phieudangky.pdk_diemTH', '>', '0')
        ->get();
        //dd($ngaythi1);
         
        foreach($ngaythi1 as $hx)
        {
            
                echo "  <tr>
                                <td>$hx->hoten</td>
                                <td>$hx->cmnd</td>
                                <td>$hx->hx_ten</td>
                                <td>
                                        <a href='http://127.0.0.1:8000/gplx/cbsh/ctpdk/$hx->pdk_id' class='btn btn-warning'><span ></span> Chấm điểm</a>
                                        
                                    </td>
                                    
                                </tr>";
            
        
        }
    }
}

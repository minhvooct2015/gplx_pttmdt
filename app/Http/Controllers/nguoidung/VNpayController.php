<?php

namespace App\Http\Controllers\nguoidung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\phieudangky;
use App\Models\gplx_chothi;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
class VNpayController extends Controller
{
    //
     public function getvn($id)
    {
        $data['lt']= DB::table('phieudangky')
        ->join('cbsh_hangxe', 'phieudangky.pdk_hx', '=', 'cbsh_hangxe.hx_id')
        ->where('phieudangky.pdk_id', '=', $id)
        ->get();
        // dd($data['lt']);
        //return view('gplx.nguoidung.vnpay',$data);
        $data['ban']=DB::table('banner')->where('ban_trangthai','=',1 )->get();
        return view('gplx.nguoidung.vnpay',$data);
    }
    // public function ketqua()
    // {

    //     return view('gplx.nguoidung.ketquavnpay');
    // }
    public function create(Request $request,$id)
    {
        session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "6S7S6MCX"; //Mã website tại VNPAY 
        $vnp_HashSecret = "HNAZYJVVCRYLGMKMZGCKZLAAEMIHECGD"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/gplx/nguoidung/vnpay1";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->input('amount') * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
         DB::table('phieudangky')
            ->where('pdk_id',$id )
            ->update(
                ['pdk_tinhtrangHP' => '1']

                );
        return redirect($vnp_Url);








    }
    public function return(Request $request)
{
    $url = session('url_prev','/');
    if($request->vnp_ResponseCode == "00") {
       
        // return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');        
        Alert::success('Bạn đã thanh toán học phí thành công', 'Success Message'); 
        return redirect('gplx/nguoidung/dspdk'); 
    }
    session()->forget('url_prev');
    alert()->error('Post Created', 'Lỗi trong quá trình thanh toán dịch vụ'); 
    return redirect('gplx/nguoidung/dspdk'); 
}


}

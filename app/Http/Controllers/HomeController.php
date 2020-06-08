<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use RealRashid\SweetAlert\Facades\Alert;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function maintenance_down(){
        Artisan::call('down');
        Alert::success('Bạn đang bật bảo trì hệ thống', 'Success Message'); 
        return redirect()->back();
    }
    public function maintenance_up(){
        Artisan::call('up');
        Alert::success('Bạn đang tắt bảo trì hệ thống', 'Success Message'); 
        return redirect()->back();
    }
}
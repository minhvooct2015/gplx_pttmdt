@extends('gplx.cbsh.master')
@section('title','Chi tiết phiếu đăng ký')
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chi tiết phiếu đăng ký</h1>
            </div>
            
        </div><!--/.row-->
        
        <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Chi tiết phiếu đăng ký </div>
                        <!-- <div class="col-lg-2 col-lg-offset-9" >
                           <h1> <a href="{{asset('gplx/cbsh/themgiaovien')}}" class=" form-control btn btn-primary ">THÊM</a>
                            </h1>
                        </div> -->
              
                    @foreach($list3 as $hx)
                    <div class="panel-body">
                         <div >
                            <table class="table " border="0" id="vientable">
                                <thead>
                                    <tr id="vientabletr">
                                      <th  style="width:15%">Họ và tên</th>
                                       <td>{{$hx->hoten}}</td>
                                    </tr>
                                    <tr >
                                      <th  style="width:15%">Ngày sinh</th>
                                       <td>{{$hx->ngaysinh}}</td>
                                    </tr>
                                    <tr >
                                      <th  style="width:15%">Nơi đăng ký hộ khẩu</th>
                                       <td>{{$hx->hokhau}}</td>
                                    </tr>
                                    <tr >
                                      <th  style="width:15%">Nơi cư trú</th>
                                       <td>{{$hx->noio}}</td>
                                    </tr>
                                    <tr >
                                      <th  style="width:15%">Số điện thoaị</th>
                                       <td>{{$hx->sodienthoai}}</td>
                                    </tr>
                                    <tr >
                                      <th style="width:15%">Chứng minh nhân dân</th>
                                       <td>{{$hx->cmnd}}</td>
                                    </tr>
                                    <tr >
                                      <th  style="width:15%">Giấy phép lái xe đăng ký</th>
                                       <td>{{$hx->hx_ten}}</td>
                                    </tr>
                                     @endforeach

                                      @foreach($list as $hx)
                                    <tr >
                                      <th  style="width:15%">Giấy phép lái xe đã có hạng</th>
                                       <td>{{$hx->hx_ten}} </td>
                                    </tr>

                                     @endforeach
                                      @foreach($list3 as $hx)
                                    <tr >
                                      <th  style="width:15%">Ảnh giấy khám sức khỏe mặt trước</th>
                                       <td><img width="100px" height="100px" src="{{asset('../storage/app/anhPDK/'.$hx->pdk_anhsk1)}}" class="thumbnail"></td>
                                    </tr>
                                     <tr >
                                      <th  style="width:15%">Ảnh giấy khám sức khỏe mặt sau</th>
                                       <td><img width="100px" height="100px" src="{{asset('../storage/app/anhPDK/'.$hx->pdk_anhsk2)}}" class="thumbnail"></td>
                                    </tr><tr >
                                      <th  style="width:15%">Ảnh 3x4</th>
                                       <td><img width="100px" height="100px" src="{{asset('../storage/app/anhPDK/'.$hx->pdk_anh34)}}" class="thumbnail"></td>
                                    </tr><tr >
                                      <th  style="width:15%">Ảnh giấy chứng minh nhân dân mặt trước</th>
                                       <td><img width="100px" height="100px" src="{{asset('../storage/app/anhPDK/'.$hx->pdk_anhcmnd1)}}" class="thumbnail"></td>
                                    </tr><tr >
                                      <th  style="width:15%">Ảnh giấy chứng minh nhân dân mặt sau</th>
                                       <td><img width="100px" height="100px" src="{{asset('../storage/app/anhPDK/'.$hx->pdk_anhcmnd2)}}" class="thumbnail"></td>
                                    </tr>
                                    <tr >
                                      <th  style="width:15%">Điểm thực hành</th>
                                       <td>{{$hx->pdk_diemTH}}</td>
                                    </tr>
                                    <tr >
                                      <th  style="width:15%">Điểm lý thuyết</th>
                                       <td>{{$hx->pdk_diemLT}}</td>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                               
                                  @endforeach
                                </tbody>
                                {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                            </table>
                        <div class="panel-body">
                        
                       <!--  <form role="form" method="post" enctype="multipart/form-data">  
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Điểm lí thuyết</label>
                                        <input  type="text" name="lt" class="form-control" value="">
                                    </div>
                                    
                                    <div class="form-group" >
                                        <label>Điểm thực hành</label>
                                        <input  type="text" name="th" class="form-control">
                                    </div>
                                   
                                    
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <input type="reset" value="Làm mới" class="btn btn-danger">
                                </div>
                            </div>
                            {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                        </form> -->
                        <div class="clearfix"></div>
                    </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->
        
@stop   
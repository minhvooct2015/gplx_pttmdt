@extends('gplx.cbsh.master')
@section('title','Danh sách giáo viên')
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách giáo viên</h1>
            </div>
            
        </div><!--/.row-->
        
        <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách giáo viên</div>
                        <div class="col-lg-2 col-lg-offset-9" >
                           <h1> <a href="{{asset('gplx/cbsh/themgiaovien')}}" class=" form-control btn btn-primary ">THÊM</a>
                            </h1>
                        </div>
                
                   
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                      <th style="width:15%">Họ và tên</th>
                                      <th style="width:20%" >Hình ảnh</th>
                                      <th>Số điện thoại</th>
                                      <th > Địa chỉ</th>
                                      <th>Trình độ</th>
                                      <th>Email</th>
                                      <th style="width:20%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($gvlist as $hx)
                                <tr>
                                <td>{{$hx->gv_ten}}</td>
                                <td>
                                <img width="100px" src="{{asset('../storage/app/anhGV/'.$hx->gv_anh)}}" class="thumbnail">
                                </td>
                                <td>{{$hx->gv_sdt}}</td>
                                <td>{{$hx->gv_diachi}}</td>
                                <td>{{$hx->gv_trinhdo}}</td>
                                <td>{{$hx->gv_email}}</td>
                                    <td>
                                        <a href="{{asset('/gplx/cbsh/suagv/'.$hx->gv_id)}}" class="btn btn-warning"><!-- <span class="glyphicon glyphicon-edit"></span> --> Sửa</a>
                                        <a href="{{asset('/gplx/cbsh/xoagv/'.$hx->gv_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><!-- <span class="glyphicon glyphicon-trash"></span>  -->Xóa</a>
                                    </td>
                                </tr>
                                  @endforeach
                                </tbody>
                                {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->
        
@stop   
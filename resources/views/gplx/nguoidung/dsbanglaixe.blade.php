@extends('gplx.nguoidung.masterfront')
@section('title','Trang chủ')
@section('main')
 <!-- Page Content -->
<div class="col-md-9">
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;"> Danh sách bằng lái xe</h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
                <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                        <div class="col-lg-4 col-lg-offset-8" >
                           <h1> <a href="{{asset('gplx/nguoidung/themblx')}}" class=" form-control btn btn-primary ">Cập nhật bằng lái xe đã có</a>
                            </h1>
                        </div>
                
                   
                    <div class="panel-body">
                        <div class="bootstrap-table">
                    


                                  
                                    
                                   
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                      <th >Hạng bằng lái xe</th>
                                      <th >Bằng lái xe số</th>
                                      <th >Ngày cấp</th>
                                      <th>Nơi cấp</th>
                                      
                                      <th style="width:20%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    

                                  @foreach($list as $hx)
                                <tr>
                                <td>{{$hx->hx_ten}}</td>
                                <td>{{$hx->blx_so}}</td>
                                <td>{{$hx->blx_ngaycap}}</td>
                                <td>{{$hx->blx_noicap}}</td>
                                    <td>
                                        <a href="{{asset('/gplx/nguoidung/suablx/'.$hx->blx_id)}}" class="btn btn-warning">Sửa</a>
                                        <a href="{{asset('/gplx/nguoidung/xoablx/'.$hx->blx_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"> Xóa</a>
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
                {{$list->links() }}
            </div>
        </div><!--/.row-->
    </div>
    <!-- end Page Content -->
@stop
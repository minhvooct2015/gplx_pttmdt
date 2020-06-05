@extends('gplx.nguoidung.masterfront')
@section('title','Trang chủ')
@section('main')
 <!-- Page Content -->
<div class="col-md-9">
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;"> Danh sách phiếu đăng ký</h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
                <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                        <div class="col-lg-2 col-lg-offset-9" >
                           <h1> <a href="{{asset('gplx/nguoidung/thempdk')}}" class=" form-control btn btn-primary ">Đăng ký học</a>
                            </h1>
                        </div>
               
                
                   
                    <div class="panel-body">
                        @include('sweetalert::alert')
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                      
                                      <th >Hạng xe đăng ký</th>
                                      <th >Học phí</th>
                                      <th>Tình trạng học phí</th>
                                      
                                      <th ">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($list as $hx)
                                <tr>
                                <td>{{$hx->hx_ten}}</td>
                                <td>{{number_format($hx->hx_giatien,0,',','.')}}</td>
                                <td style="color:red">
                                    @if($hx->pdk_tinhtrangHP==0)  
                                    {{ ('Chưa đóng') }}
                                    @else
                                    {{ ('Đã đóng') }}
                                     @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    
                                    <p>{!! $message !!}</p>
                                </div>
                               
                                @endif
                                    @endif

                                </td>
                                    <td>
                                       <!--  <a href="{{asset('/gplx/nguoidung/suablx/'.$hx->pdk_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a> -->
                                        
                                        @if($hx->pdk_tinhtrangHP==0)  
                                        <a href="{{asset('/gplx/nguoidung/vnpay/'.$hx->pdk_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Đóng tiền học</a>
                                        @endif
                                        <a href="{{asset('/gplx/nguoidung/chitietpdk/'.$hx->pdk_id)}}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Xem chi tiết</a>
                                        <a href="{{asset('/gplx/nguoidung/xoapdk/'.$hx->pdk_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
                {{ $list->links() }}
            </div>
        </div><!--/.row-->
    </div>
    <!-- end Page Content -->
@stop
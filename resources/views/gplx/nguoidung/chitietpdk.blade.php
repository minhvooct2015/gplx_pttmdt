@extends('gplx.nguoidung.masterfront')
@section('title','Trang chủ')
@section('main')
 <!-- Page Content -->
<div class="col-md-9">
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;"> Chi tiết phiếu đăng ký</h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
          <div class="row">
            <div class="col-xs-12 col-md-10 col-lg-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Chi tiết phiếu đăng ký
                        </div>
                        <div class="panel-body">
                            @foreach($list as $hx)
                            @endforeach
                           <table border="1" class="table table-bordered">
                               <tr>
                                   
                                   <th>
                                       Hạng xe đăng ký
                                   </th>
                                   <td>
                                      {{$hx->hx_ten}}
                                   </td>
                               </tr>
                               <tr>
                                   
                                   <th>
                                       Tình trạng lệ phí thi
                                   </th>
                                   <td style="color:red">
                                    @if($hx->pdk_tinhtrangHP==0)  
                                    {{ ('Chưa đóng') }}
                                    @else
                                    {{ ('Đã đóng') }} 
                                    <br> Số tiền: {{number_format($hx->hx_giatien,0,',','.')}} VND
                                    @endif

                                </td>
                               </tr>
                               <tr>
                                   
                                   <th>
                                       Kết quả thi Lý Thuyết
                                   </th>
                                  <td>
                                    @if($hx->pdk_diemLT==0)  
                                    {{ ('Chưa có điểm') }}
                                    @else
                                    {{ $hx->pdk_diemLT}}
                                    @endif

                                </td>
                               </tr>
                               <tr>
                                   
                                   <th>
                                       Kết quả thi Thực Hành
                                   </th>
                                   <td>
                                    @if($hx->pdk_diemTH==0)  
                                    {{ ('Chưa có điểm') }}
                                    @else
                                    {{ $hx->pdk_diemTH}}
                                    @endif
                                   </td>
                               </tr>
                               <tr>
                                   
                                   <th>
                                       Kết quả 
                                   </th>
                                   <td style="color:red">
                                       @if($hx->pdk_diemTH >=18 && $hx->pdk_diemLT >=18 )  
                                    {{ ('Đậu') }}
                                    @elseif($hx->pdk_diemTH ==0 && $hx->pdk_diemLT ==0 )
                                    {{ ('')}}
                                    
                                     @else
                                    {{ ('Trượt')}}


                                    @endif
                                   </td>
                               </tr>




                             
                           </table>
                        </div>
                    </div>
            </div>
            <div class="col-xs-12 col-md-10 col-lg-10">
                <div class="panel panel-primary">
                    <div class="panel-heading">Lịch học</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <th >Ngày học</th>
                                      <th >Giờ học</th>
                                      <th>Chỗ học</th>
                                       <th>Địa chỉ</th>
                                      <th>Loại lịch học</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                  @foreach($list as $hx)
                                <tr>
                                <td>{{$hx->lh_ngay}}</td>
                                <td>{{$hx->lh_giohocbatdau}}</td>
                                <td>{{$hx->ch_ten}}</td>
                                <td>{{$hx->ch_diachi}}</td>
                                <td>{{$hx->llh_ten}}</td>
                                
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
            <div class="col-xs-12 col-md-10 col-lg-10">
                <div class="panel panel-primary">
                    <div class="panel-heading">Lịch thi</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <th >Ngày thi</th>
                                      <th >Giờ thi</th>
                                      <th>Chỗ thi</th>
                                      <th>Địa chỉ</th>
                                      <th>Hình thức thi</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                  @foreach($list1 as $hx)
                                <tr>
                                <td>{{$hx->lt_ngaythi}}</td>
                                <td>{{$hx->lt_giothi}}</td>
                                <td>{{$hx->cth_ten}}</td>
                                <td>{{$hx->cth_diachi}}</td>
                                 <td>{{$hx->llh_ten}}</td>
                                
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
    </div>
    <!-- end Page Content -->
@stop
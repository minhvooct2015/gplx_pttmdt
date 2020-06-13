@extends('gplx.cbsh.master')
@section('title','Danh sách banner')
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách banner</h1>
            </div>
            
        </div><!--/.row-->
        
        <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách banner</div>
                        <div class="col-lg-2 col-lg-offset-9" >
                           <h1> <a href="{{asset('gplx/cbsh/banner')}}" class=" form-control btn btn-primary ">THÊM</a>
                            </h1>
                        </div>
                
                   
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                      <th style="width:15%">Banner ngang 1</th>
                                      <th  >Banner ngang 2</th>
                                      <th>Banner dọc 1</th>
                                      <th>Banner dọc 2</th>
                                      <th>Banner dọc 3</th>
                                     <th>Banner dọc 4</th>

                                      <th style="width:20%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                   @foreach($list as $hx)
                                <tr>
                                <td>
                                <img width="100px" src="{{asset('../storage/app/anhBanner/'.$hx->ban_ngang1)}}" class="thumbnail">
                                </td>
                                <td>
                                <img width="100px" src="{{asset('../storage/app/anhBanner/'.$hx->ban_ngang2)}}" class="thumbnail">
                                </td>
                                <td>
                                <img width="100px" src="{{asset('../storage/app/anhBanner/'.$hx->ban_trai1)}}" class="thumbnail">
                                </td>
                                <td>
                                <img width="100px" src="{{asset('../storage/app/anhBanner/'.$hx->ban_trai2)}}" class="thumbnail">
                                </td>
                                <td>
                                <img width="100px" src="{{asset('../storage/app/anhBanner/'.$hx->ban_trai3)}}" class="thumbnail">
                                </td>
                                <td>
                                <img width="100px" src="{{asset('../storage/app/anhBanner/'.$hx->ban_trai4)}}" class="thumbnail">
                                </td>
                                    <td>
                                        @if($hx->ban_trangthai==0)
                                        <p>
                                        <a href="{{asset('/gplx/cbsh/Showbanner/'.$hx->ban_id)}}" class="btn btn-success"> Hiển thị</a>
                                        </p>
                                        @else
                                        
                                            <b class="btn btn-success" style="background-color:#FF6347 ; color:#F0F8FF"> Đang được sử dụng</b>
                                        
                                        @endif
                                        <a href="{{asset('/gplx/cbsh/suabanner/'.$hx->ban_id)}}" class="btn btn-warning"> Sửa</a>
                                        <a href="{{asset('/gplx/cbsh/xoabanner/'.$hx->ban_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"> Xóa</a>
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
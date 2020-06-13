@extends('gplx.cbsh.master')
@section('title','Danh sách mô tả hạng xe')
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách mô tả hạng xe</h1>
            </div>
            
        </div><!--/.row-->
        
        <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách mô tả hạng xe </div>
                        <div class="col-lg-2 col-lg-offset-9" >
                           <h1> <a href="{{asset('gplx/cbsh/themmota')}}" class=" form-control btn btn-primary ">THÊM</a>
                            </h1>
                        </div>
                
                   
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                      <th style="width:15%">Tên hạng xe</th>
                                      <th style="width:20%" >Hình ảnh</th>
                                      <th>Mô tả chi tiết</th>
                                     <th style="width:20%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($gvlist as $hx)
                                <tr>
                                <td>{{$hx->hx_ten}}</td>
                                <td>
                                <img width="100px" src="{{asset('../storage/app/anhHX/'.$hx->mthx_anh)}}" class="thumbnail">
                                </td>
                                <td>{!!$hx->mthx_chitiet!!}</td>
                                <td>
                                        <a href="{{asset('/gplx/cbsh/suamthangxe/'.$hx->mthx_id)}}" class="btn btn-warning"> Sửa</a>
                                        <a href="{{asset('/gplx/cbsh/xoamthangxe/'.$hx->mthx_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"> Xóa</a>
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
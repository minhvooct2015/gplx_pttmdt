@extends('gplx.nguoidung.masterfront')
@section('title','Trang chủ')
@section('main')
 <!-- Page Content -->
<div class="col-md-9">
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;"> Sửa bằng lái xe</h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
                     <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>bằng lái xe</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form role="form" method="post" enctype="multipart/form-data">  
                            <div class="form-group">
                                <label>Bằng lái xe có hạng </label>
                                <select name="hx" class="form-control">
                                   <option value="" disabled selected>Chọn hạng xe</option>
                                   @foreach($list as $cate)

                                            <option value="{{$cate->hx_id}}" @if($bl->blx_hx==$cate->hx_id)  selected @endif>{{$cate->hx_ten}}</option>
                                            @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bằng lái xe số </label>
                                <input required name="so"  class="form-control input--style-3 js-datepicker" placeholder="Số giấy phép lái xe..." type="text" value="{{$bl->blx_so}}" >
                            </div>
                            <div class="form-group">
                                <label>Ngày cấp </label>
                                <input required name="ngc"  class="form-control input--style-3 js-datepicker" placeholder="Ngày cấp..." type="date" value="{{$bl->blx_ngaycap}}">
                            </div>
                            <div class="form-group">
                                <label>Nơi cấp </label>
                                <input class="form-control" name="nc" placeholder="Nơi cấp" value="{{$bl->blx_noicap}}"/>
                            </div>
                           
                            <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                    <a href="{{asset('gplx/nguoidung/dsbanglaixe')}}"  class=" btn btn-danger">Hủy bỏ</a>
                                
                            
                        <form>
                            {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                    </div>
                </div>
                <!-- /.row -->
    </div>
    <!-- end Page Content -->
@stop
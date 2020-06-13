@extends('gplx.nguoidung.masterfront')
@section('title','Trang chủ')
@section('main')
 <!-- Page Content -->
<div class="col-md-9">
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Bằng lái xe</h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
                     <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>bằng lái xe</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form role="form" method="post" enctype="multipart/form-data">  
                            @include('errors.note')
                            <div class="form-group">
                                <label>Bằng lái xe có hạng </label>
                                <select required name="hx" class="form-control">
                                   <option value="" disabled selected>Chọn hạng xe</option>
                                   @foreach($list1 as $nt)
                                    <option value="{{$nt->hx_id}}">{{$nt->hx_ten}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bằng lái xe số </label>
                                <input required required name="so"  class="form-control input--style-3 js-datepicker" placeholder="Số giấy phép lái xe..." type="text" >
                            </div>
                            <div class="form-group">
                                <label>Ngày cấp </label>
                                <input required required name="ngc" id="theDate" class="form-control input--style-3 js-datepicker" placeholder="Ngày cấp..." type="date" >
                            </div>
                            <div class="form-group">
                                <label>Nơi cấp </label>
                                <input required class="form-control" name="nc" placeholder="Nơi cấp" />
                            </div>
                           
                            <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <input type="reset" value="Làm mới" class="btn btn-danger">
                        <form>
                            {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                    </div>
                </div>
                <!-- /.row -->
    </div>
    <!-- end Page Content -->
@stop
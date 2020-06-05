@extends('gplx.nguoidung.masterfront')
@section('title','Sửa mô tả hạng xe')
@section('main')
 <!-- Page Content -->
<div class="col-md-9">
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;"> Sửa mô tả hạng xe</h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
                     <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>mô tả hạng xe</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form role="form" method="post" enctype="multipart/form-data">  
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Hạng xe</label>
                                        <select name="hx" id="lth" class="form-control">
                                            <option value="" disabled selected>Chọn hạng xe</option>
                                            @foreach($list1 as $nt)
                                            <option value="{{$nt->hx_id}}">{{$nt->hx_ten}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label>Ảnh minh họa</label>
                                        <input  id="img" type="file" name="img" class="form-control " onchange="changeImg(this)">
                                       <!--  <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png"> -->
                                    </div>
                                    <div class="form-group" >
                                        <label>Nội dung mô tả</label>
                                        <textarea class=" form-control ckeditor"   name="mota" ></textarea >
                                    </div>
                                    
                                    
                                     <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                    <a href="{{asset('gplx/nguoidung/dsbanglaixe')}}"  class=" btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                            {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                        </form>
                            
                    </div>
                </div>
                <!-- /.row -->
    </div>
    <!-- end Page Content -->
@stop
@extends('gplx.cbsh.master')
@section('title','Sửa mô tả hạng xe')
@section('main')
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa mô tả hạng xe</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Sửa mô tả hạng xe
                        </div>
                        <div class="panel-body">
                            @include('errors.note')
                         <form role="form" method="post" enctype="multipart/form-data">  
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Hạng xe</label>
                                        <select name="hx" id="lth" class="form-control">
                                            <option value="" disabled selected>Chọn hạng xe</option>
                                            @foreach($list1 as $nt)
                                            <option value="{{$nt->hx_id}}" @if($lt->id_hx==$nt->hx_id)  selected @endif>{{$nt->hx_ten}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label>Ảnh minh họa</label>
                                        <input  id="img" type="file" name="img" class="form-control " onchange="changeImg(this)">
                                       <img width="100px" src="{{asset('../storage/app/anhHX/'.$lt->mthx_anh)}}" class="thumbnail">
                                    </div>
                                    <div class="form-group" >
                                        <label>Nội dung mô tả</label>
                                        <textarea class=" form-control ckeditor"   name="mota" >
                                            {{$lt->mthx_chitiet}}
                                        </textarea >
                                    </div>
                                    
                                    
                                     <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                                    <a href="{{asset('gplx/cbsh/dsmota')}}"  class=" btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                            {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                        </form>
                            
                        </div>
                    </div>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->
@stop   
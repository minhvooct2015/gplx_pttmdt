@extends('gplx.cbsh.master')
@section('title','Sửa hãng xe')
@section('main')


<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hãng xe
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @include('errors.note')
                        <form role="form" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">                     <label>Tên hạng xe</label>
                                <input value="{{$hx->hx_ten}}" required class="form-control" name="name" placeholder="" />
                            </div>
                            
                            <button type="submit" class=" form-control btn btn-primary">Sửa</button>
                            <div class="form-group">                     
                                <a href="http://127.0.0.1:8000/gplx/cbsh/dshangxe" class=" form-control btn btn-danger">Hủy</a>
                            </div>
                            
                        </form>

                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop
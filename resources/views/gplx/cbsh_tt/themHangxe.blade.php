@extends('gplx.cbsh.master')
@section('title','Thêm hạng xe')
@section('main')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 clatruepage-header">Hạng xe
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @include('errors.note')
                        <form role="form" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Tên hạng xe</label>
                                <input required class="form-control" name="name" placeholder="Vui lòng nhập tên hạng xe cần thêm" />
                            </div>
                            
                            <button type="submit" class=" form-control btn btn-primary">Thêm</button>
                            <!-- <button type="reset" class="btn btn-default">Làm mới</button> -->
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
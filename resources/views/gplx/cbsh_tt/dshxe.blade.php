 @extends('gplx.cbsh.master')
@section('title','Danh sách hangxe')
@section('main')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hạng xe
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <a href="#" class="btn btn-danger">Thêm hãng xe</a>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên hạng xe</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hxlist as $hx)
                            <tr class="odd gradeX" align="center">
                                <td>{{$hx->hx_id}}</td>
                                <td>{{$hx->hx_ten}}</td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{asset('http://127.0.0.1:8000/gplx/cbsh/suahangxe/'.$hx->hx_id)}}"> Sửa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{asset('http://127.0.0.1:8000/gplx/cbsh/xoahangxe/'.$hx->hx_id)}}">Xóa</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                        {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop
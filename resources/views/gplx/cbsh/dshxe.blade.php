@extends('gplx.cbsh.master')
@section('title','Danh sách hạng xe')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách hạng xe</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm hạng xe
						</div>
						<div class="panel-body">
							 @include('errors.note')
							 <form role="form" method="post" enctype="multipart/form-data">
							 	 {{csrf_field()}}
							<div class="form-group">
								<label>Tên hạng xe:</label>
    							<input required type="text" name="name" class="form-control" placeholder="Tên hạng xe...">
							</div>
							<div class="form-group">
								<label>Giá tiền:</label>
    							<input  required type="number" name="gia" class="form-control" placeholder="Giá tiền..." >
							</div>
							<div class="form-group">
    							 <button type="submit" class=" form-control btn btn-primary">Thêm</button>
							</div>
							</form>
							  <input type="hidden" name="_token" value="{{csrf_token() }}">
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách hạng xe</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên hạng xe</th>
					                  <th>Giá tiền</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		 @foreach($hxlist as $hx)
								<tr>

                                <td>{{$hx->hx_ten}}</td>
                                <td>{{number_format($hx->hx_giatien,0,',','.')}} VND</td>
									<td>
			                    		<a href="{{asset('/gplx/cbsh/suahangxe/'.$hx->hx_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('/gplx/cbsh/xoahangxe/'.$hx->hx_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
	</div>	<!--/.main-->
@stop	
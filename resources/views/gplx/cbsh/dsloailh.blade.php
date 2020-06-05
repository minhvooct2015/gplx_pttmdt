@extends('gplx.cbsh.master')
@section('title','Danh sách loại lịch học')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách loại lịch học</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm chỗ học
						</div>
						<div class="panel-body">
							 @include('errors.note')
							 <form role="form" method="post" enctype="multipart/form-data">
							 	 {{csrf_field()}}
							<div class="form-group">
								<label>Tên loại lịch:</label>
    							<input required type="text" name="name" class="form-control" placeholder="Tên chỗ học...">
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
					<div class="panel-heading">Danh sách loại lịch học </div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên </th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach($llhlist as $hx)
								<tr>
                                <td>{{$hx->llh_ten}}</td>
									<td>
			                    		<a href="{{asset('/gplx/cbsh/suallh/'.$hx->llh_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('/gplx/cbsh/xoallh/'.$hx->llh_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
@extends('gplx.cbsh.master')
@section('title','Danh sách lịch thi')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách lịch thi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm lịch thi
						</div>
						<div class="panel-body">
							 @include('errors.note')
							 @if ($message = Session::get('success'))
                                <div class="alert alert-danger">
                                    
                                    <p>{!! $message !!}</p>
                                </div>
                                <?php Session::forget('success');?>
                                @endif
							 <form role="form" method="post" enctype="multipart/form-data">
							 	 {{csrf_field()}}
							<div class="form-group">
								<label>Ngày thi:</label>
    							<input required name="ngt" class="form-control datepicker" placeholder="Ngày thi..." type="text" >
							</div>
							<div class="form-group">
								<label>Giờ thi:</label>
    							<input required class="form-control timepicker"type="time" name="gt" placeholder="Giờ thi...">
							</div>
							<div class="form-group">
								<label>Loại thi:</label>
    							<select  name="llt" class="form-control">
    										<option value="" disabled selected>Chọn loại thi</option>
											@foreach($list1 as $cate)
											<option value="{{$cate->llh_id}}">{{$cate->llh_ten}}</option>
											@endforeach
					                    </select>
							</div>
							<div class="form-group" >
										<label>Chỗ thi</label>
										<select  name="dc" class="form-control">
											<option value="" disabled selected>Chọn  thi</option>
											@foreach($list as $cate)
											<option value="{{$cate->cth_id}}">{{$cate->cth_ten}}</option>
											@endforeach
					                    </select>
									</div>
							<div class="form-group">
    							 <button type="submit" class=" form-control btn btn-primary">Thêm</button>
							</div>
							</form>
							  <input type="hidden" name="_token" value="{{csrf_token() }}">
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách lịch thi </div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Ngày thi</th>
					                   <th>Giờ thi</th>
					                   <th style="width:25%">Chỗ thi</th>
					                   <th style="width:15%">Hình thức thi</th>
					                  <th >Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		 @foreach($hxlist as $hx)
								<tr>

									<td>{{$hx->lt_ngaythi}}</td>
                                	<td>{{$hx->lt_giothi}}</td>
                                	<td>{{$hx->cth_ten}}</td>
                                	<td>{{$hx->llh_ten}}</td>
									<td>
			                    		<a href="{{asset('/gplx/cbsh/sualth/'.$hx->lt_id)}}" class="btn btn-warning"> Sửa</a>
			                    		<a href="{{asset('/gplx/cbsh/xoalth/'.$hx->lt_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">Xóa</a>
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
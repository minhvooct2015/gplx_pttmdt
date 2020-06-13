@extends('gplx.cbsh.master')
@section('title','Danh sách lớp học')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách lớp học</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm lớp học
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
								<label>Tên lớp học</label>
    							<input required type="text" name="name" class="form-control" placeholder="Tên lớp học...">
							</div>
							<div class="form-group">
								<label>Hạng xe</label>
    							<select required name="hx" id="lth" class="form-control">
    										<option value="" disabled selected>Chọn hạng xe</option>
											@foreach($list1 as $nt)
											<option value="{{$nt->hx_id}}">{{$nt->hx_ten}}</option>
											@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Giáo viên</label>
    							<select required name="gv" id="lth" class="form-control">
    										<option value="" disabled selected>Chọn giáo viên</option>
											@foreach($list as $nt)
											<option value="{{$nt->gv_id}}">{{$nt->gv_ten}}</option>
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
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách lớp học </div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                	<th>Tên lớp học</th>
					                	<th>Tên giáo viên</th>
					                  <th>Tên hạng xe</th>
					                  
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		 @foreach($list2 as $hx)
                                <tr>
                                <td>{{$hx->lhlx_ten}}</td>
                                <td>{{$hx->gv_ten}}</td>
                                
                                <td>{{$hx->hx_ten}}</td>
                                
                                    <td>
                                        <a href="{{asset('/gplx/cbsh/sualophoc/'.$hx->lhlx_id)}}" class="btn btn-warning"> Sửa</a>
                                        <a href="{{asset('/gplx/cbsh/xoalophoc/'.$hx->lhlx_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger">Xóa</a>
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
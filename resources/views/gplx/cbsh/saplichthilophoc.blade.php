@extends('gplx.cbsh.master')
@section('title','Sắp lịch thi cho lớp học')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sắp lịch thi cho lớp học</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sắp lịch thi cho lớp học
						</div>
							<div class="panel-body">
								@include('errors.note')
								@if ($message = Session::get('success'))
                                <div class="alert alert-danger">
                                    
                                    <p>{!! $message !!}</p>
                                </div>
                                <?php Session::forget('success');?>
                                @endif
						<div class="form-group col-xs-8 row" >
										<label>Năm thi</label>
										<input type="number" class="form-control" name="nt" placeholder="Chọn năm ..." min="2000" max="2100" id='nth'>

									</div>
						<form role="form" method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Lịch thi</label>
										<select name="lt" id="lth" class="form-control">
											<option value="" disabled selected>Chọn lịch thi</option>
											@foreach($ngaythi as $nt)
											<option value="{{$nt->lt_id}}">{{$nt->lt_ngaythi}}-{{$nt->llh_ten}}</option>
											@endforeach
										</select>
										
									</div>
									<div class="form-group" >
										<label>Lớp học lái xe :</label>
										<select name="lh" id="lth" class="form-control">
											<option value="" disabled selected>Chọn lớp học</option>
											@foreach($list as $nt)
											<option value="{{$nt->lhlx_id}}">{{$nt->lhlx_ten}}</option>
											@endforeach
										</select>
					                   
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<input type="reset" value="Làm mới" class="btn btn-danger">
								</div>
							</div>
							{{csrf_field()}}
							<input type="hidden" name="_token" value="{{csrf_token() }}">
						</form>
						<div class="clearfix"></div>
					</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách lịch thi lớp học </div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                	<th>Tên lớp học</th>
					                	<th>Lịch thi</th>
					                  	<th>Hình thức thi</th>
					                  
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		 @foreach($list2 as $hx)
                                <tr>
                                <td>{{$hx->lhlx_ten}}</td>
                                <td>{{$hx->lt_ngaythi}}</td>
                                <td>{{$hx->llh_ten}}</td>
                   
                                
                                    <td>
                                        <a href="{{asset('/gplx/cbsh/sualichthilophoc/'.$hx->ltlh_id)}}" class="btn btn-warning"> Sửa</a>
                                        <a href="{{asset('/gplx/cbsh/xoaltlh/'.$hx->ltlh_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"> Xóa</a>
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

@section('script')
<script>
	$(document).ready(function(){
		$("#nth").change(function(){
			var nam =$(this).val();
		$.get('http://127.0.0.1:8000/gplx/cbsh/laynamthi/'+nam,function(data){
					$("#lth").html(data);
			});
		});

		// {{asset('/gplx/cbsh/laynamthi/')}}
		
	});


</script>



@endsection
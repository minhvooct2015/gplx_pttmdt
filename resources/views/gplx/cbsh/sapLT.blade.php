@extends('gplx.cbsh.master')
@section('title','Phân công giáo viên gác thi')
@section('main')
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Phân công giáo viên gác thi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Phân công giáo viên gác thi </div>
					<div class="panel-body">
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
										<label>Giáo viên</label>
										<select name="gv" id="lth" class="form-control">
											<option value="" disabled selected>Chọn giáo viên</option>
											@foreach($gv as $nt)
											<option value="{{$nt->gv_id}}">{{$nt->gv_ten}}</option>
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
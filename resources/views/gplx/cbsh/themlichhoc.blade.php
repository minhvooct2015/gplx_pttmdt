@extends('gplx.cbsh.master')
@section('title','Thêm lịch học')
@section('main')
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">LỊCH HỌC</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm lịch học </div>
					<div class="panel-body">
						@if ($message = Session::get('success'))
                                <div class="alert alert-danger">
                                    
                                    <p>{!! $message !!}</p>
                                </div>
                                <?php Session::forget('success');?>
                                @endif
					 <form role="form" method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Chỗ học</label>
										<select name="ch" id="lth" class="form-control">
											<option value="" disabled selected>Chọn chỗ học</option>
											@foreach($list1 as $nt)
											<option value="{{$nt->ch_id}}">{{$nt->ch_ten}}</option>
											@endforeach
										</select>
										
									</div>
									<div class="form-group" >
										<label>Lớp học lái xe </label>
										<select name="lhlx" id="lth" class="form-control">
											<option value="" disabled selected>Chọn lớp học</option>
											@foreach($list as $nt)
											<option value="{{$nt->lhlx_id}}">{{$nt->lhlx_ten}}</option>
											@endforeach
										</select>
					                   
									</div>
									<div class="form-group" >
										<label>Loại lịch học</label><br>
										@foreach($list2 as $nt)
										{{$nt->llh_ten}} <input type="radio" name="llh" value="{{$nt->llh_id}}"> 
										@endforeach
									</div>
									<div class="form-group">
								<label>Ngày học</label>
    							<input required name="ngh" class="form-control datepicker" placeholder="Ngày học..." type="text" >
							</div>
							<div class="form-group">
								<label>Giờ học</label>
    							<input required class="form-control timepicker"type="time" name="gh" placeholder="Giờ học...">
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
@extends('gplx.cbsh.master')
@section('title','Sửa lịch học')
@section('main')
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">GIÁO VIÊN</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa giáo viên </div>
					<div class="panel-body">
						
						<form role="form" method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Chỗ học</label>
										<select name="ch" id="lth" class="form-control">
											<option value="" disabled selected>Chọn lịch thi</option>
											@foreach($list1 as $cate)
											<option value="{{$cate->ch_id}}" @if($lt->id_ch==$cate->ch_id)  selected @endif>{{$cate->ch_ten}}</option>
											@endforeach
										</select>
										
									</div>
									<div class="form-group" >
										<label>Lớp học lái xe </label>
										<select name="lhlx" id="lth" class="form-control">
											<option value="" disabled selected>Chọn lớp học</option>
											@foreach($list as $nt)
											<option value="{{$nt->lhlx_id}}" @if($lt->id_lhlx==$nt->lhlx_id)  selected @endif>{{$nt->lhlx_ten}}</option>
											@endforeach
										</select>
					                   
									</div>
									<div class="form-group" >
										<label>Loại lịch học</label><br>
										@foreach($list2 as $nt)
										{{$nt->llh_ten}} <input type="radio" name="llh" value="{{$nt->llh_id}}" @if($lt->id_llh==$nt->llh_id)  checked="checked" @endif> 
										@endforeach
									</div>
									<div class="form-group">
								<label>Ngày học</label>
    							<input required name="ngh" class="form-control datepicker" placeholder="Ngày thi..." type="text" value="{{$lt->lh_ngay}}">
							</div>
							<div class="form-group">
								<label>Giờ học</label>
    							<input required class="form-control timepicker"type="text" name="gh" placeholder="Giờ học..." value="{{$lt->lh_giohocbatdau}}">
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
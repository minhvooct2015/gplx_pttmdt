@extends('gplx.cbsh.master')
@section('title','Thêm giáo viên')
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
					<div class="panel-heading">Thêm giáo viên </div>
					<div class="panel-body">
						
						<form role="form" method="post" enctype="multipart/form-data">	
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên giáo viên</label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh giáo viên</label>
										<input required id="img" type="file" name="img" class="form-control " onchange="changeImg(this)">
					                   <!--  <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png"> -->
									</div>
									<div class="form-group" >
										<label>Địa chỉ</label>
										<input required type="text" name="dc" class="form-control">
									</div>
									<div class="form-group" >
										<label>Trình độ</label>
										<input required type="text" name="trd" class="form-control">
									</div>
									
									<div class="form-group" >
										<label>Số điện thoại</label>
										<input required type="text" name="sdt" class="form-control">
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input required type="email" name="email" class="form-control">
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
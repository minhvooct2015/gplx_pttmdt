@extends('gplx.cbsh.master')
@section('title','Sửa giáo viên')
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
										<label>Tên giáo viên</label>
										<input  type="text" name="name" class="form-control" value="{{$gv->gv_ten}}">
									</div>
									<div class="form-group" >
										<label>Ảnh giáo viên</label>
										<input  id="img" type="file" name="img" class="form-control " onchange="changeImg(this)" >
										<img width="100px" src="{{asset('../storage/app/anhGV/'.$gv->gv_anh)}}" class="thumbnail">
					                   <!--  <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png"> -->
									</div>
									<div class="form-group" >
										<label>Địa chỉ</label>
										<input  type="text" name="dc" class="form-control" value="{{$gv->gv_diachi}}">
									</div>
									<div class="form-group" >
										<label>Trình độ</label>
										<input  type="text" name="trd" class="form-control" value="{{$gv->gv_trinhdo}}">
									</div>
									
									<div class="form-group" >
										<label>Số điện thoại</label>
										<input  type="text" name="sdt" class="form-control" value="{{$gv->gv_sdt}}">
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input  type="email" name="email" class="form-control" value="{{$gv->gv_email}}">
									</div>
									
									<input type="submit" name="submit" class=" btn btn-primary" value="Sửa" >
										<a href="{{asset('/gplx/cbsh/dshangxe')}}"  class=" btn btn-danger">Hủy bỏ</a>
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
@extends('gplx.cbsh.master')
@section('title','Thêm giáo viên')
@section('main')
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">THÊM BANNER</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Chỉnh sửa banner </div>
					<div class="panel-body">
						
						<form role="form" method="post" enctype="multipart/form-data">	
							 {{ csrf_field() }}
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Banner ngang 1:</label>
										<input  id="img" type="file" name="b1" class="form-control " onchange="changeImg(this)">
									</div>
									<div class="form-group" >
										<label>Banner ngang 2:</label>
										<input  id="img" type="file" name="b2" class="form-control " onchange="changeImg(this)">
					                   <!--  <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png"> -->
									</div>
									<div class="form-group" >
										<label>Banner trái 1:</label>
										<input  id="img" type="file" name="b3" class="form-control " onchange="changeImg(this)">
									</div>
									<div class="form-group" >
										<label>Banner trái 2:</label>
										<input  id="img" type="file" name="b4" class="form-control " onchange="changeImg(this)">
									</div>
									
									<div class="form-group" >
										<label>Banner trái 3:</label>
										<input  id="img" type="file" name="b5" class="form-control " onchange="changeImg(this)">
									</div>
									<div class="form-group" >
										<label>Banner trái 4:</label>
										<input  id="img" type="file" name="b6" class="form-control " onchange="changeImg(this)">
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
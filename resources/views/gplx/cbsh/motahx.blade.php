@extends('gplx.cbsh.master')
@section('title','Thêm mô tả hạng xe')
@section('main')
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Mô tả hạng xe</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Mô tả hạng xe</div>
					<div class="panel-body">
						
						<form role="form" method="post" enctype="multipart/form-data">	
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Hạng xe</label>
										<select required name="hx" id="lth" class="form-control">
											<option value="" disabled selected>Chọn hạng xe</option>
											@foreach($list1 as $nt)
											<option value="{{$nt->hx_id}}">{{$nt->hx_ten}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group" >
										<label>Ảnh minh họa</label>
										<input required id="img" type="file" name="img" class="form-control " onchange="changeImg(this)">
					                   <!--  <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png"> -->
									</div>
									<div class="form-group" >
										<label>Nội dung mô tả</label>
										<textarea required class=" form-control ckeditor"   name="mota" ></textarea >
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
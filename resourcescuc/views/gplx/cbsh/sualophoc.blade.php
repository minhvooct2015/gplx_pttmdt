@extends('gplx.cbsh.master')
@section('title','Sửa lớp học')
@section('main')
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Sửa lớp học</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa lớp học </div>
					<div class="panel-body">
						<form role="form" method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									 <div class="form-group">
								<label>Tên lớp học</label>
    							<input required type="text" name="name" class="form-control" value="{{$lt->lhlx_ten}}">
							</div>
									<div class="form-group" >
										<label>Giáo viên</label>
										<select  name="gv" class="form-control">

											@foreach($list as $cate)

											<option value="{{$cate->gv_id}}" @if($lt->lhlx_gv==$cate->gv_id)  selected @endif>{{$cate->gv_ten}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Hạng xe</label>
										<select name="hx" id="lth" class="form-control">
											
											@foreach($list1 as $cate)

											<option value="{{$cate->hx_id}}" @if($lt->lhlx_hx==$cate->hx_id)  selected @endif>{{$cate->hx_ten}}</option>
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

@extends('gplx.cbsh.master')
@section('title','Sửa phân công giáo viên gác thi')
@section('main')
         <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Sửa phân công giáo viên gác thi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa phân công giáo viên gác thi </div>
					<div class="panel-body">
						<form role="form" method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Lịch thi</label>
										<select  name="lt" class="form-control">

											@foreach($list as $cate)

											<option value="{{$cate->lt_id}}" @if($lt->id_lt==$cate->lt_id)  selected @endif>{{$cate->lt_ngaythi}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Giáo viên</label>
										<select name="gv" id="lth" class="form-control">
											@foreach($list1 as $nt)
											<option value="{{$nt->gv_id}}"
											 @if($lt->id_gv==$nt->gv_id)  selected @endif
												>{{$nt->gv_ten}}</option>
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

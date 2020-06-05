@extends('gplx.cbsh.master')
@section('title','Sửa lịch thi')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục lịch thi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa lịch thi
						</div>
						<div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
								<label>Ngày thi:</label>
    							<input required name="ngt" class="form-control datepicker" placeholder="Ngày thi..." type="text" value="{{$lt->lt_ngaythi}}">
							</div>
							<div class="form-group">
								<label>Giờ thi:</label>
    							<input required class="form-control timepicker" type="text" name="gt" placeholder="Giờ thi..." value="{{$lt->lt_giothi}}">
							</div>chỗ
							<div class="form-group">
								<label>Loại thi:</label>
    							<select  name="llt" class="form-control">
    										<option value="" disabled selected>Chọn loại thi</option>
											@foreach($list1 as $cate)
											<option value="{{$cate->llh_id}}" @if($lt->id_llt==$cate->llh_id)  selected @endif>{{$cate->llh_ten}}</option>
											@endforeach
					                    </select>
							</div>
							<div class="form-group" >
										<label>Chỗ thi</label>
										<select  name="dc" class="form-control">
											@foreach($l as $cate)
											<option value="{{$cate->cth_id}}" @if($lt->id_chothi==$cate->cth_id)  selected @endif>{{$cate->cth_ten}}</option>
											@endforeach
					                    </select>
									</div>
							<div class="form-group">
    							
    							<input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa" >
							</div>
							<div class="form-group">    			<a href="{{asset('/gplx/cbsh/dslichthi')}}"  class="form-control btn btn-danger">Hủy bỏ</a>
    							
							</div>
							{{csrf_field()}}
							<input type="hidden" name="_token" value="{{csrf_token() }}">
							</form>
							
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop	
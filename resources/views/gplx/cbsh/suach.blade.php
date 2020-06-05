@extends('gplx.cbsh.master')
@section('title','Sửa chỗ học')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục chỗ học</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa chỗ học
						</div>
						<div class="panel-body">
							@include('errors.note')
                        <form role="form" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
							<div class="form-group">
								<label>Tên chỗ học:</label>
    							<input required type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$ch->ch_ten}}">
							</div>
							<div class="form-group">
								<label>Địa chỉ:</label>
    							<input required type="text" name="dc" class="form-control" placeholder="Địa chỉ chỗ học..." value="{{$ch->ch_diachi}}">
							</div>
							<div class="form-group">
    							
    							<input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa" >
							</div>
							<div class="form-group">    			<a href="{{asset('gplx/cbsh/dschohoc')}}"  class="form-control btn btn-danger">Hủy bỏ</a>
    							
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
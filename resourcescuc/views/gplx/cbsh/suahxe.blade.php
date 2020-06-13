@extends('gplx.cbsh.master')
@section('title','Sửa hạng xe')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục hạng xe</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa hạng xe
						</div>
						<div class="panel-body">
							@include('errors.note')
                        <form role="form" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
							<div class="form-group">
								<label>Tên hạng xe:</label>
    							<input required type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$hx->hx_ten}}">
							</div>
							<div class="form-group">
								<label>Giá tiền:</label>
    							<input type="number" name="gia" class="form-control" placeholder="Giá tiền..." value="{{$hx->hx_giatien}}">
							</div>
							<div class="form-group">
    							
    							<input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa" >
							</div>
							<div class="form-group">    			<a href="{{asset('/gplx/cbsh/dshangxe')}}"  class="form-control btn btn-danger">Hủy bỏ</a>
    							
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
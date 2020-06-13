@extends('gplx.nguoidung.masterfront')
@section('title','Trang chủ')
@section('main')


<div class="col-md-9">
	            <div class="panel panel-warning vien">            
	            	<div class="panel-heading" style="background-color:Tomato; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">KHÓA HỌC</h2>
	            	</div>

	            	<div class="panel-body"style="background-color:Cornsilk;" >
	            		<!-- item -->
					    <div class="row-item row">
					    	@foreach($list1 as $cate)
		                	<h3>
		                		 LỚP HỌC LÁI XE HẠNG {{$cate->hx_ten}}</a> 
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        
			                            <!-- <img class="img-responsive" src="image/320x150.png" alt=""> -->
			                            <img  	height="150px" width="150px" src="{{asset('http://localhost/laravel/laravel/storage/app/anhHX/'.$cate->mthx_anh)}}" class="thumbnail">
			                        
			                    </div>

			                    <div class="col-md-7">
			                   
			                        <p>
			                        	{!!$cate->mthx_chitiet!!}
			                        </p>
			                        <a class="btn btn-success" href="{{asset('gplx/nguoidung/thempdk/'.$cate->hx_id)}}">Đăng ký học</a>
								</div>

		                	</div>
		                    
							<div class="break"></div>
							@endforeach
		                </div>
		                <!-- end item -->
		               
		               
		                
						{{ $list1->links() }}
					</div>
	            </div>
        	</div>
@stop   
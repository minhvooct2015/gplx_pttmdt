@extends('gplx.cbsh.master')
@section('title','Danh sách lịch học')
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách lịch học tổng hợp</h1>
            </div>
            
        </div><!--/.row-->
        
        <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách lịch học tổng hợp</div>
                
                   
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                   	<thead>
					                <tr class="bg-primary">
					                	<th>Ngày học</th>
					                  <th>Giờ bắt đầu học</th>
					                   <th>Loại lịch học</th>
					                    <th>Chỗ học</th>
					                   <th>Lớp học</th>
                                        <th>Giáo viên dạy</th>
					                 
					                </tr>
				              	</thead>
				              	<tbody>
				              	@foreach($list3 as $hx)
								<tr>
                                <td>{{$hx->lh_ngay}}</td>
                                <td>{{$hx->lh_giohocbatdau}}</td>
                                <td>{{$hx->llh_ten}}</td>
                                <td>{{$hx->ch_ten}}</td>
                                <td>{{$hx->lhlx_ten}}</td>
                                 <td>{{$hx->gv_ten}}</td>
									
			                  	</tr>
			                  	  @endforeach
				                </tbody>
				                {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                {{$list3->links() }}
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->
        
@stop   
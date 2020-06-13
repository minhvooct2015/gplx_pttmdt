@extends('gplx.nguoidung.masterfront')
@section('title','Trang chủ')
@section('main')


<div class="col-md-9">
	            <div class="panel panel-warning vien">            
	            	<div class="panel-heading" style="background-color:Tomato; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Thông tin cá nhân</h2>
	            	</div>

	            	<div class="panel-body"style="background-color:Cornsilk;" >
	            			   <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered" id="vientable">
                                <thead>
                                    <tr >
                                      
                                     <th >Họ tên</th>
                                     	<td>{{Auth::user()->hoten}}</td>
									 </tr>

										<tr>
											<th  >Ngày sinh</th> 
								    			<td>{{Auth::user()->ngaysinh}}</td>
								    	</tr> 





								    	<tr>
								    		  <th  >Email</th>
								    				<td>{{Auth::user()->email}}</td>
								    	</tr>
								    	
								    	<tr>
								    		<th  >Hộ khẩu</th>
								    	<td>{{Auth::user()->hokhau}}</td>

								    	</tr>

								    	<tr>
								    		 <th  >Số chứng minh nhân dân</th>
								    			<td>{{Auth::user()->cmnd}}</td>
								    	</tr>

								    	<tr>
								    		<th >Nơi ở hiện tại</th>
								    	<td>{{Auth::user()->noio}}</td>

								    	</tr>


								    	<tr>
								    		<th >Số điện thoại</th>
								    	<td>{{Auth::user()->sodienthoai}}</td>
								    	</tr>
								    
								  
								    
								   
								    
								    
                                   
                                </thead>
                                <tbody>
                                  
                                  
                                  
                                  
                                   
                                  
                                  
                                </tbody>
                                {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>

					</div>
	            </div>
        	</div>
@stop   
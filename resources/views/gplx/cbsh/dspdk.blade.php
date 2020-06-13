@extends('gplx.cbsh.master')
@section('title','Danh sách phiếu đăng ký')
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách phiếu đăng ký</h1>
            </div>
            
        </div><!--/.row-->
        
        <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách phiếu đăng ký </div>
                        <!-- <div class="col-lg-2 col-lg-offset-9" >
                           <h1> <a href="{{asset('gplx/cbsh/themgiaovien')}}" class=" form-control btn btn-primary ">THÊM</a>
                            </h1>
                        </div> -->
                        <center>
                             <div class="form-group col-xs-4 col-xs-offset-3 row" >
                                        <!-- <label>Hạng xe</label> -->
                                        <br>
                                        
                              <!--  <select name="lt" id='nth' class="form-control">
                                            <option value="" disabled selected>Hiển thị phiếu đăng ký theo hạng xe ...</option>
                                             @foreach($list2 as $nt)
                                            <option value="{{$nt->hx_id}}">{{$nt->hx_ten}}</option>
                                            @endforeach
                                        </select> -->
                                  <!-- 
                                        <input type="text" class="form-control" name="nt" placeholder="Hiển thị phiếu đăng ký theo hạng xe ..." min="2000" max="2100" id='nth'> -->

                                    </div>
                        </center>
               
                   
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                      <th >Họ và tên</th>
                                      <th >Số chứng minh nhân dân</th>
                                      <th>Hạng xe</th>
                                      
                                      <th >Chấm điểm</th>
                                    </tr>
                                </thead>
                                <tbody id="lth">
                                 @foreach($list3 as $hx)
                                <tr>
                                <td>{{$hx->hoten}}</td>
                                <td>{{$hx->cmnd}}</td>
                                <td>{{$hx->hx_ten}}</td>
                                @if($hx->pdk_tinhtrangHP==1) 
                                <td>
                                        <a href="{{asset('/gplx/cbsh/ctpdk/'.$hx->pdk_id)}}" class="btn btn-warning"> Chấm điểm</a>
                                        
                                    </td>
                     @else
                     <!-- <h1 style="color:red">
                      
                                   
                                    <br> Số tiền: {{number_format($hx->hx_giatien,0,',','.')}} VND
                                   </h1>
                                   <a href="{{asset('/gplx/cbsh/dspdk')}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Trở về trang trước</a> -->
                    <td style="color:red">
                                Học viên chưa hoàn thành học phí       
                                        
                    </td>
                                    @endif
                                
                                    
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
@section('script')
<script>
    $(document).ready(function(){
        $("#nth").change(function(){
            var nam =$(this).val();
        $.get('http://127.0.0.1:8000/gplx/cbsh/pdkhx/'+nam,function(data){
                    $("#lth").html(data);
            });
        });

        // {{asset('/gplx/cbsh/laynamthi/')}}
        
    });


</script>



@endsection
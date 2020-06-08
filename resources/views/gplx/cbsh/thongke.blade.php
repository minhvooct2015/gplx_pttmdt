@extends('gplx.cbsh.master')
@section('title','Thống kê')
@section('main')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
               <!--  <h1 class="page-header"></h1> -->
            </div>
            
        </div><!--/.row-->
        
        <div class="row">
           
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                   Thống kê 
                </div>
                        <!-- <div class="col-lg-2 col-lg-offset-9" >
                           <h1> <a href="{{asset('gplx/cbsh/themgiaovien')}}" class=" form-control btn btn-primary ">THÊM</a>
                            </h1>
                        </div> -->
                        <center>
                             <div class="form-group col-xs-4 col-xs-offset-3 row" >
                                        <!-- <label>Hạng xe</label> -->
                                        <br>
                                        
                               
                                  <!-- 
                                        <input type="text" class="form-control" name="nt" placeholder="Hiển thị phiếu đăng ký theo hạng xe ..." min="2000" max="2100" id='nth'> -->

                                    </div>
                        </center>
               
                   
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                      <th style="width:50%">Số lượng học viên đăng ký học lái xe</th>
                                      <th >Tổng số tiền</th>
                                      
                                    </tr>
                                </thead>
                                <tbody id="lth">
                                 <td>{{$list3}}</td>

                                 <td>
                                {{number_format($tongtien,0,',','.')}} VND
                                 </td>
                                </tbody>
                                {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div><!--/.row-->
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
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
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light1", // "light2", "dark1", "dark2"
    animationEnabled: false, // change to true      
    title:{
        text: "Thống kê"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "column",
        dataPoints: [
            { label: "Tài khoản",  y: 20  },
            { label: "Giáo viên", y: 15  },
            { label: "Lớp học", y: 10  },
            { label: "Số lượng học viên",  y: 30  },
            // { label: "Số lượng",  y: 28  }
        ]
    }
    ]
});
chart.render();

}
</script>


@endsection
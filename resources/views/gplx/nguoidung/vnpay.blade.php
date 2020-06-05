@extends('gplx.nguoidung.masterfront')
@section('title','Trang chủ')
@section('main')
 <!-- Page Content -->
<div class="col-md-9">
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Đăng ký học lái xe</h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
                     <div class="row">
                    <div class="col-lg-12">
                        <h1 >Đăng ký
                            <small>học lái xe</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                         
            <div class="header clearfix">
                <h3 class="text-muted">Thanh toán học phí quá VNPAY</h3>
            </div>
            <h3>Đóng học phí và lệ phí thi</h3>
            <div class="table-responsive">
                @foreach($lt as $hx)
                <form action="" id="create_form" method="post" enctype="multipart/form-data">       
                    @csrf
         @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
                    class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('success');?>
        @endif
                  
                    <div class="form-group">
                        <label for="amount">Số tiền</label>
                        <input class="form-control" id="amount" Readonly
                               name="amount" type="text" value="{{$hx->hx_giatien}}"/>
                    </div>
                    <div class="form-group">
                        <label for="order_desc">Ghi chú</label>
                        <textarea class="form-control"  id="order_desc" name="order_desc"  width="100px">Nhập ghi chú ...
                        </textarea>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Thanh toán </button>
                     <input type="reset" value="Làm mới" class="btn btn-default">
                 @endforeach
                </form>
                 {{csrf_field()}}
                <input type="hidden" name="_token" value="{{csrf_token() }}">
            
            
                    </div>
                </div>
                <!-- /.row -->
    </div>
    <!-- end Page Content -->
@stop
@section('script')
<script>
    $(document).ready(function(){
        $("#nth").change(function(){
            var nam =$(this).val();
        $.get('http://127.0.0.1:8000/gplx/nguoidung/layhx/'+nam,function(data){
                    $("#lth").html(data);
            });
        });

        // {{asset('/gplx/cbsh/laynamthi/')}}
        
    });


</script>



@endsection
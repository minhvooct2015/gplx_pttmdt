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
                        <form role="form" method="post" enctype="multipart/form-data">  
                            @include('errors.note')
                            <!-- <div class="form-group">
                                <label>Bằng lái xe đã có hạng </label>
                                <select name="blx" class="form-control">
                                   <option value="" disabled selected>Chọn hạng xe</option>
                                   @foreach($list as $nt)
                                    <option value="{{$nt->hx_id}}">{{$nt->hx_ten}}</option>
                                    @endforeach
                                     <option value="0" >Chưa có</option>
                                </select>
                                (*) Vui lòng chọn giấy phép lái xe có hạng xe cao nhất
                            </div> -->
                            <div class="form-group">
                                <label>Giấy phép lái xe đăng ký học hạng </label>
                                 <select required name="hx" class="form-control" id='nth'>
                                <option value="" disabled selected>Chọn hạng xe</option>
                                   @foreach($list1 as $nt)
                                    <option value="{{$nt->hx_id}}">{{$nt->hx_ten}}</option>
                                    @endforeach
                                     </select>
                            </div>
                            <div class="form-group">
                                <label>Địa điểm học- Lớp học </label>
                                 <select required name="lhlx" class="form-control" id='lth'>
                                 <option value="" disabled selected>Chọn lớp học</option>
                                   @foreach($list2 as $nt)
                                            <option value="{{$nt->lhlx_id}}">{{$nt->lhlx_ten}}</option>
                                    @endforeach
                                     </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh chụp chứng nhận sức khỏe mặt trước </label>
                                <input  required name="sk1"  class="form-control input--style-3 js-datepicker"  type="file" >
                            </div>
                            <div class="form-group">
                                <label>Ảnh chụp chứng nhận sức khỏe mặt sau </label>
                              <input required name="sk2"  class="form-control input--style-3 js-datepicker"  type="file" >
                            </div>
                            <div class="form-group">
                                <label>Ảnh chụp 3x4 </label>
                                <input required name="a34"  class="form-control input--style-3 js-datepicker"  type="file" >
                            </div>
                           
                           <div class="form-group">
                                <label>Ảnh chụp chứng minh nhân dân mặt trước </label>
                                <input required name="cm1"  class="form-control input--style-3 js-datepicker"  type="file" >
                            </div>
                            <div class="form-group">
                                <label>Ảnh chụp chứng minh nhân dân mặt sau </label>
                                <input required name="cm2"  class="form-control input--style-3 js-datepicker"  type="file" >
                            </div>
                            <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <input type="reset" value="Làm mới" class="btn btn-danger">
                        <form>
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
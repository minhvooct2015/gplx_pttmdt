
                <h1 style="color:blue;">Lịch dạy sát hạch</h1>
           
        <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = getdate();

    

   
    $weekday = date("l");
$weekday = strtolower($weekday);
switch($weekday) {
    case 'monday':
        $weekday = 'Thứ hai';
        break;
    case 'tuesday':
        $weekday = 'Thứ ba';
        break;
    case 'wednesday':
        $weekday = 'Thứ tư';
        break;
    case 'thursday':
        $weekday = 'Thứ năm';
        break;
    case 'friday':
        $weekday = 'Thứ sáu';
        break;
    case 'saturday':
        $weekday = 'Thứ bảy';
        break;
    default:
        $weekday = 'Chủ nhật';
        break;
}
echo "<h4 style='color:Tomato;''>";
    echo "Lịch dạy được cập nhập vào: ";
    echo $weekday;
    echo ", ngày ".$date['mday'];
    echo ", tháng ".$date['mon'];
    echo ", năm ".$date['year'];

    echo ", ".$date['hours'];
    echo " giờ ";
    echo ", ".$date['minutes'];
    echo " phút ";
echo "</h4>";
 echo "<hr>";
?>
                        <br>
                        
                            <table class="table table-bordered" border="0" cellpadding="3">
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
                       
    <hr>
      <h1 style="color:blue;">Lịch thi sát hạch</h1>
           

                        <br>
                        
                            <table class="table table-bordered" border="0" cellpadding="3">
                                <table class="table table-bordered">
                                <thead>
                                    <thead>
                                    <tr class="bg-primary">
                                        <th>Ngày thi</th>
                                      <th>Giờ thi</th>
                                       <th>Hình thức thi</th>
                                        <th>Chỗ thi</th>
                                       <th>Giáo viên gác thi</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($list2 as $hx)
                                <tr>
                                <td>{{$hx->lt_ngaythi}}</td>
                                <td>{{$hx->lt_giothi}}</td>
                                <td>{{$hx->llh_ten}}</td>
                                <td>{{$hx->cth_ten}}</td>
                                <td>{{$hx->gv_ten}}</td>
                                    
                                </tr>
                                  @endforeach
                                </tbody>
                                {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                            </table>
                       
    <hr>
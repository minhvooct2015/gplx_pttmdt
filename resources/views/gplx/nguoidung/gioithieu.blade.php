
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('../resources/views/gplx/nguoidung/')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang chủ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Website đăng ký giấy phép lái xe</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <!--  <li>
                        <a href="#">Giới thiệu</a>
                    </li> -->

                    <form class="navbar-form navbar-left" role="search" method="get" enctype="multipart/form-data" action="{{asset('/timkiem')}}">
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" placeholder="Nhập khóa học lái xe">
                    </div>
                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                </form>
                </ul>

                
                <ul class="nav navbar-nav pull-right">
                   
                   
                    <li><a href="{{asset('dangky')}}"><!-- <span class="glyphicon glyphicon-user"> --></span> Đăng ký</a></li>
      <li><a href="{{asset('dangnhap')}}"><!-- <span class="glyphicon glyphicon-log-in"> --></span> Đăng nhập</a></li>
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">
    <!-- <img src="image/home/main.jpg" alt="" height="500px" width="1200px"> -->
        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
                    </ol>
                    <div class="carousel-inner">
                        <!-- <div class="item active">

                            
                            <img class="slide-image" src="image/home/main01.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/home/main11.jpg" alt="">
                        </div> -->
                        <!-- <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div> -->
                            @foreach($list as $hx)
                                <div class="item active">

                            
                            <img class="slide-image" src="{{asset('../storage/app/anhBanner/'.$hx->ban_ngang1)}}" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="{{asset('../storage/app/anhBanner/'.$hx->ban_ngang2)}}" alt="">
                        </div>
                                  @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <p></p>
    <!-- Centered Pills -->
<ul class="nav nav-pills nav-justified">
<li class=" pil "><a href="{{asset('/gioithieu')}}">Giới thiệu</a></li>
  <li class="pil"><a href="{{asset('/')}}">Khóa thi sát hạch bằng lái xe</a></li>
  <li class="pil" ><a href="{{asset('/lienhe')}}">Liên hệ</a></li>
</ul>
<p></p>
<!-- thêm banner vào nhé -->
        <div class="row main-left"> 
            <div class="col-md-3 ">
     @foreach($list as $hx)
               <div id="banner-l" class="text-center">
                        <div class="banner-l-item">
                            <a href="#">
                               <!--  <img src="image/home/ban5.gif" alt="" class="img-thumbnail"> -->
                                <img src="{{asset('../storage/app/anhBanner/'.$hx->ban_trai1)}}" alt="" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#">
                                <!-- <img src="image/home/ban1.jpg" alt="" class="img-thumbnail"> -->
                                <img src="{{asset('../storage/app/anhBanner/'.$hx->ban_trai2)}}" alt="" class="img-thumbnail">

                            </a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#">
                                <!-- <img src="image/home/ban2.jpg" alt="" class="img-thumbnail"> -->
                                <img src="{{asset('../storage/app/anhBanner/'.$hx->ban_trai3)}}" alt="" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#">
                                <!-- <img src="image/home/ban4.gif" alt="" class="img-thumbnail"> -->
                                <img src="{{asset('../storage/app/anhBanner/'.$hx->ban_trai4)}}" alt="" class="img-thumbnail">
                            </a>
                        </div>
                        </div>
                <!-- <p>sadsfhjjds</p> -->
@endforeach
            </div>
 
                


         <div class="col-md-9">
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">
                            Danh mục các loại bằng lái xe tại Việt Nam
                        </h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
                        <div class="row-item row">
                            <h6>
                                
                            </h6>
                            <div class="col-md-9">
                                
<p style="text-align: center;"><span style="color: #ff0000; font-size: 18pt;"><strong>NHỮNG ĐIỀU CẦN BIẾT VỀ GIẤY PHÉP LÁI XE TẠI VIỆT NAM</strong></span></p>
<p style="text-align: justify;"><span style="color: #0000ff;"><strong><span style="font-size: 14pt;">CÁC LOẠI GIẤY PHÉP LÁI XE</span></strong></span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng A1</strong>: Cấp cho người lái xe mô tô hai bán có dung tích xi – lanh từ 50 cm3 đến dưới 175 cm3.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng A2</strong>: Cấp cho người lái xe mô tô 2 bánh có dung tích xi – lanh từ 175cm3 trở lên và các loại xe quy định cho giấy phép lái xe A1.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng A3</strong>: Cấp cho người lái xe mô tô 3 bánh các loại xe quy định cjo giấy phép lái xe A1 và các loại xe tương tự.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng A4</strong>: Cấp cho người lái máy kéo có trọng tải đến 1.000kg.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng B1</strong>: Cấp cho người lái xe điều khiển xe ô tô chở người đến 9 chổ ngồi không kinh doanh: xe ô tô tải, xe kéo có trọng tải dưới 3.500 kg.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng B2</strong>: Cấp cho lái xe điều khiển xe ô tô chở người đến 9 chổ ngồi, kinh doanh vận tải xe ô tô tải, máy kéo có trọng tải dưới 3.500 kg.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+<strong> Bằng lái xe hạng C</strong>: Cấp cho người lái xe ô tô tải, máy kéo có trọng tải từ 3.500 kg trở lên và các loại xe hạng B1, B2.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng D</strong>: Cấp cho người lái xe ô tô chở người từ 10 – 30 chổ ngồi và các loại xe quy định cho giấy phép hạng B1, B2, C.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng E</strong>: Cấp cho người lái xe ô tô chở người trên 30 chổ ngồi và các loại xe quy định cho giấy phép lái xe hạng B1, B2, C, D.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng FB2, FD, FE</strong>: Cấp cho người lái xe đã có giấy phép lái xe hạng B2, D, E để lái các loại xe hạng này khi kéo rơ mooc hoặc ô tô chở khách nối toa.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng FC</strong>: Cấp cho người lái xe đã có giấy phép lái xe hạng C để lái các loại xe quy định cho hạng C khi kéo thêm rơ mooc, đầu kéo sơ mi rơ mooc.</span></p>
<p style="text-align: justify;"><span style="color: #0000ff;"><strong><span style="font-size: 14pt;">THỜI HẠN CỦA GIẤY PHÉP LÁI XE</span></strong></span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng A1, A2, A3</strong>: Không có thời hạn.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe B1</strong>: </span></p>
<ul>
<li style="text-align: justify;"><span style="font-size: 14pt;">Thời hạn đến đủ 60 tuổi đối với Nam.</span></li>
<li style="text-align: justify;"><span style="font-size: 14pt;">Thời hạn đến đủ 55 tuổi đối với Nữ.</span></li>
</ul>
<p style="text-align: justify;"><span style="color: #ff6600;"><em><span style="font-size: 14pt;">Trường hợp người lái xe trên 45 tuổi đối với Nữ và 55 tuổi đối với Nam thì giấy phép lái xe được cấp có thời hạn 10 năm, kể từ ngày cấp.</span></em></span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng A4, B2</strong>: Thời hạn 10 năm kể từ ngày cấp.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ <strong>Bằng lái xe hạng C, E, D, FB2, FC, FD, FE</strong>: Thời hạn 5 năm kể từ ngày cấp.</span></p>
<p style="text-align: justify;"><strong><em><span style="font-size: 14pt; color: #ff0000;">*** Những điều cần lưu ý về bằng lái xe tại Việt Nam:</span></em></strong></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ Giấy phép lái xe các hạng có giá trị sử dụng trong phạm vi lãnh thổ Việt Nam và lãnh thổ của các nước hoặc vùng lãnh thổ mà Việt Nam cam kết công nhận giấy phép lái xe của nhau.</span></p>
<p style="text-align: justify;"><span style="font-size: 14pt;">+ Người khuyết tật điều khiển xe mô tô ba bánh dùng cho người khuyết tật được cấp giấy phép lái xe hạn A1.</span></p>
<p style="text-align: justify;"><em><strong><span style="font-size: 14pt;">Đến đây chắc bạn đã biết loại xe mà bạn đang sử dụng cần bằng lái xe hạng gì rồi phải không nào. Hãy <a href="https://truongdaotaolaixehcm.com/lien-he/">đăng ký thi sát hạch bằng lái xe</a> đúng theo quy định của Luật Giao Thông đường bộ bạn nhé. Chúc bạn luôn có những hành trình bình an.</span></strong></em></p>

                            </div>
                            
                            
                        </div>
                        <!-- end item -->
                       
                       
                        
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <!-- footer -->
    <footer id="footer">            
        <div id="footer-t">
            <div class="container">
                <div class="row">               
                    <div id="about" class="col-md-4 col-sm-12 col-xs-12">
                        <h3 style="color:grey">SỞ LAO ĐỘNG THƯƠNG BINH VÀ XÃ HỘI TPCT</h3> 
                        <h5 >TRUNG TÂM ĐÀO TẠO VÀ SÁT HẠCH LÁI XE THÀNH CÔNG</h5>
                        <p class="text-justify">



Tel: (028) 6660.7770

Hotline: 0936.36.75.36 (Call, SMS, Zalo)  –  0974.449.456.</p>
                    </div>
                    <div id="hotline" class="col-md-4 col-sm-12 col-xs-12">
                        <h3>Hotline</h3>
                        <p>Phone Sale: (+84) 0988 550 553</p>
                        <p>Email: sirtuanhoang@gmail.com</p>
                    </div>
                    <div id="contact" class="col-md-4 col-sm-12 col-xs-12">
                        <h3>Contact Us</h3>
                        <p>Address 1: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
                        <p>Address 2: Số 25 Ngõ 178/71 - Tây Sơn Đống Đa - Hà Nội</p>
                    </div>
                </div>              
            </div>
            <div id="footer-b">             
                <div class="container">
                    <div class="row">
                        <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
                            
                        </div>
                        <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
                            
                        </div>
                    </div>
                </div>
                <div id="scroll">
                    <a href="#"><img src="image/home/scroll.png"></a>
                </div>  
            </div>
        </div>
    </footer>
    <!-- endfooter -->
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>

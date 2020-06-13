<!DOCTYPE html>
<html lang="en">

<head>
	<base href="{{asset('http://localhost/laravel/laravel/resources/views/gplx/nguoidung/')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tìm kiếm</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
   <!--  <link rel="stylesheet" href="css/style.css"> -->


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
                    
                </ul>
             <form class="navbar-form navbar-left" role="search" >
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" placeholder="Nhập khóa học lái xe">
                    </div>
                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                </form>
                
			    <ul class="nav navbar-nav pull-right">
                   
                    <!-- <li>
                    	<a href="{{asset('gplx/nguoidung/ttcanhan')}}">
                    		<span class ="glyphicon glyphicon-user"> Tài khoản </span>
                    		
                    	</a>
                    </li> -->

                    <!-- <li>
                    	<a href="{{asset('logout')}}">Đăng xuất</a>
                    </li> -->
                    <li><a href="{{asset('dangky')}}"><!-- <span class="glyphicon glyphicon-user"></span> --> Đăng ký</a></li> -->
      <li><a href="{{asset('dangnhap')}}"><!-- <span class="glyphicon glyphicon-log-in"></span> --> Đăng nhập</a></li> 
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
                         @foreach($ban as $hx)
                                <div class="item active">

                            
                            <img class="slide-image" src="{{asset('http://localhost/laravel/laravel/storage/app/anhBanner/'.$hx->ban_ngang1)}}" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="{{asset('http://localhost/laravel/laravel/storage/app/anhBanner/'.$hx->ban_ngang2)}}" alt="">
                        </div>
                                  @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                       <!--  <span class="glyphicon glyphicon-chevron-left"></span> -->
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
 @foreach($ban as $hx)
               <div id="banner-l" class="text-center">
                        <div class="banner-l-item">
                            <a href="#">
                               <!--  <img src="image/home/ban5.gif" alt="" class="img-thumbnail"> -->
                                <img src="{{asset('http://localhost/laravel/laravel/storage/app/anhBanner/'.$hx->ban_trai1)}}" alt="" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#">
                                <!-- <img src="image/home/ban1.jpg" alt="" class="img-thumbnail"> -->
                                <img src="{{asset('http://localhost/laravel/laravel/storage/app/anhBanner/'.$hx->ban_trai2)}}" alt="" class="img-thumbnail">

                            </a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#">
                                <!-- <img src="image/home/ban2.jpg" alt="" class="img-thumbnail"> -->
                                <img src="{{asset('http://localhost/laravel/laravel/storage/app/anhBanner/'.$hx->ban_trai3)}}" alt="" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="banner-l-item">
                            <a href="#">
                                <!-- <img src="image/home/ban4.gif" alt="" class="img-thumbnail"> -->
                                <img src="{{asset('http://localhost/laravel/laravel/storage/app/anhBanner/'.$hx->ban_trai4)}}" alt="" class="img-thumbnail">
                            </a>
                        </div>
                        </div>
                <!-- <p>sadsfhjjds</p> -->
@endforeach

            </div>
 
            	





<div class="col-md-9">
   
                <div class="panel panel-warning vien">            
                    <div class="panel-heading" style="background-color:Tomato; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Kết quả tìm kiếm {{$list}} </h2>
                    </div>

                    <div class="panel-body"style="background-color:Cornsilk;" >
                        <!-- item -->
                        <div class="row-item row">
                            
                             @foreach($list2 as $cate)
                            <h3 style="color:Navy;">
                                 
                                  {{$cate->lhlx_ten}}
                                  <a class="btn btn-link" href="{{asset('gplx/nguoidung/thempdk/'.$cate->hx_id)}}">Đăng ký học</a>
                            <div class="col-md-8 border-right">
                            </h3>

                            
                            @endforeach
                        </div>
                        <!-- end item -->
                       {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                       
                        
                        {{ $list2->links() }}
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
	<footer id="footer" >			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">						
						<a href="#"><img src="image/home/logo.png"></a>		
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">Vietpro Academy thành lập năm 2009. Chúng tôi đào tạo chuyên sâu trong 2 lĩnh vực là Lập trình Website & Mobile nhằm cung cấp cho thị trường CNTT Việt Nam những lập trình viên thực sự chất lượng, có khả năng làm việc độc lập, cũng như Team Work ở mọi môi trường đòi hỏi sự chuyên nghiệp cao.</p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone Sale: (+84) 0988 550 553</p>
						<p>Email: sirtuanhoang@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address 1: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
						<p>Address 2: Số 25 Ngõ 178/71 - Tây Sơn Đống Đa - Hà Nội</p>
					</div>
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
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        var date = new Date();

        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;

        var today = year + "-" + month + "-" + day;


        document.getElementById('theDate').value = today;
    </script>
    @yield('script')
</body>

</html>

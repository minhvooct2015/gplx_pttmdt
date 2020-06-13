<!DOCTYPE html>
<html>
<head>
<base href="{{asset('../resources/views/gplx/cbsh/')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trang chủ cán bộ sát hạch</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/csscbsh.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Giấy phép lái xe</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->email}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="{{asset('/gplx/cbsh/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li class="dropdown pull-left">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục hạng xe <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li ><a href="{{asset('gplx/cbsh/dshangxe')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách hạng xe</a></li>

            				<li ><a href="{{asset('gplx/cbsh/dsmota')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh mục mô tả hạng xe</a></li>
						</ul>
			</li>
			<li class="dropdown pull-left">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Banner <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li >
                                <a href="{{asset('gplx/cbsh/dsbanner')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Banner</a>
                            </li>

                        </ul>
                        
            </li>
			<li class="dropdown pull-left">
						<a href="{{asset('gplx/cbsh/dschohoc')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh mục chỗ học</a>
			</li>
			<li class="dropdown pull-left">
						<a href="{{asset('gplx/cbsh/dschothi')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh mục chỗ thi</a>
			</li>
			<li class="dropdown pull-left">
						<a href="{{asset('gplx/cbsh/dsloailh')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh mục loại lịch học</a>
			</li>
			<li class="dropdown pull-left">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục giáo viên <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li ><a href="{{asset('gplx/cbsh/themgiaovien')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Thêm giáo viên</a></li>

            				<li ><a href="{{asset('gplx/cbsh/dsgiaovien')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách giáo viên</a></li>
						</ul>
			</li>
			<li class="dropdown pull-left">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục lịch thi <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li ><a href="{{asset('gplx/cbsh/dslichthi')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách lịch thi</a></li>

            				<li ><a href="{{asset('gplx/cbsh/saplt')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Phân công giáo viên gác thi </a></li>
            				<li ><a href="{{asset('gplx/cbsh/dspc')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Lịch phân công giáo viên gác thi </a></li>

				            <li ><a href="{{asset('gplx/cbsh/lichthilh')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Sắp lịch thi  </a></li>
				            <li ><a href="{{asset('gplx/cbsh/dslichthith')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Lịch thi tổng hợp  </a></li>
						</ul>
			</li>
			<li class="dropdown pull-left">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục lớp học <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li ><a href="{{asset('gplx/cbsh/dslophoc')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Lớp học </a></li>

				            <li ><a href="{{asset('gplx/cbsh/themlichhoc')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Sắp lịch học </a></li>
				            <li ><a href="{{asset('gplx/cbsh/dslichhoc')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách lịch học </a></li>

				             <li ><a href="{{asset('gplx/cbsh/dslichhocth')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách lịch học tổng hợp </a></li>
						</ul>
			</li>
			 <li class="dropdown pull-left">
                 <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Chấm thi <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li >
                                
                <a href="{{asset('gplx/cbsh/dspdk')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Chấm thi </a>
                            </li>

                        </ul>
                        
            	</li>
            </li>

			<li class="dropdown pull-left">
                 <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Gửi mail lịch dạy <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li >
                                
                <a href="{{asset('gplx/cbsh/detailmail')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Gửi mail </a>
                            </li>

                        </ul>
                        
            </li>

            </li>
                  <li class="dropdown pull-left">
                 <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Bảo trì <span class="caret"></span>
                 @include('sweetalert::alert')</a>
                        <ul class="dropdown-menu" role="menu">
                            <li >  
                <a href="{{route('maintenance-down')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Bật bảo trì </a>
                            </li>
                            <li >  
                <a href="{{route('maintenance-up')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Tắt bảo trì </a>
                            </li>

                        </ul>
                </li>
            </li>
             <li class="dropdown pull-left">
                 <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Thống kê <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li >
                                
                <a href="{{asset('gplx/cbsh/thongke')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Thống kê </a>

                            </li>
                            <!--  <li >
                                
                <a href="{{asset('gplx/cbsh/thongkeana')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Thống kê google  </a>
                
                            </li> -->

                        </ul>
                        
            </li>

            </li>


			
			
			
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trang chủ</h1>
			</div>
		</div><!--/.row-->
									
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$list3}}</div>
							<div class="text-muted">Cán bộ </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$list2}}</div>
							<div class="text-muted">Giáo viên</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$list}}</div>
							<div class="text-muted">Học viên</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$list1}}</div>
							<div class="text-muted">Lớp học</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Lịch</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
		
	</div>	<!--/.main-->
		  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
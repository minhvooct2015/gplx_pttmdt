<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('http://localhost/laravel/laravel/resources/views/gplx/cbsh/')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link rel="stylesheet" href="../lib/themes/default.date.css">
<link rel="stylesheet" href="../lib/themes/default.time.css">
<link rel="stylesheet" href="../lib/themes/default.css">
<link href="css/styles.css" rel="stylesheet">
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
            <li ><a href="{{asset('/gplx/cbsh/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
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
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục chỗ học <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li >
                                <a href="{{asset('gplx/cbsh/dschohoc')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Địa điểm học</a>
                            </li>

                        </ul>
                        
            </li>
            <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục chỗ thi <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li >
                                <a href="{{asset('gplx/cbsh/dschothi')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh mục chỗ thi</a>
                            </li>

                        </ul>
                        
            </li>
            <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục loại lịch học <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li >
                                <a href="{{asset('gplx/cbsh/dsloailh')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh mục loại lịch học</a>
                            </li>

                        </ul>
                        
            </li>
            <li class="dropdown pull-left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục giáo viên <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li ><a href="{{asset('gplx/cbsh/themgiaovien')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Thêm giáo viên</a></li>

                            <li ><a href="{{asset('gplx/cbsh/dsgiaovien')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách giáo viên</a></li>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Danh mục lịch thi <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <li ><a href="{{asset('gplx/cbsh/dslichthi')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách lịch thi</a></li>
                              <li ><a href="{{asset('gplx/cbsh/lichthilh')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Sắp lịch thi  </a></li>
                            <li ><a href="{{asset('gplx/cbsh/saplt')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Phân công giáo viên gác thi </a></li>
                            <li ><a href="{{asset('gplx/cbsh/dspc')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Lịch phân công gác thi </a></li>

                          
                            <li ><a href="{{asset('gplx/cbsh/dslichthith')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Lịch thi tổng hợp  </a></li>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> Kết quả sát hạch <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li >
                                
                <a href="{{asset('gplx/cbsh/dsdau')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách học viên đậu </a>
                            </li>
                            <li >
                                
                <a href="{{asset('gplx/cbsh/dsrot')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh sách học viên trượt </a>
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
                            <li >
                                
                <a href="{{asset('gplx/cbsh/thongkeana')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Thống kê google  </a>
                
                            </li>

                        </ul>
                        
            </li>

            </li>


            
            
            
        </ul>
        
    </div><!--/.sidebar-->

<!-- main -->
	@yield('main')


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
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="../lib/picker.js"></script>
    <script src="../lib/picker.date.js"></script>
    <script src="../lib/picker.time.js"></script>
    <script src="../lib/legacy.js"></script>
    <script src="../lib/compressed/translations/vi_VN.js"></script>
    <script type="text/javascript">
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10) {
            dd='0'+dd;
        }
        if(mm<10) {
            mm='0'+mm;
        }
        today = dd+'/'+mm+'/'+yyyy;

        var $input = $( '.datepicker' ).pickadate({
            formatSubmit: 'yyyy/mm/dd',
            // editable: true,
            closeOnSelect: false,
            closeOnClear: false,
        })

        var picker = $input.pickadate('picker')
        // picker.set('select', '14 October, 2014')
        // picker.open()

        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });

        var $input2 = $( '.timepicker' ).pickatime({
        })
        var picker2 = $input2.pickatime('picker2')
        picker2.open()

    </script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
@yield('script')
</body>

</html>
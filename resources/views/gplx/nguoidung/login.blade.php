<!DOCTYPE html>
<html lang="en">

<head>
        <base href="{{asset('../resources/views/gplx/nguoidung/')}}/">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng nhập</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
   
<style>
body {
  background-image: url('image/home/69.jpg');
}
</style>
</head>

<body>

   

    <!-- Page Content -->
    <div class="container">
        <br>
        <br>
    	<!-- slider -->
    	<div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Đăng nhập</div>
                <div class="panel-body">
                   @include('errors.note')
                   @include('sweetalert::alert')
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                             <form role="form" method="post" enctype="multipart/form-data">
                                 {{csrf_field()}}
                        <fieldset>
                            <div class="form-group">
                                <input required class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                            </div>
                            <div class="form-group">
                                <input required class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Ghi nhớ đăng nhập
                                </label>
                            </div>
                             <button type="submit" class="btn btn-lg btn-primary btn-block">Đăng nhập</button>
                             <br>
                             <a href="{{asset('dangky')}}"><span class="btn btn-lg btn-info btn-block">Đăng ký</span> </a>
                        </fieldset>
                    </form>
                     <input type="hidden" name="_token" value="{{csrf_token() }}">
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->    
    </div>
    <!-- end Page Content -->

 
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

</body>

</html>

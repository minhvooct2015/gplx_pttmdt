
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="{{asset('http://localhost/laravel/laravel/resources/views/gplx/nguoidung/')}}/">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký</title>
<link rel="stylesheet" type="text/css" href="step/step.css" />
<style>
body {
  background-image: url('image/home/nendangky.jpeg');
  
}
</style>
</head>
<body>

<form id="msform" role="form" method="post" enctype="multipart/form-data">
     @csrf
<!-- Progressbar -->
<ul id="progressbar">
    <li class="active">Tạo tài khoản</li>
    <li>Thông tin cá nhân của bạn</li>
    <li>Địa chỉ liên hệ</li>
</ul>

<!-- fieldset -->
<fieldset>
<h2 class="fs-title">Tạo tài khoản</h2>
<input type="email" required class="form-control" placeholder="Nhập email..." name="email" / >
<input type="password" required class="form-control" name="password" placeholder="Nhập mật khẩu...">
<input type="password" required name="cpass" placeholder="Xác nhận lại mật khẩu"  />
<input type="button" name="next" class="next action-button" value="Tiếp" />
</fieldset>

<fieldset>
<h2 class="fs-title">Thông tin cá nhân của bạn</h2>

<input type="text" required class="form-control" placeholder="Họ và tên..." name="name"  />
 <input placeholder="Ngày sinh ..." class="textbox-n" name="ngsinh" type="text" onfocus="(this.type='date')" id="date">
<!-- <input type="date" class="form-control"     /> -->
 <input type="text" required class="form-control" placeholder="Số chứng minh nhân dân.." name="cmnd"   />
<input type="button" required name="previous" class="previous action-button" value="Trước" />
<input type="button" required name="next" class="next action-button" value="Tiếp" />
</fieldset>

<fieldset>
<h2 class="fs-title">Địa chỉ liên hệ</h2>

 <input type="text" required class="form-control" placeholder="Hộ khẩu..." name="hk"   />
<input type="text"  requiredclass="form-control" placeholder="Nơi ở hiện tại..." name="no"   />
 <input type="text" required class="form-control" placeholder="Số điện thoại ..." name="sdt"   />
 
   <p><input type="checkbox" required class="fs-title" >Cam kết những thông tin bên trên đều là sự thật</p>
   <input type="button" name="previous" class="previous action-button" value="Trước" />
<input type="submit" name="next" class="previous action-button" value="Đăng ký" />
</fieldset>

</form>
{{csrf_field()}}
<input type="hidden" name="_token" value="{{csrf_token() }}">
<!-- jQuery -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="step/jquery.easing.min.js" type="text/javascript"></script>
<script type="text/javascript" src="step/step.js"></script>
</body>
</html>
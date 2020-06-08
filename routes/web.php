<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
////Paypal
	
Route::get('/', function () {
    return view('welcome');
});
Route::get('thu', function () {
    return view('gplx.cbsh.suahxe');
});
Route::get('thu1', function () {
    return view('gplx.cbsh.dshxe');
});
Route::group(['namespace'=>'cbsh'],function(){ //thư mục chứa controller
// hàm đăng xuất chỉ cần lấy đc controller là đước nha
	Route::get('logout','homeController@getout');
// hàm đăng nhập
Route::group(['prefix'=>'login','middleware'=>'CheckcbshLogin'],function(){
		// đăng nhập
	Route::get('/','LoginController@getLogin') ;
	Route::post('/','LoginController@postLogin') ;
});


Route::group(['prefix'=>'gplx'],function(){// đường dẫn
	Route::group(['prefix'=>'cbsh','middleware'=>'CheckcbshLgOut','middleware'=>'CheckcbshLogin'],function(){
		Route::get('ds',function(){
    return view('gplx.cbsh.dshxe');
});
		// đăng nhập
		 // Route::get('/','LoginController@getLogin') ;

		// đưa ra trang chủ Home
		Route::get('home','homeController@gethome');

		Route::get('mail','MailController@mail');
		Route::get('detailmail','MailController@ctmail');


		Route::get('banner','BannerController@getbanner');
		Route::post('banner','BannerController@postbanner');
		Route::get('dsbanner','BannerController@dsbanner');
		Route::get('Showbanner/{id}','BannerController@Showbanner');
		Route::get('suabanner/{id}','BannerController@suabanner');
		Route::post('suabanner/{id}','BannerController@suapostbanner');
		Route::get('xoabanner/{id}','BannerController@xoabanner');



		Route::get('dshangxe','hxeController@getdshx');
		Route::get('themhangxe','hxeController@themhx');
		Route::post('dshangxe','hxeController@themposthx');
		Route::get('suahangxe/{id}','hxeController@suadshx');
		Route::post('suahangxe/{id}','hxeController@postsuadshx');
		Route::get('xoahangxe/{id}','hxeController@xoadshx');

		Route::get('themmota','MotaHANGXEcontroller@themmota');
		Route::post('themmota','MotaHANGXEcontroller@thempostmota');
		Route::get('dsmota','MotaHANGXEcontroller@getdsmt');
		Route::get('suamthangxe/{id}','MotaHANGXEcontroller@suamthx');
		Route::post('suamthangxe/{id}','MotaHANGXEcontroller@postsuamthx');
		Route::get('xoamthangxe/{id}','MotaHANGXEcontroller@xoamthangxe');



		Route::get('dschohoc','chhocController@getdsch');
		Route::post('dschohoc','chhocController@thempostch');
		 Route::get('suach/{id}','chhocController@suadsch');
		 Route::post('suach/{id}','chhocController@postsuadsch');
		 Route::get('xoach/{id}','chhocController@xoadsch');
		
		 Route::get('dschothi','chothiController@getdscth');
		 Route::post('dschothi','chothiController@thempostcth');
		 Route::get('suacth/{id}','chothiController@suadscth');
		 Route::post('suacth/{id}','chothiController@postsuadscth');
		 Route::get('xoacth/{id}','chothiController@xoadscth');

		Route::get('dsloailh','loailichhocController@getdsllh');
		Route::post('dsloailh','loailichhocController@thempostllh');
		Route::get('suallh/{id}','loailichhocController@suadsllh');
		Route::post('suallh/{id}','loailichhocController@postsuadsllh');
		Route::get('xoallh/{id}','loailichhocController@xoadsllh');

		Route::get('dslichthi','lichthiController@getlth');
		Route::post('dslichthi','lichthiController@thempostlt');
		Route::get('sualth/{id}','lichthiController@suadslth');
		Route::post('sualth/{id}','lichthiController@postsuadslt');
		Route::get('xoalth/{id}','lichthiController@xoadslt');

		Route::get('themgiaovien','GiaoVienController@themgv');
		Route::post('themgiaovien','GiaoVienController@thempostgv');
		Route::get('dsgiaovien','GiaoVienController@dsgv');
		Route::get('suagv/{id}','GiaoVienController@suagv');
		Route::post('suagv/{id}','GiaoVienController@postsuagv');
		Route::get('xoagv/{id}','GiaoVienController@xoagv');

		Route::get('saplt','SapLichThiController@saplt');
		Route::get('laynamthi/{namthi}','AjaxNamthiController@laynamthi');
		Route::post('saplt','SapLichThiController@thempcgv');

		Route::get('dslichthith','SapLichThiController@dslichthi');

		Route::get('dspc','SapLichThiController@dspc');
		Route::get('suabpc/{id}','SapLichThiController@suabpc');
		Route::post('suabpc/{id}','SapLichThiController@postsuabpc');
		Route::get('xoapc/{id}','SapLichThiController@xoapc');

		Route::get('dslophoc','lophocController@getdslh');
		Route::post('dslophoc','lophocController@thempostlh');
		Route::get('sualophoc/{id}','lophocController@suadslh');
		Route::post('sualophoc/{id}','lophocController@postsuadslh');
		Route::get('xoalophoc/{id}','lophocController@xoalh');

		Route::get('lichthilh','LophocLichthiController@saplt');
		Route::post('lichthilh','LophocLichthiController@thempostltlh');
		Route::get('sualichthilophoc/{id}','LophocLichthiController@sualtlh');
		Route::post('sualichthilophoc/{id}','LophocLichthiController@postsualtlh');
		Route::get('xoaltlh/{id}','LophocLichthiController@xoalh');

		Route::get('dslichhoc','lichhocController@dslichhoc');
		Route::get('themlichhoc','lichhocController@themlichhoc');
		Route::get('dslichhocth','lichhocController@dslichhocth');
		Route::post('themlichhoc','lichhocController@thempostdslichhoc');
		Route::get('sualichhoc/{id}','lichhocController@sualh');
		Route::post('sualichhoc/{id}','lichhocController@postsualh');
		Route::get('xoalh/{id}','lichhocController@xoalh');

		Route::get('dspdk','KetquaController@getds');

		Route::get('pdkhx/{id}','AjaxNamthiController@pdkhx');
		Route::get('pdkhxdau/{id}','AjaxNamthiController@pdkhxdau');
		Route::get('pdkhxrot/{id}','AjaxNamthiController@pdkhxrot');

		Route::get('ctpdk/{id}','KetquaController@ctpdk');
		Route::post('ctpdk/{id}','KetquaController@postctpdk');
		Route::get('dsdau','KetquaController@getdau');
		Route::get('ctpdkdau/{id}','KetquaController@ctpdkdau');
		Route::get('dsrot','KetquaController@getrot');
		Route::get('ctpdkrot/{id}','KetquaController@ctpdkrot');
		// Route::get('sualichhoc/{id}','lichhocController@sualh');
		// Route::post('sualichhoc/{id}','lichhocController@postsualh');
		// Route::get('xoalh/{id}','lichhocController@xoalh');
		

});
});
});
		Route::group(['namespace'=>'nguoidung'],function(){ 
			Route::group(['prefix'=>'gplx'],function(){// đường dẫn
				Route::group(['prefix'=>'nguoidung','middleware'=>'CheckcbshLgOut','middleware'=>'checnNguoiDungLogin'],function(){
				// 	Route::get('/', function () {
				//     return view('gplx.nguoidung.home');
				// });
				// 	Route::get('ttcanhan', function () {
				//     return view('gplx.nguoidung.ttcanhan');
				// });
		Route::get('ttcanhan','ttNguoidungcontroller@getttnd');
		Route::get('home','ttNguoidungcontroller@gethome');
		// Route::post('home','ttNguoidungcontroller@hometk');







		Route::get('themblx','BanglaixeController@themblx');
		Route::post('themblx','BanglaixeController@thempostblx');
		Route::get('dsbanglaixe','BanglaixeController@dsbanglaixe');
		Route::get('suablx/{id}','BanglaixeController@suablx');
		Route::post('suablx/{id}','BanglaixeController@postsuablx');
		Route::get('xoablx/{id}','BanglaixeController@xoablx');

		Route::get('thempdk','PhieudkController@thempdk');
		Route::get('thempdk/{id}','PhieudkController@thempdkid');
		Route::post('thempdk/{id}','PhieudkController@thempostpdk');
		Route::get('layhx/{hx}','AjaxNDController@layhx');
		Route::post('thempdk','PhieudkController@thempostpdk');
		Route::get('dspdk','PhieudkController@dspdk');
		Route::get('chitietpdk/{id}','PhieudkController@chitietpdk');
		// Route::get('suablx/{id}','BanglaixeController@suablx');
		// Route::post('suablx/{id}','BanglaixeController@postsuablx');
		 Route::get('xoapdk/{id}','PhieudkController@xoapdk');

		Route::get('paypal','Paymentcontroller@getpp');
		Route::post('paypal','Paymentcontroller@postpp');
		Route::get('status','Paymentcontroller@getstatus');

		Route::get('vnpay/{id}','VNpayController@getvn');
		Route::post('vnpay/{id}','VNpayController@create');
		// Route::get('ketqua','VNpayController@ketqua');
		 Route::get('vnpay1','VNpayController@return');


		
					
});
});
			Route::group(['prefix'=>'dangky'],function(){
		// đăng nhập
			Route::get('/','DangkyController@getdk') ;
			Route::post('/','DangkyController@postdk') ;
			
});
			Route::group(['prefix'=>'dangnhap'],function(){
		// đăng nhập
			Route::get('/','DangkyController@getdn') ;
			Route::post('/','DangkyController@postdn') ;
			
});




});
		Route::group(['namespace'=>'nguoidung'],function(){ 
			Route::group(['prefix'=>'/'],function(){
		// đăng nhập
			Route::get('/','NguoidungngoaiController@gethome') ;
			//Route::post('/','DangkyController@postdn') ;
			Route::get('timkiem','NguoidungngoaiController@hometk');
			
});
		});











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// baotri//
Route::get('site/shutdown',[
    'as' => 'maintenance-down',
    'uses'=>'HomeController@maintenance_down'
]);
Route::get('site/live',[
    'as' => 'maintenance-up',
    'uses'=>'HomeController@maintenance_up'
]);

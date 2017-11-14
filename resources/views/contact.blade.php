<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="sonta">

    <title>Nội thất BIG2D</title>

    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/freelancer.css') }}" rel="stylesheet">
    
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ URL::asset('js/freelancer.js') }}"></script>

  </head>

  <body id="page-top">
  
	<div class="vt_wrapper_drawer clearfix">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <!--<a class="navbar-brand js-scroll-trigger" href="index.html"><img id="logo" src="img/logo.png" style="max-height: 58px;"></a>-->
		<a class="navbar-brand js-scroll-trigger" href="{{URL::to('/')}}"><img id="logo" src="{{URL::to('/')}}/img/logo.png" class="logo-size-sm"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="{{URL::to('/')}}/product?product_id=21" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Giới thiệu
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="{{URL::to('/')}}/product?product_id=22">Về công ty</a>
				  <a class="dropdown-item" href="{{URL::to('/')}}/product?product_id=23">Hoạt động công ty</a>
				  <a class="dropdown-item" href="{{URL::to('/')}}/product?product_id=25">Hình thức thanh toán</a>
				  <a class="dropdown-item" href="{{URL::to('/')}}/product?product_id=27">Chính sách bảo hành, bảo trì</a>
				  <a class="dropdown-item" href="{{URL::to('/')}}/product?product_id=29">Chính sách bảo mật</a>
				</div>
			  </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}/products?cat_id=1">
				Sản phẩm</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dịch vụ</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
				  <a class="dropdown-item" href="{{URL::to('/')}}/product?product_id=41">Thiết kế kiến trúc và nội thất</a>
				  <a class="dropdown-item" href="{{URL::to('/')}}/product?product_id=43">Thi công kiến trúc và nội thất</a>
				  <a class="dropdown-item" href="{{URL::to('/')}}/product?product_id=45">Cải tạo nhà cửa</a>
				</div>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{URL::to('/')}}/products?cat_id=3">Dự án nổi bật</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{URL::to('/')}}/products?cat_id=5">Tin tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{URL::to('/')}}/contact">liên hệ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="portfolio" class="page-content">
      <div class="container">
        <!-- <h3 class="text-center">Liên hệ với chúng tôi</h3> -->
        <!-- <hr class="star-primary"> -->
        <div class="row">
		  <div class="col-lg-12">
			<div id="map2" style="width:100%;height:400px"></div>
		  </div>
		  <div class="col-xs-12">
			<div style="padding-left: 15px;font-size: 16px;line-height: 24px;    margin-bottom: 10px;">
                                                                <table style="border-bottom:1px dotted #ddd;margin:10px 0;">
                                    <tbody><tr>
                                        <th style="width:3%;border-bottom:none;"><i class="fa fa-building"></i></th>
                                        <td>Chi nhánh:&nbsp;CÔNG TY CỔ PHẦN PQMax</td>
                                    </tr>
                                    <tr>
                                        <th style="width:3%;border-bottom:none;"><i class="fa fa-map-marker"></i></th>
                                        <td>Địa chỉ:&nbsp;167 - Quan Nhân - Thanh Xuân Hà Nội, Việt Nam</td>
                                    </tr>
                                    <tr>
                                        <th style="width:3%;border-bottom:none;"><i class="fa fa-phone"></i></th>
                                        <td>Số điện thoại:&nbsp;098 769 67 47</td>
                                    </tr>
                                    <tr>
                                        <th style="width:3%;border-bottom:none;"><i class="fa fa-envelope"></i></th>
                                        <td>Email:&nbsp;noithatpqmax@gmail.com</td>
                                    </tr>
                                </tbody></table>
                                                                <!-- <table style="border-bottom:1px dotted #ddd;margin:10px 0;">
                                    <tbody><tr>
                                        <th style="width:3%;border-bottom:none;"><i class="fa fa-building"></i></th>
                                        <td>Chi nhánh:&nbsp;CHI NHÁNH TẠI TP. HỒ CHÍ MINH - CTY CỔ PHẦN BIG2D</td>
                                    </tr>
                                    <tr>
                                        <th style="width:3%;border-bottom:none;"><i class="fa fa-map-marker"></i></th>
                                        <td>Địa chỉ:&nbsp;Số 12, Đường 20, KDC Tân Mỹ, P. Tân Phú, Quận 7, TP. Hồ Chí Minh, Việt Nam</td>
                                    </tr>
                                    <tr>
                                        <th style="width:3%;border-bottom:none;"><i class="fa fa-phone"></i></th>
                                        <td>Số điện thoại:&nbsp;028 2229 9898</td>
                                    </tr>
                                    <tr>
                                        <th style="width:3%;border-bottom:none;"><i class="fa fa-envelope"></i></th>
                                        <td>Email:&nbsp;big2d.hcm@gmail.com</td>
                                    </tr>
                                </tbody></table> -->
                                                            </div>
		  </div>
          <div class="col-lg-12 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="3" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="col-md-12">
          <div class="row">
			<div class="footer-col col-md-4">
              <h5>Giới thiệu PQMaX</h5>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <div class="container">
				<h4 class="text-center">Liên hệ với chúng tôi</h4>
				<div class="row">
				  <div class="col-lg-12 mx-auto">
					<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
					<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form name="sentMessage" id="contactForm" novalidate>
					  <div class="control-group">
						<div class="form-group controls">
						  <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
						  <p class="help-block text-danger"></p>
						</div>
					  </div>
					  <div class="control-group">
						<div class="form-group controls">
						  <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
						  <p class="help-block text-danger"></p>
						</div>
					  </div>
					  <div class="control-group">
						<div class="form-group controls">
						  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
						  <p class="help-block text-danger"></p>
						</div>
					  </div>
					  <div class="control-group">
						<div class="form-group controls">
						  <textarea class="form-control" id="message" rows="2" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
						  <p class="help-block text-danger"></p>
						</div>
					  </div>
					  <div class="control-group">
						<button type="submit" class="btn btn-success" id="sendMessageButton">Send</button>
					  </div>
					</form>
				  </div>
				</div>
			  </div>
            </div>
            <div class="footer-col col-md-4">
				<div id="map" style="width:100%;height:300px"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
			<div class="col-xs-6 mx-auto text-left">
				<span style="line-height: 16.7999992370605px; color: #39b54a;">CÔNG TY CỔ PHẦN PQMaX</span><br style="line-height: 16.7999992370605px;">
				<span style="line-height: 16.7999992370605px;">Hà Nội: Số 8/C8B, ngõ 121 Trần Phú, Văn Quán, Hà Đông</span><br>
				<span style="line-height: 16.7999992370605px;">Hotline: 098 769 67 47 - 098 769 67 47 - BP Kỹ thuật: 098 769 67 47</span><br>
				<!-- <hr style="border-bottom: 1px solid #444;margin: 10px 0;">
				<hr style="border-bottom: 1px solid #444;margin: 10px 0;"> -->
				<span style="line-height: 16.7999992370605px;">Email: <span style="color: #c0c0c0;"><a ondragstart="return false;" href="mailto:info@beldecor.vn"><span style="color: #999999;">noithatpqmax@gmail.com</span></a></span></span>
				<a ondragstart="return false;" style="line-height: 16.7999992370605px;" href="mailto:big2d.vn@gmail.com"></a>
				<span style="line-height: 16.7999992370605px;">&nbsp;- Website: <a style="color:white" href="https://www.pqmax.com.vn/">www.pqmax.com.vn/</a></span><br style="line-height: 16.7999992370605px;">
				<a ondragstart="return false;" style="line-height: 16.7999992370605px;" href="http://noithatbig2d.vn/"></a>
				<span style="line-height: 16.7999992370605px;">Copyright 2017 © PQMaX Corporation.&nbsp;All rights reserved.&nbsp;</span>			
			</div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    <script>
		function initMap() {
        var uluru = {lat: 20.984876, lng:  105.790639};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
	  function initMap2() {
        var uluru = {lat: 20.984876, lng:  105.790639};
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL-eD7dl9VJNPLqzKfQSpDoKvzmyQBwYU&callback=initMap"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL-eD7dl9VJNPLqzKfQSpDoKvzmyQBwYU&callback=initMap2"></script>
</body>

</html>

    
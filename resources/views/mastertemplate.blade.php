<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="sonta">

    <title>Nội thất PQMax</title>

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
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
	<div class="vt_wrapper_drawer clearfix">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <!--<a class="navbar-brand js-scroll-trigger" href="index.html"><img id="logo" src="img/logo.png" style="max-height: 58px;"></a>-->
		<a class="navbar-brand js-scroll-trigger" href="{{URL::to('/')}}"><img id="logo" src="{{URL::to('/')}}/img/logo.png" class="logo-size-lg"></a>
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
              <a class="nav-link dropdown-toggle" href="{{URL::to('/')}}/product?product_id=64" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Dịch vụ</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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

    @yield('content') 

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="col-md-12">
          <div class="row">
			    <div class="footer-col col-md-4">
              <h6>FANPAGE FACEBOOK</h6>
              <div class="fb-page">
              <img class="img-fluids" style="width:100%;height:220px" src="{{ URL::asset('img/slide1.png')}}">
              <div class="img-overlay">
                <a href="https://www.facebook.com/pg/noithatpqmax/about/?ref=page_internal" target="_blank" title="Facebook" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-fw"></i> Thích trang</a>
                <a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=https://www.facebook.com/pg/noithatpqmax/about/?ref=page_internal&p[images][0]=&p[title]=Title%20Goes%20Here&p[summary]=Description%20goes%20here!" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><button type="button" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"></i> Chia sẻ</button></a>
              </div>
              </div>
              <!-- <div class="fb-page" 
                data-href="https://web.facebook.com/noithatpqmax/"
                data-hide-cover="false"
                data-show-facepile="false"></div> -->
            </div>  
            <div class="footer-col col-md-4">
              <div class="container">
				<h6 class="text-center">Liên hệ với chúng tôi</h6>
				<div class="row">
				  <div class="col-lg-12 mx-auto">
					<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
					<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form name="sentMessage" id="contactForm" novalidate action="https://goo.gl/DS14hj" target="_blank">
					  <div class="control-group">
						<div class="form-group controls">
						  <input class="form-control" id="name" name='name' type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
						  <p class="help-block text-danger"></p>
						</div>
					  </div>
					  <div class="control-group">
						<div class="form-group controls">
						  <input class="form-control" id="email" name='email' type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
						  <p class="help-block text-danger"></p>
						</div>
					  </div>
					  <div class="control-group">
						<div class="form-group controls">
						  <input class="form-control" id="phone" name='phone' type="text" placeholder="Phone Number" data-validation-required-message="Please enter your phone number.">
						  <p class="help-block text-danger"></p>
						</div>
					  </div>
					  <div class="control-group">
						<div class="form-group controls">
						  <textarea class="form-control" id="message" name='message' rows="2" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
						  <p class="help-block text-danger"></p>
						</div>
					  </div>
					  <div class="control-group">
						<button type="submit" class="btn btn-success" id="sendMessageButton">
            <!-- <a href="https://goo.gl/DS14hj"> -->
              Send
            </button>
					  </div>
					</form>
				  </div>
				</div>
			  </div>
            </div>
            <div class="footer-col col-md-4">
            <h6 class="text-center">Google map tới PQMaX</h6>
				<div id="map" style="width:100%; height:220px;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
			<div class="col-xs-6 mx-auto text-left">
				<span style="color: #39b54a;">CÔNG TY CỔ PHẦN PQMaX</span><br >
				<span >167 - Quan Nhân - Thanh Xuân Hà Nội</span><br>
				<span >Hotline: 098 769 67 47 - BP Kỹ thuật: 098 769 67 47</span><br>
				<!-- <hr style="border-bottom: 1px solid #444;margin: 10px 0;">
				<hr style="border-bottom: 1px solid #444;margin: 10px 0;"> -->
				<span >Email: <span style="color: #c0c0c0;"><a ondragstart="return false;" href="mailto:info@beldecor.vn"><span style="color: #999999;">noithatpqmax@gmail.com</span></a></span></span>
				<span >&nbsp;- Website: <a style="color:white" href="https://www.pqmax.com.vn/">www.pqmax.com.vn</a></span><br >
				<span >Copyright 2016 © PQMax Corporation.&nbsp;All rights reserved.&nbsp;</span>			
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


    <!-- Bootstrap core JavaScript -->
   
	<script>
		function initMap() {
        var uluru = {lat: 21.003550, lng: 105.811129};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    $('#navbarDropdownMenuLink').on('click',function(){
      window.location.href = $(this).attr('href');
    });  
	</script>
  
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL-eD7dl9VJNPLqzKfQSpDoKvzmyQBwYU&callback=initMap"></script>
  </body>

</html>

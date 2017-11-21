@extends('mastertemplate')
@section('content')
    <!-- Header -->
    <header class="masthead">
    <div class="	">
      <div id="carouselExampleIndicators" class="carousel slide d-none d-sm-block" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="{{URL::to('/')}}/img/slide2.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <!--<h5>Liên hệ:</h5>
              <p>0918 218 691 - sontrananhmta@gmail.com</p>-->
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{URL::to('/')}}/img/slide1.png" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                  <!--<h5>Liên hệ:</h5>
                  <p>0918 218 691 - sontrananhmta@gmail.com</p>-->	
              </div>	
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{URL::to('/')}}/img/slide3.png" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                  <!--<h5>Liên hệ:</h5>
                  <p>0918 218 691 - sontrananhmta@gmail.com</p>-->	
              </div>	

          </div>
        </div>
      <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>-->
      </div>
      <!--<img class="img-fluid" src="img/profile.png" alt="">
      <div class="intro-text">
        <span class="name">Start Bootstrap</span>
        <hr class="star-light">
        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
      </div>-->
    </div>
  </header>
  
  <!-- About Section -->
  <section class="success portfolio-content"  >
    <div class="container">
            <div class="row">
          <div class="col-sm-4">
              <div  style="padding-bottom:15px;">
                  <a href="https://goo.gl/DS14hj">
                      <img src="{{URL::to('/')}}/img/dangkituvan.png" class="rounded img-fluid">
                  </a>
              </div>
              
          </div>
          <div class="col-sm-4">
              <div style="padding-bottom:15px;">
              <a href="{{URL::to('/')}}/contact">
                  <img src="{{URL::to('/')}}/img/dathangsanpham.png"class="rounded img-fluid">
              </a>
              </div>
          </div>
          <div class="col-sm-4">
              <div style="padding-bottom:15px;">
                  <img src="{{URL::to('/')}}/img/lienhetuvan.png" class="rounded img-fluid">
              </div>
          </div>
      </div>	
      <!-- <h2 class="text-center">Dịch vụ</h2> -->
     <!-- <hr class="star-light"> -->
      <div class="row">
        @foreach ($services as $service)
        <div class="col-sm-4 portfolio-item">
          <a class="portfolio-link" href="{{URL::to('/')}}/product?product_id={{$service->id}}" >
            <div class="caption2">
              <div class="caption-content">
                <b>{{$service->title}}</b>
              </div>
            </div>
            <img class="img-fluid" src="{{$service->image}}" alt="{{$service->title}}">
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <div  class= "">
    <img class="img-fluid" src="img/backgroud-giua.png">
  </div>
  
    <!-- Portfolio Grid Section -->
  
  <section class="success portfolio-content">
  
    <div class="container">
     <!-- <h2 class="text-center">Tin tức</h2> -->
     <!-- <hr class="star-light"> -->
      <div >
          <p>
           <img style="width: 100%; box-shadow: #444444 0px 6px 6px -6px; height: auto;" alt="banner-beldecor-vn giua" src="{{URL::to('/')}}/img/banner-beldecor-vn_giua.png" height="300" width="1000">
          </p>
      </div>
      <div class="row">
        @foreach ($informations as $information)
        <div class="col-sm-3 portfolio-item">
          <a class="portfolio-link" href="{{URL::to('/')}}/product?product_id={{$information->id}}" >
            <div class="caption2">
              <div class="caption-content">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{$information->image}}" alt="{{$information->title}}">
          </a>
          <span><b>{{$information->title}}</b></span>
        </div>
        @endforeach
      </div>
    </div>
    <hr style="margin-bottom:0px">
  </section>
  
  <section class="success portfolio-content">
    <div class="container">
     <!-- <h2 class="text-center">Dự án nổi bật</h2> -->
      <!--<hr class="star-primary"> -->
      <div class="custom">
          <p class="text-center">
           <img class="img-fluid" alt="banner-beldecor-vn giua" src="{{URL::to('/')}}/img/duantieubieu.png" style="display: block; margin-left: auto; margin-right: auto;">
          </p>
      </div>
      <div class="row">
        @foreach ($highlights as $highlight)
        <div class="col-sm-4 portfolio-item">
          <a class="portfolio-link" href="{{URL::to('/')}}/product?product_id={{$highlight->id}}" >
            <div class="caption2">
              <div class="caption-content">
                <b>{{$highlight->title}}</b>
              </div>
            </div>
            <img class="img-fluid" src="{{$highlight->image}}" alt="{{$highlight->title}}">
          </a>
        </div>
        @endforeach 
      </div>
    </div>
  </section>
@endsection
@extends('mastertemplate')
@section('content')
    <section id="portfolio" class="page-detail-content">
        <img class="img-fluid" src="{{ URL::asset('img/banner-trang-con.png')}}" alt="banner" style="margin-bottom:10px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- <h3 class="text-center" id="product-title"></h3> -->
                    <!-- <hr class="star-primary"> -->
                    <div id="product-content" style="padding-bottom: 15px">
                    </div>
                     
                </div>
                <div class="hidden-sm-down col-lg-3">
					<div class="row">
						<div class="col-log-12" style="margin:auto">
								<div class="text-center">
									<i class="fa fa-home" aria-hidden="true"></i><b>Hotline Tư Vấn</b>
								</div>
							<div>
								<p class="text-center">
									<img alt="hotro" src="{{ URL::asset('img/lienhetuvan.png')}}" height="163" width="242" style="margin-bottom: 10px; padding: 15px; border: 1px solid #dddddd; border-radius: 15px; box-shadow: rgba(255, 255, 255, 0.85098) 0px 2px 0px inset, rgba(0, 0, 0, 0.0784314) 0px 0px 10px inset, rgba(0, 0, 0, 0.0470588) 0px 1px 1px, rgba(0, 0, 0, 0.0784314) 0px 7px 4px -4px; display: block; margin-left: auto; margin-right: auto; background-color: #ffffff;">
								</p>
								<p class="text-center" style="font-size:11px">Email: sontrananhmta@gmail.com</p>
							</div>
						</div>
					</div>
					<hr>
					<div class="row" style="margin-top:10px">
                        <div class="col-log-12" style="margin:auto">
								<div class="text-center">
									<i class="fa fa-home" aria-hidden="true"></i><b>TIN TỨC MỚI NHẤT</b>
								</div>
						</div>
					</div>
                    @foreach ($informations as $key=>$news)
                        <div class="row">
                            <div class="col-log-12" style="margin:auto">
                                <p class="text-center">
                                <a ondragstart="return false;" target="_parent" title="{{$news->title}}" href="{{URL::to('/')}}/product?product_id={{$news->id}}">
                                    <img ondragstart="return false;" src="{{$news->image}}" alt="{{$news->title}}" 
                                        style="width:250px" title="{{$news->title}}">
                                </a>
                                </p>
                                <p class="text-center" style="font-size:11px; margin-bottom: 0px">
                                <b><a ondragstart="return false;" class="bt-title" target="_parent" title="{{$news->title}}" href="{{URL::to('/')}}/product?product_id={{$news->id}}"> 
                                    {{$news->title}}
                                </a></b></p>
                            </div>
                        </div>
                        @if ( $key+1 != count($informations)) 
                            <hr>
                        @else
                            <div style="margin-bottom: 12px">
                        @endif
                        
                    @endforeach	
							
				</div>
            </div>
        </div>
    </section>
    <script>
        $(function() {
            $.ajax({
                type:'POST',
                url:'{{URL::to('/')}}/product/view',
                data:{
                    '_token': '<?php echo csrf_token() ?>',
                    id: {{$product}},
                },
                success:function(data){
                   $('#product-content').append(data.product.content);
                   $('#product-title').append(data.product.title);
                },
                error: function (xhr) {
                    alert(JSON.stringify(xhr.responseText).replace(/\\"/g, ' ').replace(/"/g, ''));  
                }
            }); 
        })
    </script>
    @endsection
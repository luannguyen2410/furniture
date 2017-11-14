@extends('mastertemplate')
@section('content')
    <section id="portfolio" class="page-content portfolio-content">
        <div class="container">
            <!-- <h2 class="text-center">{{$category->name}}</h2> -->
            <!-- <hr class="star-primary"> -->
            <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-4 portfolio-item">
                <span><i class="fa fa-home" aria-hidden="true"></i><b>{{$product->title}}</b></span>
                <a class="portfolio-link" href="{{URL::to('/')}}/product?product_id={{$product->id}}">
                    <div class="caption">
                    <div class="caption-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                    </div>
                    </div>
                    <img class="img-fluid" src="{{$product->image}}" alt="{{$product->title}}" >
                </a>
                </div>
                            
            @endforeach	
            </div>
        </div>
    </section>
    @endsection
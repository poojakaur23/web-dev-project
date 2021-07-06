@extends('master')
@section("content")

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
      @foreach( $products as $item )
          <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="{{ $loop->index }} " class="{{ $loop->first ? 'active' : '' }}"></li>
          @endforeach
      </ol>
       <!-- Inner -->

  <!-- Inner -->
      <div class="carousel-inner">
        @foreach ($products as $item)
          <div class="carousel-item {{$item['id']==1?'active':' '}}">
            {{-- <a href="detail/{{$item['id']}}"> --}}
              <div class="container">
                  <div class="row p-5">
                      <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                          <img class="img-fluid" src="{{$item['gallery']}}" alt="">
                      </div>
                      <div class="col-lg-6 mb-0 d-flex align-items-center">
                          <div class="text-align-left align-self-center">
                              <h1 class="h1 text-success">{{$item['name']}}</h1>
                              <h3 class="h2">{{$item['description']}}</h3>
                             
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          @endforeach
      </div>
      <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
          <i class="fas fa-chevron-left"></i>
      </a>
      <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
          <i class="fas fa-chevron-right"></i>
      </a>
  </div>
  <!-- End Banner Hero -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
      <div class="row text-center pt-3">
          <div class="col-lg-6 m-auto">
              <h1 class="h1">Trending products</h1>
          </div>
      </div>
      <div class="row">
        @foreach ($products as $item)
          <div class="col-12 col-md-4 p-5 mt-3">          
              <a href="detail/{{$item['id']}}"><img src="{{$item['gallery']}}" class="rounded-circle img-fluid border"></a>
              <h5 class="text-center mt-3 mb-3">{{$item['name']}}</h5>
              <p class="text-center"><a href="detail/{{$item['id']}}" class="btn btn-success">Go Shop</a></p>
          </div>
          @endforeach

      </div>
  </section>
  <!-- End Categories of The Month -->



@endsection
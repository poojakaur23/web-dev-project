@extends('master')
@section("content")
<div class="container custom-product">
<!-- Carousel wrapper -->
<div
  id="carouselBasicExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->

  <div class="carousel-indicators ">
    @foreach( $products as $item )
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="{{ $loop->index }} "
      class="{{ $loop->first ? 'active' : '' }}"
      aria-current="true"
      aria-label="Slide 1"
    ></button>

    @endforeach
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    @foreach ($products as $item)
        <!-- Single item -->
        <div class="carousel-item {{$item['id']==1?'active':' '}}">
            <a href="detail/{{$item['id']}}">
                <img
                src="{{$item['gallery']}}"
                class="slider-img"
                //alt="..."
              />
              <div class="carousel-caption slider-text">
                <h5 >{{$item['name']}}</h5>
                <p>{{$item['description']}}</p>
              </div>
            </a>
          </div>
    @endforeach


  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
<div class="trending-wrapper">
    <h3>Trending products</h3>
  
        @foreach ($products as $item)
            <!-- Single item -->
            <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                <img
                  src="{{$item['gallery']}}"
                  class="trending-img"
                  //alt="..."
                />
                <div class=" ">
                    <h5 >{{$item['name']}}</h5>
                   
                </div>
                </a>
              </div>
     
    @endforeach
    
      
</div>
</div>
@endsection
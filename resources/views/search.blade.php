@extends('master')
@section("content")
<div class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Search Results</h1>
        </div>
    </div>
          <div class="row">
            @foreach ($products as $item)
              <div class="col-md-4">
              
                  <div class="card mb-4 product-wap rounded-0">
                    <form action="/add_to_cart" method="POST" >
                      <div class="card rounded-0">
                          <img class="card-img rounded-0 img-fluid" src="{{$item['gallery']}}">
                          <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            
                              <ul class="list-unstyled">
                                  <li><a class="btn btn-success text-white" href="detail/{{$item['id']}}"><i class="far fa-heart"></i></a></li>
                                  <li><a class="btn btn-success text-white mt-2" href="detail/{{$item['id']}}"><i class="far fa-eye"></i></a></li>
                                  @csrf
                                  
                                  <li><button class="btn btn-success text-white mt-2" ><input type="hidden" name="product_id" value={{$item['id']}}><i class="fas fa-cart-plus"></i></button></li>
                              </ul>
                              
                          </div>
                      </div>
                      </form>  
                      <div class="card-body">
                       
                          <a href="detail/{{$item['id']}}" class="h3 text-decoration-none">{{$item['name']}}</a>
                          <ul class="list-unstyled d-flex justify-content-center mb-1">
                              <li>
                                  <i class="text-warning fa fa-star"></i>
                                  <i class="text-warning fa fa-star"></i>
                                  <i class="text-warning fa fa-star"></i>
                                  <i class="text-muted fa fa-star"></i>
                                  <i class="text-muted fa fa-star"></i>
                              </li>
                          </ul>
                          <p class="text-center mb-0">£{{$item['price']}}</p>
                        
                      </div>
                  </div>
                
              </div>
              @endforeach
          </div>
</div>

<script></script>
@endsection

 
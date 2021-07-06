  
@extends('master')
@section("content")
<div class="container py-5">
  <div class="row">

      <div class="col-lg-3">
          <h1 class="h2 pb-4">Cart List</h1>
          <ul class="list-unstyled templatemo-accordion">
                <a class="btn btn-success" href="ordernow">Place Order</a> <br> <br>
          </ul>
             
      </div>

      <div class="col-lg-9">          
          <div class="row">
            @foreach($products as $item)
              <div class="col-md-4">
                  <div class="card mb-4 product-wap rounded-0">
                      <div class="card rounded-0">
                          <img class="card-img rounded-0 img-fluid" src="{{$item->gallery}}">
                          <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                              <ul class="list-unstyled">
                                  <li><a class="btn btn-success text-white" href="/removecart/{{$item->cart_id}}"><i  class="fas fa-trash-alt"></i></a></li>
                                 
                              </ul>
                          </div>
                      </div>
                      <div class="card-body">
                          <a href="" class="h3 text-decoration-none">{{$item->name}}</a>
                          <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                          <li> <p class="text-center mb-0">£{{$item->price}}</p></li>
                          </ul>
                         
                      </div>
                  </div>
              </div>
              @endforeach
              
          </div>

      </div>

  </div>
</div>
@endsection 

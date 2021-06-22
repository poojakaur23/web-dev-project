  
@extends('master')
@section("content")
<div class="container custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            @foreach($products as $item)
            <div class="card mb-3 cart-list-devider" style="max-height: 200px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="{{$item->gallery}}" class="card-img cart-img" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text"><small class="text-muted">{{$item->description}}</small></p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <a href="/removecart/" class="btn btn-warning" >Remove to Cart</a>
               </div>
              </div>
            </div>

            @endforeach
          </div>
        

     </div>
</div>
@endsection 
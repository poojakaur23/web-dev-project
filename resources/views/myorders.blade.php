  
@extends('master')
@section("content")
<div class="container">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4><br><br>            
            @foreach($orders as $item)
            <div class="card mb-3 cart-list-devider" style="max-height: 400px;min-height: 200px">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="{{$item->gallery}}" class="card-img order-img" style="height: 200px;width: 170px;" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title">Name: {{$item->name}}</h5>
                    <p class="card-text"><small class="text-muted">Delivery Status: {{$item->status}}</small></p>
                    <p class="card-text"><small class="text-muted">Address: {{$item->address}}</small></p>
                    <p class="card-text"><small class="text-muted">Payment Status: {{$item->payment_status}}</small></p>
                    <p class="card-text"><small class="text-muted">Payment Method: {{$item->payment_method}}</small></p>
                  </div>
                </div>
 
              </div>
            </div>

            @endforeach
          </div>
        

     </div>
</div>
@endsection 

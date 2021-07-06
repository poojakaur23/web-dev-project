  
@extends('master')
@section("content")
<div class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Order List</h1>
        </div>
    </div>
        @foreach($orders as $item)
          <div class="row">

              <div class="col-12 col-md-4 p-5 mt-3">
               
                  <div class="card mb-3 product-wap rounded-0">
                      <div class="card rounded-0">
                          <img class="card-img rounded-0 img-fluid" src="{{$item->gallery}}">                          
                      </div>
    
                  </div>
                 
              </div>
              <div class="col-12 col-md-4 p-5 mt-3">
              <div class="card-body">
                <h5 class="card-title">Name: {{$item->name}}</h5>
                <p class="card-text"><small class="text-muted">Delivery Status: {{$item->status}}</small></p>
                <p class="card-text"><small class="text-muted">Address: {{$item->address}}</small></p>
                <p class="card-text"><small class="text-muted">Payment Status: {{$item->payment_status}}</small></p>
                <p class="card-text"><small class="text-muted">Payment Method: {{$item->payment_method}}</small></p>
            
            </div>
              </div>
              
          </div>
          @endforeach
 
</div>
@endsection 

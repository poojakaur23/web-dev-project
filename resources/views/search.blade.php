@extends('master')
@section("content")
<div class="container custom-product">
    <h4>Search result</h4>
 <div class="col-sm-4">
     <a href="#">Filter</a>
 </div>

    

    @foreach ($products as $item)
    <div class="card searched-item col-sm-4">
        <img
          src="{{$item['gallery']}}"
          class="card-img-top searched-item-img"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">{{$item['name']}}</h5>
          <p class="card-text">
            {{$item['description']}}
          </p>
          <a href="detail/{{$item['id']}}" class="btn btn-primary">detail</a>
        </div>
      </div>
       @endforeach

 
<br><br>
</div>
@endsection
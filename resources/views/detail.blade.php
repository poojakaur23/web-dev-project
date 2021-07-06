@extends('master')
@section("content")
<div class="container pb-5">
  <div class="row">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Product Detail</h1>
        </div>
    </div>
      <div class="col-lg-5 mt-5">
          <div class="card mb-3">
              <img class="card-img img-fluid" src="{{$product['gallery']}}" alt="Card image cap" id="product-detail">
          </div>

      </div>
      <!-- col end -->
      <div class="col-lg-7 mt-5">
          <div class="card">
              <div class="card-body">
                  <h1 class="h2">{{$product['name']}}</h1>
                  <p class="h3 py-2">£{{$product['price']}}</p>
                 
                  <ul class="list-inline">
                      <li class="list-inline-item">
                          <h6>Category:</h6>
                      </li>
                      <li class="list-inline-item">
                          <p class="text-muted"><strong>{{$product['category']}}</strong></p>
                      </li>
                  </ul>

                  <h6>Description:</h6>
                  <p>{{$product['description']}}</p>
                  <ul class="list-inline">
                      <li class="list-inline-item">
                          <h6>Avaliable Color :</h6>
                      </li>
                      <li class="list-inline-item">
                          <p class="text-muted"><strong>White / Black</strong></p>
                      </li>
                  </ul>

       
                  <form action="/add_to_cart" method="POST" >
                      <input type="hidden" name="product-title" value="Activewear">
                      <div class="row">
                          <div class="col-auto">
                              <ul class="list-inline pb-3">
                                  <li class="list-inline-item">Size :
                                      <input type="hidden" name="product-size" id="product-size" value="S">
                                  </li>
                                  <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                  <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                  <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                  <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                              </ul>
                          </div>

                      </div>
                      <div class="row pb-3">
                          <div class="col d-grid">
                              <button onClick="location.href='/'" type="button" class="btn btn-success btn-lg" name="submit" value="buy"> Go back</button>
                          </div>
                          <div class="col d-grid">
                            
                              @csrf
                              <input type="hidden" name="product_id" value="{{$product['id']}}">
                              <button  class="btn btn-success btn-lg" >Add To Cart</button>
                           
                          </div>
                      </div>
                  </form>

              </div>
          </div>
      </div>
  </div>
</div>

@endsection

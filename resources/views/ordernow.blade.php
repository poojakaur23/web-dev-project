  
@extends('master')
@section("content")

<div class="container ">

     <div class="col sm-10"><br>
        <form action="/placeOrder" method="POST" >     
            @csrf  
 
          <div class="row">
 
            <div class="col-md-8 mb-4">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">Biling details</h5>
                </div>
                <div class="card-body">
                  <form  >     
                      
                    <!-- Text input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form6Example4" name ="address1" class="form-control" />
                      <label  class="form-label" for="form6Example4">Address</label>
                    </div>
                 
                    <div class="form-outline mb-4">
                      <input type="text" id="form6Example5" name="address2" class="form-control" />
                      <label class="form-label" for="form6Example5">City</label>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form6Example5" name="address3" class="form-control" />
                      <label class="form-label" for="form6Example5">Country</label>
                    </div>
          
                    <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" id="form6Example1" name ="address4"class="form-control" />
                            <label class="form-label" for="form6Example1">Post Code</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" id="form6Example2" class="form-control" />
                            <label class="form-label" for="form6Example2">Phone</label>
                          </div>
                        </div>
                      </div>
                      <div class="card-header py-3">
                        <h5 class="mb-0">Debit Card</h5>
                      </div>
                                              
                      <!-- Text input -->
                      <div class="form-outline mb-4">
                        <input type="text" id="form6Example4"  value="debit card" name ="payment" class="form-control" />
                        <label  class="form-label" for="form6Example4">Name on the Card</label>
                      </div>
                   
                      <div class="form-outline mb-4">
                        <input type="text" id="form6Example5" value="debit card" name="payment" class="form-control" />
                        <label class="form-label" for="form6Example5">Card Number</label>
                      </div>

            
                      <div class="row mb-4">
                          <div class="col">
                            <div class="form-outline">
                              <input type="text" id="form6Example1"  value="debit card" name ="payment"class="form-control" />
                              <label class="form-label" for="form6Example1">CCV</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-outline">
                              <input type="text" id="form6Example2" value="debit card" name="payment" class="form-control" />
                              <label class="form-label" for="form6Example2">Expiration</label>
                            </div>
                          </div>
                        </div>
                  </form>
                </div>
              </div>
            </div>
          
            <div class="col-md-4 mb-4">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">Summary</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                      Amount
                      <span>?? {{$total}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      Delivery
                      <span>?? 5.99</span>
                    </li>
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                      <div>
                        <strong>Total amount</strong>
                        <strong>
                          <p class="mb-0">(including VAT)</p>
                        </strong>
                      </div>
                      <span><strong>?? {{$total +5.99}}</strong></span>
                    </li>
                  </ul>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Make purchase
                  </button>

               
                </div>
              </div> 
           
            </div>
          </div>
        </form>
                          
    
     </div>

</div>

@endsection 
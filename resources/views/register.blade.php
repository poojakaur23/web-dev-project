@extends('master')
@section("content")
<div class="container py-5" ">
  <div class="row text-center pt-3">
    <div class="col-lg-6 m-auto">
        <h1 class="h1">Register</h1>
    </div>
</div>
    <div class="row">
        <div class="col-md-6 m-auto">
        <form action="/register" method="POST">
            @csrf       
              <!-- Name input -->
              
              <div class="form-group mb-4">
                <label class="form-label" for="registerName">Name</label>
                <input type="text" name="registerName" class="form-control" />
               
              </div>        
              <!-- Email input -->
              <div class="form-group mb-4">
                <label class="form-label" for="registerEmail">Email</label>
                <input type="email" name="registerEmail" class="form-control" />
                
              </div>
        
              <!-- Password input -->
              <div class="form-group mb-4">
                <label class="form-label" for="registerPassword">Password</label>
                <input type="password" name="registerPassword" class="form-control" />
                
              </div>

        
              <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
                <input
                  class="form-check-input me-2"
                  type="checkbox"
                  value=""
                  id="registerCheck"
                  checked
                  aria-describedby="registerCheckHelpText"
                />
                <label class="form-check-label" for="registerCheck">
                  I have read and agree to the terms
                </label>
              </div>
        
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
        </form>
    </div>
</div>
<br><br>
</div>
@endsection


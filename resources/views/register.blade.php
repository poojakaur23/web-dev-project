@extends('master')
@section("content")
<div class="container ">
    <br><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <form action="/register" method="POST">
            @csrf       
              <!-- Name input -->
              <div class="form-outline mb-4">
                <input type="text" name="registerName" class="form-control" />
                <label class="form-label" for="registerName">Name</label>
              </div>        
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="registerEmail" class="form-control" />
                <label class="form-label" for="registerEmail">Email</label>
              </div>
        
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="registerPassword" class="form-control" />
                <label class="form-label" for="registerPassword">Password</label>
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
              <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
        </form>
    </div>
</div>
<br><br>
</div>
@endsection


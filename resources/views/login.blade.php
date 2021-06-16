@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-md-6 offset-md-3">

        <form action="/login" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
                @csrf
            <input type="email" id="email" name="email" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
            </div>
        
            <!-- Password input -->
            <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
            </div>
        
  
        
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
        
            <!-- Register buttons -->
            <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>
        
            <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>
        
            <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>
        
            <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
@extends('master')
@section("content")
@include('flash-message')
<div class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Login</h1>
        </div>
    </div>
    <div class="row">
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error:</strong> {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        <div class="col-md-6 m-auto">
           
        <form id="submit"action="/login" method="POST">
            <!-- Email input -->
            <div class="form-group  mb-4">
                @csrf
                <label class="form-label" for="form2Example1">Email address</label>
            <input type="email" id="email" name="email" class="form-control" />
           
            </div>
        
            <!-- Password input -->
            <div class="form-group  mb-4">
                <label class="form-label" for="form2Example2">Password</label>
            <input type="password" id="password" name="password" class="form-control" />
            
            </div>
        
  
        
            <!-- Submit button -->
            <button type="submit" id="submit" class="btn btn-primary btn-block mb-4">Login</button>
        
            <!-- Register buttons -->
            <div class="text-center">
            <p>Not a member? <a href="/register">Register</a></p>
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
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<script>
    $(document).ready(function () {
    $('#submit').validate({
rules: {
    email: {
        required: true,
        minlength: 5,
        maxlength: 18
    },
    password: {
        required: true,
        minlength: 5,
        maxlength: 14
    }
},
submitHandler: submitForm
});
function submitForm(){
        var strAjax = $('#submit').serialize(); // get the input values
        $.ajax({
            type: 'POST',
            url: '/login',
            data: strAjax,
            cache: false,
            success: function(data) {
    alert(data);
                if(data == true) {
                    window.location.href = "/"; // if response is true, then user can go home page
                }
                else {
      alert("false"); // this is just for control purpose
                }
            }
        });
        return false;
        }
});
</script>
@endsection


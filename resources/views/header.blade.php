<?php
use App\Http\Controllers\ProductController;
$totalCart=0;
if(Session::has('user'))
{
  $totalCart=ProductController::cartItem();
}

?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        {{-- Logo image --}}
        <a class="navbar-brand mt-2 mt-lg-0" href="/">
          <img
            src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
            height="15"
            alt=""
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>       
        <span class='badge badge-warning' id='lblCartCount'> {{$totalCart}} </span>
        </a>
        <!-- Avatar -->
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
       
          <img
            src="https://mdbootstrap.com/img/new/avatars/2.jpg"
            class="rounded-circle"
            height="25"
            alt=""
            loading="lazy"
          />
          @if(Session::has('user'))
          {{Session::get('user')['name']}}
          @endif
        </a>
       
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
        @if(Session::has('user'))
          <li>
            <a class="dropdown-item" href="/logout">Logout</a>
          </li>
        @else
        <li>
          <a class="dropdown-item" href="/login">Login</a>
        </li>
        @endif

        </ul>
        
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
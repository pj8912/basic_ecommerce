<?php

function main_navbar($loginStatus)
{
    $url = 'http://localhost/basic_ecommerce';
    // $url = 'http://basicecom.com';

    echo '

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/basic_ecommerce/">BasicEcom</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/basic_ecommerce/">Home</a>
        </li>
     <li class="nav-item">
          <a class="nav-link" href="http://localhost/basic_ecommerce/">About</a>
        </li>
      </ul>
      
      <ul class="nav justify-content-end mb-2 mb-lg-0">

      ';
    if ($loginStatus == false) {
        echo '	<li class="nav-item">
        <a class="nav-link" href="' . $url . '/users/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $url . '/users/signup.php">Sign Up</a>
      </li>
    ';
    }

    if ($loginStatus == true) {
        echo '
  <li class="nav-item">
    <a class="nav-link" href="' . $url . '/users/logout.php">Logout</a>
  </li>';
    }
    echo '
    </ul>	  

      </div>
     </div>
  </nav>
    
      ';
}

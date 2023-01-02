<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INGLES NUM CLICK</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
    @font-face {
    font-family: 'Rubik Vinyl';
    src: url('http://localhost/Login2/font/RubikVinyl-Regular.ttf');
    }

    body {
        background-color:#152039;
    }

    #navPC {
        display:none;
        font-size: 19px;
    }
    #links {
      background-color: ghostwhite;
    }
    #navPC a {
        color:black;
    }
    #navPC a:hover {
        color:red;
    }
    #navPHONE {
      background-color:#152039;
    }
    @media (min-width: 576px) { 
    #navPC {
        display:block;
    }     
    #navPHONE {
        display:none;
    }
}
</style>
<!-- nav PC -->
<div id='navPC'>
      <div class="col-12 d-flex justify-content-center mb-0">
        <a class="navbar-brand" href="#"
        ><img
          id="MDB-logo"
          src="imgs/logo1.png"
          alt="MDB Logo"
          draggable="false"
          height="120"
      /></a>
      </div>
    <ul id='links' style='width:500px;margin:auto;border-radius:10px;' class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="practice.php">Practice</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="username.php">Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
    </ul>
</div>
<!-- nav PHONE -->
<nav id='navPhone' class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img
          id="MDB-logo"
          src="imgs/logo1.png"
          alt="MDB Logo"
          draggable="false"
          height="90"
      />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="practice.php">Practice</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="username.php">Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
 
    
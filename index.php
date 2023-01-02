<?php include "navbar.php" ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class='container-sm my-2'>
  <div class="carousel-inner" style='color:black;margin:auto;width:400px;border-radius:5px;'>
    <div class="carousel-item active">
      <a href='practice.php'><img class="d-block w-100" height='300' src="imgs/slide1.jpeg" alt="First slide"></a>
    </div>
    <div class="carousel-item">
        <a href='username.php'><img class="d-block w-100" height='300'src="imgs/slide2.jpeg" alt="Second slide"></a>
    </div>
    <div class="carousel-item">
        <a href='about.php'><img class="d-block w-100" height='300' src="imgs/slide3.jpeg" alt="Third slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
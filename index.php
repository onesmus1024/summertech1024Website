<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>summertech</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.j"></script>
</head>
<body>
<?php
   require "nav.html";
?>
  <div class="carousel slide" data-bs-ride="carousel" id="sumtcarousel">
    <div class="carousel-indicators">
      <button data-bs-target="#sumtcarousel" class="active" data-bs-slide-to="0"></button>
      <button data-bs-target="#sumtcarousel" data-bs-slide-to="1"></button>
      <button data-bs-target="#sumtcarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/software8.jpeg"  class="d-block w-100" alt="">
        <div class="carousel-caption">
          <h6 class="align-items-center ">welcome to summertech! <br>we develop apps for your business at fair prices <br>
          we helps you in creating online presence and explore the full potential of your businnes and maximize your profits </h6>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/software10.png" class="d-block w-100" alt="">
        <div class="carousel-caption">
          <h3 class="text-warning align-items-left">get website for your businnes</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/software9.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption">
          <h4>we build releable software </h4>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#sumtcarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#sumtcarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 ">
        <div class="card text-red">
          <div class="card-body">
            <div class="card-text">
              <h5>
                we develop quality app for your business to create online presence and realize full potention of your business
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card">
          <img src="img/2.jpeg" height="300px" class="card-img-top" alt=".......">
          <div class="card-body">
            <div class="card-text">
              <h6>get your android app</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card">
          <img src="img/3.jpeg" height="300px" class="card-img-top" alt="">
          <div class="card-body">
            <div class="card-text">
              <h6>get you website</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php 
     require "footer.html"; 
  ?>
</body>
</html>
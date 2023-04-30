<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"><!--bg-body-tertiary -->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AnuragRestro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#serve">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sampark">Contact</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>HUNGRY?!</h3>
        <p>Relish authentic cuisine</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/spaghetti-bg.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>HUNGRY?!</h3>
        <p>Great, we are here to serve you</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="img/bfbrg.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>HUNGRY?!</h3>
        <p>Satiate your taste buds</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<section class = "my-5">
  <div class="py-5">
    <h2 class="text-center">About us</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
<img src="img/3.png" class="img-fluid abtimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
<h3 class="display-4">Welcome to Anurag Fine Dine</h3>
<p class="py-5">We curate from the best restaurants in the town so that you can relinquish the finest tastes.<br><br>
  We assure the highest quality and safety standards for the well-being of all our customers.<br><br>
  We believe in open kitchen model as we prepare safe foods in a hygienic environment<br><br>
  Timely service to the customers with our trained delivery staff<br><br>
  We earned brand and prestige due to our quality & tasty food<br><br>
  Our complete team works hard for giving customers a fresh and warm food
</p>
<a href="about.php" class="btn btn-success">Know us</a>
    </div>
    </div>
</div>
</section>

<section class = "my-5" id="serve">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="img/rest/icnr.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Gurukrupa</h4>
    <p class="card-text">Kolhapuri restaurant</p>  
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div> 
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="img/rest/hlmg.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Navratna</h4>
    <p class="card-text">Udupi restaurant</p>  
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="img/rest/TOWNSEND.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Sasarwadi</h4>
    <p class="card-text">Malvani restaurant</p>  
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>  

  </div>
</div>
</section>

<section class = "my-5">
  <div class="py-5">
    <h2 class="text-center">Gallery</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/choppsuey.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/chimichangs.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/curywurst.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/poboy.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/hmbrger.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/detroitpzz.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/turkey-fajitas.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/ravioli.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="img/food/aw-arancini-articleLarge.jpg" class="img-fluid pb-4">
    </div>
  </div>
</div>
</section>


<section class = "my-5" id ="sampark">
  <div class="py-5">
    <h2 class="text-center">contact us</h2>
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
  <div class="form-group  ">
    <label>username</label>
    <input type="text" name="user" class="form-control">
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="text" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label>phone</label>
    <input type="text" name="phone" class="form-control">
  </div>
  <div class="form-group">
    <label>address</label>
    <textarea class="form-control" name="address"></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</section>

<footer>
  <p class="p-3 text-white bg-dark text-center">@anurag_foods</p>
</footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
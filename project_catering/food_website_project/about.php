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
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
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
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h1>Known for our standard</h1>
  <p>always the best...</p>
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

<footer>
  <p class="p-3 text-white bg-dark text-center">@anurag_foods</p>
</footer>
</body>
</html>
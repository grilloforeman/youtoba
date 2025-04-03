

<!doctype html>                                                                                     
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YOUTOBA</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');

h3 {
font-family: "Roboto Condensed", serif;
font-size: 46px;
color: black;
}

.fonte_texto {
font-family: "Oswald", serif;
font-size: 24px;
color: black;
}
</style>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Youtoba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FIGHTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="live.html">AO VIVO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"></a></li>
  <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="search.php" method="POST" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="d1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="d2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="d3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-lg-6">
<img src="mirkocrocop.jpg" class="img-thumbnail" alt="...">
  </div>
    <div class="col-lg-6">
<h3> HiGLIGHTS PORRADA</h3>
  


</div>
  </div>
  <div class="row">
    <div class="col-lg-6">
<h3> OFODAO porra</h3>
<p class="fonte_texto">


</br>



</p>
    </div>
    <div class="col-lg-6">

//
</div>
<div class="container text-center">
  <div class="row">
  
  <?php
$acao = $_POST['search'] ?? null;


include("controler.php");
include("db.php");
include("view.php");

if(isset($acao)){
	

$oi = new Controller();
$oi->exibir($conn);
$ui = new View();
$ui->searchexibir();
}

?> 
 








  <h3> SOMENTE VIDEOS SINISTROS VEM MAIS POR AI ..BETA</h3>
     

      


  </div>
    </div>
    </div>
  </div>
    </div>
    <div class="col-12">

    </div>
  </div>
</div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>































































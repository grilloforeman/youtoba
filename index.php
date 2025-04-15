<!Doctype html>                                                                                     
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YOUTOBA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="index.htm">Home</a>
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


<div class="container text-center">
  <div class="row">
    <div class="col-lg-6">
<img src="grillo22.png" class="img-thumbnail"  width="90%" alt="...">
  </div>
    <div class="col-lg-6">
<h3> HiGLIGHTS PORRADA</h3>



</div>
  </div>
  <div class="row">
    <div class="col-lg-6">
<h3> O MELHORES HIGLIGTHS E...</h3>
<p class="fonte_texto">


</br>



</p>

    <div class="col-lg-6">
</div>

</div>
<div class="container text-center">
  <div class="row">
  <?php



include("controler.php");
include("db.php");
include("view.php");



$oi = new Controller();
$oi->exibir_index($conn);
$ui = new View();
$ui->exibir_index();


?>

    </div>
  </div>
    </div>
    </div>
  </div>
    </div>
    <div class="col-12">

    </div>
  </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>































































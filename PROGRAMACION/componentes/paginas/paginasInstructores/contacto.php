<?php 

session_start();

if (!isset($_SESSION['nombres'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link  rel="icon"   href="assets/img/loguito.png" type="image/png" >
    <title>Contacto</title>
</head>

<body  >
    <!-- CABECERA/MENU -->
       
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="assets/img/logo.png" width="50" height="55" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>

    </ul>
    <span class="navbar-text">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">



<li class="nav-item">
    <a class="nav-link" href="paginasprincipales/instructores.php"> INICIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?c=Pag&m=quienesSomosIns"> QUIÉNES SOMOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?c=Pag&m=contactoIns">CONTACTO </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?c=all&m=log">SALIR</a>
  </li>
</ul>
    </span>
  </div>
</nav>
<br><br><br>

                <h1 style="text-align: center;">UBÍCANOS EN:</h1>
                <br>
                <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127237.38228821645!2d-74.12661683128593!3d4.740817773962808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a45d9f1654b%3A0x3d69138572d157f2!2sSENA%20-%20Centro%20De%20Servicios%20Financieros!5e0!3m2!1ses!2sco!4v1596819727124!5m2!1ses!2sco"  height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                <br> <br><br>
                <h2 style="text-align: center;">Cra. 13 #6510, Bogotá</h2>
                <h2 style="text-align: center;">+5715461600</h2>
            </div>



        </div>
    </div>
</div>
</header>

<!-- SCRIPT -->
<script src="assets/bootstrap-3/js/main.js"></script>
<script src="assets/bootstrap-3/js/jquery-3.5.1.slim.min.js" ></script>
<script src="assets/bootstrap-3/js/popper.min.js" ></script>
<script src="assets/bootstrap-3/js/bootstrap.min.js" ></script>
<script src="assets/bootstrap-3/js/all.js" ></script>
</body>

</html>

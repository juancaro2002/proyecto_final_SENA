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
    <title>Quienes Somos</title>
</head>

<body >
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
                <div class="d-flex flex-row bd-highlight col-md-12">
                    <div class="col-md-4 p-3 bd-highlight" style="text-align: center; background-color: rgba(255, 255, 255, 0.5); border-right: black 3px solid ">
                        <h1>MISION</h1>


                    </div>
                    <div class="col-md-4 p-5 bd-highlight" style="margin-top: 2%; text-align: center; background-color: rgba(255, 255, 255, 0.5); border-right: black 3px solid ">

                        <h1> ¿QUIENES SOMOS?</h1>

                    </div>
                    <div class="col-md-4 p-3 bd-highlight" style="text-align: center; background-color: rgba(255, 255, 255, 0.5);">

                        <h1>VISION</h1>
                    </div>
                </div>



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

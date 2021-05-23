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
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link  rel="icon"   href="../assets/img/loguito.png" type="image/png" >
    <title>Instructores</title>
</head>

<body>
    <!-- CABECERA/MENU -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img src="../assets/img/logo.png" width="50" height="55" alt="">
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
    <a class="nav-link" href="../paginasprincipales/instructores.php"> INICIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../?c=Pag&m=quienesSomosIns"> QUIÉNES SOMOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../?c=Pag&m=contactoIns">CONTACTO </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../?c=all&m=log">SALIR</a>
  </li>
</ul>
    </span>
  </div>
</nav>
                <div class="container-fluid" id="admin" style=" width:90%;  border: black 5px solid ; background-color: rgba(255, 255, 255, 0.9);  " >
                    <div class="row">
                        <div class="col-md-12" style="border-bottom: black 5px solid;">
                            <div class="col-md-12" style=" margin: 5px;" >
                                <h1>INSTRUCTORES</h1>

                            </div>
                            </div>
                        <div class="col-md-2.5" id="" style="height: 600px">
                            <div class="col-md-12" style="margin-top: 10%;">
                                <div class="card" style=" margin-top:50%;">

                                    <div class="card-body" style="background-color: transparent;  ">
                                        <h3 class="card-title" style="text-align: center;">CERTIFICADOS</h2>
                                            <hr>

                                            <center> <a href="../?c=admins&m=consultarCERT" class="btn btn-outline-primary" style="margin-top: 7%" >CONSULTAR CERTIFICADOS</a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="" style="border-left:  black 5px solid; ">

        </header>

     
        <!-- SCRIPT -->
        <script src="../assets/bootstrap-3/js/main.js"></script>
        <script src="../assets/bootstrap-3/js/jquery-3.5.1.slim.min.js" ></script>
        <script src="../assets/bootstrap-3/js/popper.min.js" ></script>
        <script src="../assets/bootstrap-3/js/bootstrap.min.js" ></script>
        <script src="../assets/bootstrap-3/js/all.js" ></script>
    </body>

    </html>

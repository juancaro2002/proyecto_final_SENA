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
    <title>Instructores</title>
</head>

<body>
    <!-- CABECERA/MENU -->
    <header class="instructores">
        <div class='header-barra' >
            <div class='navegacion'>
                <div class="MenuOpen">
                    <a href="#"><i class="fas fa-bars" style="color:white;width:30; height:30; margin-top:10;"  ></i></a>
                </div>
                <div class="MenuHover">
                    <nav>
                        <ul>
                            <li>
                                <a href="?c=instructores&m=instruc" ><i class="fas fa-house-user"></i> INICIO </a>
                            </li>
                            <li>
                                <a href="?c=Pag&m=quienesSomosIns"> ¿QUIENES SOMOS? <i class="fas fa-users"></i></a>
                            </li>
                            <li>
                                <a href="?c=Pag&m=desarroIns"><i class="fas fa-smile"></i> DESARROYADORES</a>
                            </li>
                            <li>
                                <a href="?c=Pag&m=contactoIns">CONTACTO <i class="fas fa-map-marked-alt"></i></a>
                            </li>
                            <li>
                                <a href="?c=Index&m=index"> <i class="fas fa-sign-out-alt"></i>SALIR</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="container-fluid" id="admin" style=" width:90%;  border: black 5px solid ; background-color: rgba(255, 255, 255, 0.9);  " >
                    <div class="row">
                        <div class="col-md-12" style="border-bottom: black 5px solid;">
                            <div class="col-md-12" style=" margin: 5px;" >
                                <img src="img/logo.png" align="left" width="50" height="55    " alt="">
                                <h1>&nbsp&nbsp|INSTRUCTORES</h1>

                            </div>
                            </div>
                        <div class="col-md-2.5" id="" style="height: 600px">
                            <div class="col-md-12" style="margin-top: 10%;">
                                <div class="card" style=" margin-top:50%;">

                                    <div class="card-body" style="background-color: transparent;  ">
                                        <h3 class="card-title" style="text-align: center;">CERTIFICADOS</h2>
                                            <hr>

                                            <center> <a href="?c=Instructores&m=consultarCERT" class="btn btn-outline-primary" style="margin-top: 7%" >CONSULTAR CERTIFICADOS</a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" style="border-left:  black 5px solid; ">
                            <div class="" style="border-left:  black 5px solid; ">
</div>
<div  class="card-body  col-md-12"  style="background-color: grey; margin:10%;">
<table class="table table-striped col-md-12">

		<thead>
			<tr>
			<th scope="col">Id</th>
				<th scope="col">usuario</th>
				<th scope="col">nombres</th>
				<th scope="col">cedula</th>
				
				<th scope="col" class="text-center">Acciones</th>
			</tr>
		</thead>

<?php foreach(parent::contra() as $r){?>

	<tbody>
			<tr>
				<td><?php echo $r->id_contrato?></td>
				<td><?php echo $r->fk_contratista?></td>
				<td><?php echo $r->nombreCompleto?></td>
				<td><?php echo $r->cedula?></td>
				

			<td>
				<a href="?c=Admins&m=vistaCer&id=<?php echo $r->id_contrato;?>" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>
				
				
			</td>

</tr>


<?php } ?>
</tbody>  
</table>
</div>

        </header>

        <footer style="height: 100px; background-color: #000000; color: white; font-size: 110%; text-align: center;">@ COPYRYGHT 2020 POR C.A.C. EL REGISTRO EN ESTA PAGINA WEB IMPLICA LA ACEPTACION DE SU POLITOCA DE PRIVACIDAD.</footer>

        <!-- SCRIPT -->
        <script src="assets/bootstrap-3/js/main.js"></script>
        <script src="assets/bootstrap-3/js/jquery-3.5.1.slim.min.js" ></script>
        <script src="assets/bootstrap-3/js/popper.min.js" ></script>
        <script src="assets/bootstrap-3/js/bootstrap.min.js" ></script>
        <script src="assets/bootstrap-3/js/all.js" ></script>
    </body>

    </html>

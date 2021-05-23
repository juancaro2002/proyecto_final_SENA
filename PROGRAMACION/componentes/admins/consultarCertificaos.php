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
	<title>ConsultarCertificados</title>
</head>

<body>
<!-- CABECERA/MENU -->
<?php  require_once 'compo/menu.php'; ?>
<!--final/Menu-->
/
<!--inicio/cuadro/principal-->    
<?php  require_once 'compo/barraLateralAdmin.php'; ?>
<!--fin/cuadro/lateral/admins--> 
</div>
</div>
<div class="" style="border-left:  black 5px solid; ">
</div>
<div class="card-body" style="background-color: grey;">
<table class="table table-striped">

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
				<a href="?c=Admins&m=verCer&id=<?php echo $r->id_contrato;?>" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>
				<a href="?c=admins&m=editarCertificados&id=<?php echo $r->id_contrato;?> " class="btn btn-primary btn-sm" ><i class="fas fa-user-edit"></i></a>
				
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


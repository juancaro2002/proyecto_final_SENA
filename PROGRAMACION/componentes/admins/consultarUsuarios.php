
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
	<title>ConsultarUsuarios</title>
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
<div class="" style="border-left:  black 0px solid; ">
</div>
<div class="card-body" style="background-color: grey;">
<table class="table table-striped">

		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombres</th>
				<th scope="col">Apellidos</th>
				<th scope="col"> documento</th>
				<th scope="col" class="text-center">Acciones</th>
			</tr>
		</thead>

<?php foreach(parent::all() as $r){?>

	<tbody>
			<tr>
				<td><?php echo $r->id_contratista?></td>
				<td><?php echo $r->nombres?></td>
				<td><?php echo $r->apellidos?></td>
				<td><?php echo $r->numero_documento?></td>

			<td>
				<a href="?c=Admins&m=VerUser&id=<?php echo $r->id_contratista;?>" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>
				<a href="?c=admins&m=editarPerfil&id=<?php echo $r->id_contratista;?> " class="btn btn-primary btn-sm" ><i class="fas fa-user-edit"></i></a>
				<a href="?c=Admins&m=eliminar&id= <?php echo $r->id_contratista?>" class="btn btn-danger btn-sm" onclick="return alert()"><i class="fas fa-trash-alt"></i></a>
			</td>

</tr>

<script type="text/javascript">
        function alert(){
            var alarma = confirm("esta seguro de eliminar el siguiente formulario?");
            if (alarma == true)
            {
            return true;
            }else{
            return false;
        }
    }

</script>

<?php } ?>
</tbody>  
</table>
</div>

</header>

<footer style="height: 111px; background-color: #000000; color: white; font-size: 110%; text-align: center;">@ COPYRYGHT 2020 POR C.A.C. EL REGISTRO EN ESTA PAGINA WEB IMPLICA LA ACEPTACION DE SU POLITOCA DE PRIVACIDAD.</footer>

<!-- SCRIPT -->
<script src="assets/bootstrap-3/js/main.js"></script>
<script src="assets/bootstrap-3/js/jquery-3.5.1.slim.min.js" ></script>
<script src="assets/bootstrap-3/js/popper.min.js" ></script>
<script src="assets/bootstrap-3/js/bootstrap.min.js" ></script>
<script src="assets/bootstrap-3/js/all.js" ></script>
</body>

</html>

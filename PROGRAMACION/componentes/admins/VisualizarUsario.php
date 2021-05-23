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
	<title>Admin</title>
</head>

<body>
	<form action="?c=admins&m=admin"></form>

<!-- CABECERA/MENU -->
<?php  require_once 'compo/menu.php'; ?>
<!--final/Menu-->
<div class="container-fluid" id="admin" style=" width:90%;  border: black 5px solid ; background-color: rgba(255, 255, 255, 0.9);  " >
<div class="row">
<div class="col-md-12" style="border-bottom: black 5px solid;">
<div class="col-md-12" style=" margin: 5px;" >
<h1>Editar perfil</h1>
</div>
</div>
		<div class="" style="border-left:  black 5px solid; ">

</div>
<div class="card-body" style="background-color: grey; height:500px;">
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombres</th>
				<th scope="col">Apellidos</th>
                <th scope="col">Documento</th>
				<th scope="col">#Documento</th>
                <th scope="col">Genero</th>
                <th scope="col">Cargo</th>
                <th scope="col">Edad</th>
                <th scope="col">Direccion</th>
                <th scope="col">Localidad</th>
                <th scope="col">Email</th>
                <th scope="col">Celular</th>
                <th scope="col">Telefono</th>
                <th scope="col">Eps</th>
                

</tr>
</thead>
<tbody>
			<tr>
			<?php  $id = $_REQUEST['id'];
            $r=parent::all($id);{?>

<input type="hidden" value="<?php echo $id ?>" name="updateid"  class="form-control" readonly>

			<?php foreach($r as $r){
		 	if($id == $r->id_contratista){ 
			?>
		
			<td><?php echo $r->id_contratista;?></td>
			<td><?php echo $r->nombres;?></td>
			<td><?php echo $r->apellidos;?></td>
            <td><?php echo $r->fk_tipo_documento;?></td>
			<td><?php echo $r->numero_documento;?></td>
            <td><?php echo $r->fk_genero;?></td>
            <td><?php echo $r->fk_cargo;?></td>
            <td><?php echo $r->edad;?></td>
            <td><?php echo $r->direccion;?></td>
            <td><?php echo $r->fk_localidad;?></td>
            <td><?php echo $r->email;?></td>
            <td><?php echo $r->celular;?></td>
            <td><?php echo $r->telefono;?></td>
            <td><?php echo $r->fk_eps;?></td>
            
	</td>
</tr>

</tbody>  
</table>
<a href="?c=admins&m=editarPerfil&id=<?php echo $r->id_contratista;?> " class="btn btn-primary btn-sm">EDITAR <i class="fas fa-user-edit"></i></a>
<?php  }  }  } ?>
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



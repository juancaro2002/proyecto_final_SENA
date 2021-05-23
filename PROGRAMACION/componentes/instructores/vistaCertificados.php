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
<img src="assets/img/logo.png" align="left" width="50" height="55    " alt="">
<h1>&nbsp&nbsp|VER-CERTIFICADOS</h1>
</div>
</div>
		<div class="" style="border-left:  black 5px solid; ">

</div>
<div class="card-body" style="background-color: grey;">
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">ID</th>
                <th scope="col">usuario</th>
                <th scope="col">Nombre completo</th>
                <th scope="col">Cedula</th>
                <th scope="col">Estado</th>
                <th scope="col">tipo contrato</th>
			
                

</tr>
</thead>
<tbody>
			<tr>
			<?php  $id = $_REQUEST['id'];
            $r=parent::contra($id);{?>

<input type="hidden" value="<?php echo $id ?>" name="updateid"  class="form-control" readonly>

			<?php foreach($r as $r){
		 	if($id == $r->id_contrato){ 
			?>
		
                <td><?php echo $r->id_contrato?></td>
				<td><?php echo $r->fk_contratista?></td>
				<td><?php echo $r->nombreCompleto?></td>
				<td><?php echo $r->cedula?></td>
				<td><?php echo $r->fk_estado?></td>
				<td><?php echo $r->fk_tipo_contrato?></td>
            
	</td>
</tr>

</tbody>  
</table>
<a href="?c=admins&m=verCertificaPDF&id=<?php echo $r->id_contrato;?> " class="btn btn-primary btn-sm">ver <i class="fas fa-file-download"></i></a>
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



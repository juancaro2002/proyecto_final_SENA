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
	<title>crearUsuario</title>
</head>

<body>
	<!-- CABECERA/MENU -->
	<?php  require_once 'compo/menu.php'; ?>
	<!--final/Menu-->/

	<!--inicio/cuadro/principal-->    
	<?php  require_once 'compo/barraLateralAdmin.php'; ?>
	<!--fin/cuadro/lateral/admins--> 


</div>


</div>
<div class="" style="border-left:  black 5px solid; ">



</div>




<div class="col-md" style="margin:5%; height: 550px; overflow: auto; width:152px;" name=""> 
<form action="?c=Admins&m=updateUsser" method="post">

	<?php
		$id = $_REQUEST['id'];
		$contratistas = parent::all();
	
	?>
<input type="hidden" value="<?php echo $id ?>" name="updateid"  class="form-control" readonly>

		<?php foreach($contratistas as $contratista){

		 	if($id == $contratista->id_contratista){ 

		?>

	<div class="form-group">

			<label for="">Nombres:</label>
			<input type="text" class="form-control" name="nombres"   aria-describedby="" value="<?php echo $contratista->nombres;?>">

	</div>

	<div class="form-group">

			<label for="">Apellidos:</label>
			<input type="text" class="form-control" name="apellidos"  aria-describedby="" value="<?php echo $contratista->apellidos;?>">

	</div>

	<div class="form-group">

			<label for="">Edad:</label>
			<input type="text" class="form-control" name="edad" id="" aria-describedby="" value="<?php echo $contratista->edad;?>">
			
	</div>

	<div class="form-group">

			<label for="">Direccion:</label>
			<input type="text" class="form-control" name="direccion" id="" aria-describedby="" value="<?php echo $contratista->direccion;?>">

	</div>

			<label for=""> Localidad</label>

			<select name="fk_localidad" id="fk_localidad" class="form-control" value="<?php echo $contratista->fk_localidad;?>">

	<?php 

$localidads = parent::consultarLocalidad();

foreach ($localidads as $localidad){

?>

	<option value="<?php echo $localidad->id_localidad; ?>">

<?php echo $localidad->localidad;?></option>
<?php } ?>

	</select>

	<div class="form-group">

			<label for="">Email:</label>
			<input type="text" class="form-control" name="email" id="" aria-describedby="" value="<?php echo $contratista->email;?>">
	</div>

	<div class="form-group">

			<label for="">Clave:</label>
			<input type="text" class="form-control" name="contraseña" id="" aria-describedby=""value="<?php echo $contratista->contraseña;?>">

	</div>

	<div class="form-group">

			<label for="">Celular:</label>
			<input type="text" class="form-control" name="celular" id="" aria-describedby=""value="<?php echo $contratista->celular;?>">

	</div>

	<div class="form-group">

			<label for="">Telefono:</label>
			<input type="text" class="form-control" name="telefono" id="" aria-describedby=""value="<?php echo $contratista->telefono;?>">

	</div>

			<label for=""> Eps:</label>
			<select name="fk_eps" id="fk_eps" class="form-control" value="<?php echo $contratista->eps;?>">
<?php 


$epss = parent::consultarEps();
foreach ($epss as $eps){

?>

		<option value="<?php echo $eps->id_eps; ?>">
		<?php echo $eps->nombre_eps;?></option>
		<?php } ?>
		</select>

		

		<div class="form-group form-check">

		</div>

<?php } } ?>

		<button type="submit"class="btn btn-primary" onclick="return alert()">Actualizar</button>
		<select name="nombres">

<script type="text/javascript">
function alert(){
    var alarma = confirm("al aceptar el cambio se va a guardar, esta seguro de actualizar?");
        if (alarma == true)
        {return true;
        }else{
        return false;
        }
    }    
    </script>

</form>
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



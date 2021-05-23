<?php 

include 'models/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nombres'])) {

}

if (isset($_POST['submit'])) {
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
    $fk_tipo_documento = $_POST['fk_tipo_documento'];
	$numero_documento = $_POST['numero_documento'];
    $fk_genero = $_POST['fk_genero'];
	$fk_cargo = $_POST['fk_cargo'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
	$fk_localidad = $_POST['fk_localidad'];
    $email = $_POST['email'];
    $contraseña = md5($_POST['contraseña']);
	$cpassword = md5($_POST['cpassword']);
    $celular = $_POST['celular'];
	$telefono = $_POST['telefono'];
    $fk_eps = $_POST['fk_eps'];
	$fk_sede_contratista = $_POST['fk_sede_contratista'];

	if ($contraseña == $cpassword) {
		$sql = "SELECT * FROM contratista WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO contratista (nombres, apellidos, fk_tipo_documento,numero_documento, fk_genero, fk_cargo,edad, direccion, fk_localidad,email, contraseña,celular, telefono, fk_eps,fk_sede_contratista)
					VALUES ('$nombres', '$apellidos', '$fk_tipo_documento','$numero_documento', '$fk_genero', '$fk_cargo','$edad', '$direccion', '$fk_localidad','$email', '$contraseña','$celular', '$telefono', '$fk_eps', '$fk_sede_contratista')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$nombres = "";
				$apellidos = "";
				$fk_tipo_documento = "";
				$numero_documento = "";
				$fk_genero = "";
				$fk_cargo = "";
				$edad = "";
				$direccion = "";
				$fk_localidad = "";
				$email = "";
				$_POST['contraseña'] = "";
				$_POST['cpassword'] = "";
				$celular = "";
				$telefono = "";
				$fk_eps = "";
				$fk_sede_contratista = "";
			
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('contraseña Not Matched.')</script>";
	}
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

<!--Nombres -->

<div class="col-md" style="margin:5%; height: 550px; overflow: auto; width:152px;" name=""> 
<form action="" method="POST" class="login-email">
		<div class="form-group">
			<label for="">Nombres:</label>
			<input type="text" class="form-control" name="nombres" id="" aria-describedby="" required>
	</div>

<!--fin Nombres -->

<!--Apellidos -->
		<div class="form-group">
			<label for="">Apellidos:</label>
			<input type="text" class="form-control" name="apellidos" id="" aria-describedby=""required>
		</div>
<!--fin Apellidos -->

<!--tipo documento -->
		<label for=""> Tipo documento:</label>
		<select name="fk_tipo_documento"  class="form-control col- " required>
		<?php 

$documentos = parent::consultarDocumento();
foreach ($documentos as $documento){
	
		?>

		<option value="<?php echo $documento->id_tipo_documento; ?>">
		<?php echo $documento->tipo_documento;?></option>
		<?php } ?>
		</select>
		
<!--fin tipo documento -->
<!--Numero documento -->

		<div class="form-group">
			<label for="">Numero documento:</label>
			<input type="text" class="form-control" name="numero_documento" id="" aria-describedby="" required>
		</div>

<!--fin numero documento -->

<!--genero -->
		<label for=""> Genero:</label>
		<select name="fk_genero" id="fk_genero" class="form-control ">
		<?php 

$generos = parent::consultarGenero();
foreach ($generos as $genero){

?>

		<option value="<?php echo $genero->id_genero; ?>">
		<?php echo $genero->genero;?></option>
		<?php } ?>
		</select>
<!--fin Genero -->

<!--Cargo -->
		<label for=""> Cargo</label>
		<select name="fk_cargo" id="fk_cargo" class="form-control ">
		<?php 

$cargos = parent::consultarCargo();
foreach ($cargos as $cargo){

?>
		<option value="<?php echo $cargo->id_cargo_contratista; ?>">
		<?php echo $cargo->cargo;?></option>
		<?php } ?>
		</select>
<!--fin Cargo -->

<!--Edad -->
		<div class="form-group">
		<label for="">Edad:</label>
		<input type="text" class="form-control" name="edad" id="" aria-describedby="">
		</div>
<!--fin Edad -->

<!--direccion -->
		<div class="form-group">
		<label for="">Direccion:</label>
		<input type="text" class="form-control" name="direccion" id="" aria-describedby="">
		</div>
<!--fin Direccion -->

<!--localidad -->
		<label for=""> Localidad</label>
		<select name="fk_localidad" id="fk_localidad" class="form-control ">
		<?php 

$localidads = parent::consultarLocalidad();
foreach ($localidads as $localidad){

?>

		<option value="<?php echo $localidad->id_localidad; ?>">
		<?php echo $localidad->localidad;?></option>
		<?php } ?>
		</select>
<!--fin Localidad -->

<!--Email -->
		<div class="form-group">
		<label for="">Email:</label>
		<input type="text" class="form-control" name="email" id="" aria-describedby="" required>
		</div>
<!--fin Email -->

<!--Clave -->
		<div class="form-group">
		<label for="">Clave:</label>
		<input type="password" class="form-control" name="contraseña" id="" aria-describedby="" required>
		</div>

		<div class="form-group">
		<label for="">Confirme su contraseña:</label>
		<input type="password" class="form-control" name="cpassword" id="" aria-describedby="" required>
		</div>
<!--fin Clave -->

<!--Celular -->
		<div class="form-group">
		<label for="">Celular:</label>
		<input type="text" class="form-control" name="celular" id="" aria-describedby=""required>
		</div>
<!--fin Celular -->

<!--telefono -->
		<div class="form-group">
		<label for="">Telefono:</label>
		<input type="text" class="form-control" name="telefono" id="" aria-describedby="">
		</div>
<!--fin Telefono -->

<!--eps -->
		<label for=""> Eps:</label>
		<select name="fk_eps" id="fk_eps" class="form-control ">
		<?php 

$epss = parent::consultarEps();
foreach ($epss as $eps){

?>

		<option value="<?php echo $eps->id_eps; ?>">
		<?php echo $eps->nombre_eps;?></option>
		<?php } ?>
		</select>
<!--fin Eps -->

<!--Sede -->
		<label for=""> Sede</label>
		<select name="fk_sede_contratista" id="fk_sede_contratista" class="form-control ">
		<?php 

$sedes = parent::consultarSede();
foreach ($sedes as $sede){

?>

		<option value="<?php echo $sede->id_sede; ?>">
		<?php echo $sede->direccion;?></option>
		<?php } ?>
		</select>
<!--fin Sede -->

		<div class="form-group form-check">

		</div>

		<button name="submit" class="btn btn-primary" onclick="return alert()">Submit</button>

		<select name="nombres">


		</form>

	</div>

	<script type="text/javascript">
        function alert(){
            var alarma = confirm("esta seguro de actulizar el siguiente usuario?");
            if (alarma == true)
            {
            return true;
            }else{
            return false;
        }
    }

</script>

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




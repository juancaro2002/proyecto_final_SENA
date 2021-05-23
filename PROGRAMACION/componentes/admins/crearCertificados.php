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

<div class="" style="border-left:  black 0px solid; ">

</div>


<!--Nombres Completo -->

<div class="col-md" style="margin:5%; height: 550px; overflow: auto; width:152px;" name=""> 
	<form action="?c=Admins&m=crear_Contrato" method="post">
		<div class="form-group">
			<label for="">NOMBRE COMPLETO:</label>
			<input type="text" class="form-control" name="nombreCompleto" id="" aria-describedby="" required>
	</div>

<!--fin Nombres -->
<!-- inicio contratista-->
<label for=""> USUARIO:</label>
		<select name="fk_contratista" id="fk_contratista" class="form-control ">
		<?php 

$usuarios = parent::consultarContratista();
foreach ($usuarios as $usuario){

?>

		<option value="<?php echo $usuario->id_contratista; ?>">
		<?php echo $usuario->nombres;?></option>
		<?php } ?>
		</select>
<!--fin contratista-->


<!--Numero documento -->

		<div class="form-group">
			<label for="">NUMERO DOCUMENTO:</label>
			<input type="text" class="form-control" name="cedula" id="" aria-describedby="" required>
		</div>

<!--fin numero documento -->

<!--Fecha Inicio -->

<div class="form-group">
			<label for="">FECHA INICIO:</label>
			<input type="date" class="form-control" name="fecha_inicio" id="" aria-describedby="" required>
		</div>

<!--fin Fecha Inicio -->

<!--Fecha Fin -->

<div class="form-group">
			<label for="">FECHA FINAL:</label>
			<input type="date" class="form-control" name="fecha_fin" id="" aria-describedby="" required>
		</div>

<!--fin Fecha Fin -->

<!--Estado contrato -->

<label for=""> Estado contrato:</label>
		<select name="fk_estado" id="fk_estado" class="form-control ">
		<?php 

$estados = parent::consultarEstado();
foreach ($estados as $estado){

?>

		<option value="<?php echo $estado->id_estado_contrato; ?>">
		<?php echo $estado->nombre_estado_contrato;?></option>
		<?php } ?>
		</select>
<!--fin estado contrato -->

<!--inicio tipo contrato -->
		<label for=""> Tipo contrato:</label>
		<select name="fk_tipo_contrato" id="fk_tipo_contrato" class="form-control ">
		<?php 

$tipos = parent::consultarTipoContrato();
foreach ($tipos as $tipo){

?>

		<option value="<?php echo $tipo->id_tipo_contrato; ?>">
		<?php echo $tipo->tipo_contrato;?></option>
		<?php } ?>
		</select>

<!--fin Tipo Contrato -->

		<div class="form-group form-check">

		</div>

		<button type="submit" class="btn btn-primary" onclick="return alert()">Submit</button>

		<select name="nombres">


		</form>

	</div>

	<script type="text/javascript">
function alert(){
    var alarma = confirm("esta seguro de crear un nuevo contrato?");
        if (alarma == true)
        {return true;
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

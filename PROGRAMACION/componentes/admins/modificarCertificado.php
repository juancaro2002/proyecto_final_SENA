<?php 

session_start();

if (!isset($_SESSION['nombres'])) {
    header("location:?c=all&m=index");
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
<form action="?c=Admins&m=updateCerti" method="post">

	<?php
		$id = $_REQUEST['id'];
		$contratos = parent::contra();
	
	?>
<input type="hidden" value="<?php echo $id ?>" name="updateid"  class="form-control" readonly>

		<?php foreach($contratos as $contrato){
		if($id == $contrato->id_contrato){ ?>

			<select name="fk_estado" id="fk_estado" class="form-control" value="<?php echo $contrato->fk_estado;?>">

<?php 
$estados = parent::consultarEstado();
foreach ($estados as $estado){

?>

		<option value="<?php echo $estado->id_estado_contrato; ?>">
		<?php echo $estado->nombre_estado_contrato;?></option>
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



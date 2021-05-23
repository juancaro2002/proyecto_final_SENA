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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <section class="textos-header">
    <h1>BIENVENIDO <?php echo  $_SESSION['nombres']  ?></h1><a href="../?c=Admins&m=crear">continuar</a>
            	
                
                      
</section>
</body>
</html>
<?php 

include 'models/config.php';

session_start(); 

error_reporting(0);

if (isset($_SESSION['nombres'])) {
    header("Location:paginasprincipales/instructores.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$sql = "SELECT * FROM contratista WHERE email='$email' AND contraseña='$password' AND fk_cargo='2'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nombres'] = $row['nombres'];
		header("Location: paginasprincipales/instructores.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<center><img src="assets/img/logo.png" style="width:20%;" alt=""></center>
		<br><br><br>
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">instructor</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">si eres administrador entra  <a href="login-admin.php">aqui</a>.</p>
		</form>
	</div>
</body>
</html>
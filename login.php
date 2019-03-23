<?php
	error_reporting(0);
	session_start();
  require 'database.php';

	if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
		$records = $conn->prepare('SELECT id, nombre, password FROM usuarios WHERE nombre=:nombre');
		$records->bindParam(':nombre',$_POST['nombre']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message = '';

		if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
			$_SESSION['user_id'] = $results['id'];
			header('Location: /ProyectoTitulo/index.php');
		} else {

			$message = 'Usuario o contraseña incorrecto';
		}
	}

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Ingresar</title>

		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
  <?php require 'partials/header.php' ?>

	<?php if(!empty($message)): ?>
	<p><?= $message ?></p>
	<?php endif; ?>

	<style type="text/css">
	body {
	  background-image: url("images/fondo/Local.jpg");
	  background-size: 100%;
	}
	#recuadro1 {
		height: 340px;
		width: 400px;
		background-color: #00008B;
		margin: 0px auto;
	}
	</style>

	<h1>ACCESO</h1>

	<form action="login.php" method="post"><div id='recuadro1'><br>
		Ingrese con su usuario:
		<input type="text" name="nombre" value="" placeholder="Escriba aquí su nombre de usuario">
		Ingrese su contraseña:
		<input type="password" name="password" value="" placeholder="Escriba aquí su contraseña">
		<br>
		<input type="submit" value="Entrar"><br></div><br><br><h3>
	  <a href="registrar.php">Registrarse</a><br><br><a href="index.php">Volver a inicio</a></h3>
	  </body>
</html>

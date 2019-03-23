<?php

session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
	$records = $conn->prepare('SELECT id, nombre, password FROM usuarios WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = null;

	if (count($results) > 0){
		$user = $results;
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inicio</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<?php require 'partials/header.php' ?>

<style type="text/css">
body {
  background-image: url("images/fondo/Local.jpg");
  background-size: 100%;
}
#recuadro1 {
	height: 370px;
	width: 360px;
	background-color: #00008B;
	margin: 0px auto;
}
</style>

  <h1>BIENVENIDOS A INDUMOTORA 0NE</h1><br><div id='recuadro1'><br>
  <?php if (!empty($user)): ?>
	<br> Bienvenido/a <?= $user['nombre'] ?>
	<br> Has ingresado correctamente.<br>
	<a href="logout.php">Cerrar Sesión</a>
	<br>
</form><br><br>
  <form action="catalogo.php" method="post">
  <input type="submit" name="catalogo" value="CATÁLOGO">
  </form><br>
  <form action="sucursales.php" method="post">
  <input type="submit" name="sucursales" value="SUCURSALES">
  </form><br>
  <form action="contacto.php" method="post">
  <input type="submit" name="contacto" value="CONTACTO">
  </form>

  <?php else: ?>

  <br><br>
  <form action="login.php" method="post">
	<input type="submit" name="login" value="ACCESO">
  </form><br>
	<form action="registrar.php" method="post">
  <input type="submit" name="registrar" value="REGISTRARSE">
	</form><br>
  <form action="sucursales.php" method="post">
  <input type="submit" name="sucursales" value="SUCURSALES">
  </form><br>
  <form action="contacto.php" method="post">
  <input type="submit" name="contacto" value="CONTACTO">
	<?php endif; ?>
	</div>
	</body>
</html>

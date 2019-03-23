<?php
require 'database.php';

  $message = '';
  $message2 = '';
  $message3 = '';

  if (!empty($_POST['nombre']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['email']) && !empty($_POST['numero'])) {
    $sql = "INSERT INTO usuarios (nombre, password, email, numero) VALUES (:nombre, :password, :email, :numero)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre',$_POST['nombre']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email',$_POST['email']);
    $stmt->bindParam(':numero',$_POST['numero']);


    if ($_POST['password']!=$_POST['password2']){
      $message2 = 'Las contraseñas no coinciden';
    }  elseif ($stmt->execute()) {
      $message = 'Usuario creado satisfactoriamente!';
    } else {
      $message = 'Ha ocurrido un error creando su cuenta, usuario o correo ya existen.';
    }

} else {
  $message3 = 'Debe llenar todos los campos.';
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>ACCESO</title>

		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

  <?php require 'partials/header.php' ?>
	<?php if(!empty($message)): ?>
  <p><?= $message ?></p>
  <?php endif; ?>

  <?php if(!empty($message2)): ?>
  <p><?= $message2 ?></p>
  <?php endif; ?>

  <?php if(!empty($message3)): ?>
  <p><?= $message3 ?></p>
  <?php endif; ?>

  <style type="text/css">
  body {
    background-image: url("images/fondo/Local.jpg");
    background-size: 100%;
  }
  #recuadro1 {
    height: 660px;
    width: 400px;
    background-color: #00008B;
    margin: 0px auto;
  }
  </style>

  <h1>REGISTRARSE</h1>

  <form action="registrar.php" method="post"><div id='recuadro1'><br>
    Nombre de usuario:
    <input type="text" name="nombre" value="" placeholder="Ingrese nombre de usuario" required>
    Contraseña:
    <input type="password" name="password" value="" placeholder="Ingrese su contraseña" required>
    Repetir contraseña:
    <input type="password" name="password2" value="" placeholder="Repetir contraseña" required>
    Correo electrónico:
    <input type="email" name="email" value="" placeholder="Ingrese su email" required>
    Teléfono:
		<input type="number" name="numero" min="1" max="999999999999" placeholder="Ingrese su número telefónico" required>
		<input type="submit" value="Enviar">
    </div>
    <h3><a href="login.php">Ingresar</a> - <a href="index.php">Volver a inicio</a><br><br></h3>
	</body>
</html>

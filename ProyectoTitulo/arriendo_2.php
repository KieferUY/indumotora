<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Catálogo</title>
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
      height: 200px;
      width: 490px;
      background-color: #00008B;
      margin: 0px auto;
    }
    </style>

    <h1>INDUMOTORA 0NE</h1><br><br>
    <div id='recuadro1'>
    <br><br>
    Felicidades! Su arriendo se ha realizado con exito.
    <br><br>
		<?php
		$tarifa = $_POST['tarifa'];
		$retiro = $_POST['retiro'];
		$devolucion = $_POST['devolucion'];
		$nomAuto = $_POST['nombreAuto'];
		echo "Has arrendado un/a "."$nomAuto"." desde el "."$retiro"." hasta ". "$devolucion, "." con un cargo de $"."$tarifa"." por día.";
		?>
		<br><br>
    Nos contactaremos con usted a la brevedad.
    </div>
    <br><br><br><br>
    <a href="catalogo.php"><h3>Volver al catálogo</a>
    <br><br>
    <a href="index.php">Volver a inicio</a></h3>

<?php
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
	}
  ?>

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
      height: 1030px;
      width: 450px;
      background-color: #00008B;
      margin: 0px auto;
    }
    #recuadro2 {
      height: 304px;
      width: 400px;
      background-color: white;
      margin: 0px auto;
    }
    </style>

<h1>CATÁLOGO</h1>

<form action="catalogo.php" method="post">
<br>
  <?php
echo  "<select name='autos' style='width:350px'>";
echo  "<option value='empty'></option>";
echo  "<option value='citroenc3'>ECONÓMICO - CITROEN C3</option>";
echo  "<option value='peugeot208'>ECONÓMICO - PEUGEOT 208 HDI</option>";
echo  "<option value='peugeot308at'>ECONÓMICO - PEUGEOT 308 DIESEL AT</option>";
echo  "<option value='hyundaii20at'>ECONÓMICO - HYUNDAI I20 AT</option>";
echo  "<option value='hyundaii20'>ECONÓMICO - HYUNDAI I20 MT</option>";
echo  "<option value='peugeot301'>SEDÁN - PEUGEOT 301</option>";
echo  "<option value='nissansentra'>SEDÁN - NISSAN SENTRA CVT</option>";
echo  "<option value='volvoxc90'>LUJO - VOLVO XC90 D5</option>";
echo  "<option value='bmw520'>LUJO - BMW 520</option>";
echo  "<option value='hyundaicreta'>SUV - HYUNDAI CRETA AT</option>";
echo  "<option value='peugeot3008'>SUV - PEUGEOT 3008 HDI</option>";
echo  "<option value='peugeot5008'>SUV - PEUGEOT 5008 HDI</option>";
echo  "<option value='volkswagentiguan'>SUV - VOLKSWAGEN TIGUAN 4X4 AT</option>";
echo  "<option value='hyundaitucson'>SUV - HYUNDAI TUCSON 4X4 DIESEL</option>";
echo  "<option value='hyundaisantafe'>SUV - HYUNDAI SANTA FE</option>";
echo  "<option value='hyundaih1'>VAN - HYUNDAI H1</option>";
echo  "<option value='hyundaih19pax'>VAN - HYUNDAI H1 9PAX AT</option>";
echo  "<option value='kiagc'>VAN - KIA GRAND CARNIVAL AT DS</option>";
echo  "<option value='katana'>CAMIONETA - MITSUBISHI NEW KATANA CR 4X2</option>";
echo  "<option value='mitsubishinewkatana'>CAMIONETA - MITSUBISHI NEW KATANA CRT 4X4</option>";
echo  "<option value='nissannp300'>CAMIONETA - NISSAN NP300 4X2</option>";
echo  "<option value='toyotanewhilux'>CAMIONETA - TOYOTA NEW HILUX 2.4 4X2</option>";
echo  "<option value='toyotanewhilux4x4'>CAMIONETA - TOYOTA NEW HILUX 2.4 4X4</option>";
echo  "<option value='audia4'>PREMIUM - AUDI A4</option>";
echo  "</select>";
  ?>
  <br><br>
  <input type="submit" value="VER INFORMACIÓN" name="ver">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ver']))
    {
        LISTA();
    }
function LISTA(){

  if ($_POST['autos']=="mitsubishinewkatana") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Mitsubishi New Katana CRT 4x4' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='68.643' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2500 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/mitsubishinewkatana.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="toyotanewhilux4x4") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Toyota New Hilux 2.4 4x4' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='46.794' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2400 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/toyotanewhilux4x4.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="toyotanewhilux") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Toyota New Hilux 2.4 4x2' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='46.794' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2400 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/toyotanewhilux.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="nissannp300") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Nissan NP300 4x2' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='45.113' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2000 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/nissannp300.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="katana") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Mitsubishi New Katana CR 4x2' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='45.113' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Camioneta"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2500 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/katana.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
  }
  if ($_POST['autos']=="hyundaih19pax") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Hyundai H1 9pax AT' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '78.727' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Van"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 2500 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 9"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/hyundaih19pax.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="kiagc") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Kia Grand Carnival AT DS' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '78.727' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Van"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 2200 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 8"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/kiagc.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="hyundaih1") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Hyundai H1' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '75.366' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Van"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2500 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 10"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/hyundaih1.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="bmw520") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='BMW 520' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '75.366' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Lujo"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 2000 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/bmw520.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="volvoxc90") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Volvo XC90 D5' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '75.366' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Lujo"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 2000 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/volvoxc90.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="peugeot308at") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Peugeot 308 Diesel AT' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '35.029' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Económico"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 2000 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/peugeot308at.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="citroenc3") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Citroen C3' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '29.987' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Económico"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 1600 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/citroenc3.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
  if ($_POST['autos']=="peugeot208") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Peugeot 208 HDI' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '29.987' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Económico"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 1400 cc"."<br>";
    echo "Combustible: Diesel"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/peugeot208.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
if ($_POST['autos']=="hyundaii20at") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Hyundai i20 AT' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value= '29.987' readonly='readonly' style='text-align:center'>";
  echo "Tipo: Económico"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1300 cc"."<br>";
  echo "Combustible: Gasolina"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/hyundaii20at.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
  if ($_POST['autos']=="hyundaii20") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Hyundai i20 MT' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value= '26.626' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Económico"."<br>";
    echo "Transmisión: Mecánica"."<br>";
    echo "Motor: 1300 cc"."<br>";
    echo "Combustible: Gasolina"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 5"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/hyundaii20.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
if ($_POST['autos']=="nissansentra") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Nissan Sentra CVT' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='41.752' readonly='readonly' style='text-align:center'>";
  echo "Tipo: Sedán"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1800 cc"."<br>";
  echo "Combustible: Gasolina"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 4"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/Sentra.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}

  if ($_POST['autos']=="nissansentra") {
    echo "<div id='recuadro1'>";
    echo "<form action='arriendo_2.php' method='post'>";
    echo "<br>";
    echo "<input type='text' name='nombreAuto' value='Nissan Sentra CVT' readonly='readonly' style='text-align:center'>";
    echo "<label = for''>Tarifa Diaria($):</label>";
    echo "<input type='text' name='tarifa' value='41.752' readonly='readonly' style='text-align:center'>";
    echo "Tipo: Sedán"."<br>";
    echo "Transmisión: Automática"."<br>";
    echo "Motor: 1800 cc"."<br>";
    echo "Combustible: Gasolina"."<br>";
    echo "Asientos: 5"."<br>";
    echo "Puertas: 4"."<br>";
    echo "<br>";
    echo "<div id='recuadro2'>";
    echo "<img src='images/catalogo/Sentra.png' width='400' height='300'>";
    echo "<br><br>";
    echo "Fecha de retiro:";
    echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
    echo "Fecha de devolución:";
    echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
    echo "<br>";
    echo "<input type='submit' value='CONTINUAR'>";
    echo "</div>";
    echo "</form>";
}
if ($_POST['autos']=="peugeot301") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Peugeot 301 HDI' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='35.029' readonly='readonly' style='text-align:center'>";
  echo "Tipo: Sedán"."<br>";
  echo "Transmisión: Mecánica"."<br>";
  echo "Motor: 1600 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/peugeot301.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="hyundaisantafe") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Hyundai Grand Santa Fe' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='66.962' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 2200 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 7"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/hyundaisantafe.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="hyundaitucson") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Hyundai Tucson 4x4 Diesel' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='56.878' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 2000 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 4"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/hyundaitucson.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="volkswagentiguan") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Volkswagen Tiguan 4x4 AT' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='55.197' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 2000 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/volkswagentiguan.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="peugeot5008") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Peugeot 5008 HDI' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='50.155' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 2000 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/peugeot5008.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="peugeot3008") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Peugeot 3008 HDI' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='41.752' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1600 cc"."<br>";
  echo "Combustible: Diesel"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/peugeot3008.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="hyundaicreta") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Hyundai Creta 4x2 AT' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='33.349' readonly='readonly' style='text-align:center'>";
  echo "Tipo: SUV"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1600 cc"."<br>";
  echo "Combustible: Gasolina"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/creta.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
if ($_POST['autos']=="audia4") {
  echo "<div id='recuadro1'>";
  echo "<form action='arriendo_2.php' method='post'>";
  echo "<br>";
  echo "<input type='text' name='nombreAuto' value='Audi A4' readonly='readonly' style='text-align:center'>";
  echo "<label = for''>Tarifa Diaria($):</label>";
  echo "<input type='text' name='tarifa' value='55.197' readonly='readonly' style='text-align:center'>";
  echo "Tipo: Premium"."<br>";
  echo "Transmisión: Automática"."<br>";
  echo "Motor: 1400 cc"."<br>";
  echo "Combustible: Gasolina"."<br>";
  echo "Asientos: 5"."<br>";
  echo "Puertas: 5"."<br>";
  echo "<br>";
  echo "<div id='recuadro2'>";
  echo "<img src='images/catalogo/audia4.png' width='400' height='300'>";
  echo "<br><br>";
  echo "Fecha de retiro:";
  echo "<input type='date' name='retiro' value='' style='text-align:center' required>";
  echo "Fecha de devolución:";
  echo "<input type='date' name='devolucion' value='' style='text-align:center' required>";
  echo "<br>";
  echo "<input type='submit' value='CONTINUAR'>";
  echo "</div>";
  echo "</form>";
}
echo "</div>";
}
?>
<br><br>

<a href="index.php"><h3>Volver a inicio</a></h3>

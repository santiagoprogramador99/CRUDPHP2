<?php


include("conexion.php");
session_start();
if(!isset($_SESSION['id'])){
	
	header("location: login.php");
}
$iduser =$_SESSION['id'];

$sql = "SELECT id_usuario, usuario FROM usuarios WHERE id_usuario = '$iduser'";

$resultado =$base->query($sql);
$row = $resultado->fetch(PDO::FETCH_ASSOC);
 ?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<title>tablas</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
		
	 <?php require 'partials/header.php' ?>



    


     <h5> HOLA,BIENVENIDO</h5>
	
	 <?php echo"usuario: ". utf8_decode($row['usuario']);?>
	<br>
      Ha iniciado sesion correctamente<br>
     

	
	
   
<img src="img/imagen2.gif"width="100" height="100"  ><br>
<h3>Porfavor selecciona una opción:</h3
      
   <br>
	
		<ul class="menu">
			<li><a href="caramelos.php">caramelos</a></li>
			<li><a href="bebidas.php">bebidas</a></li>
			<li><a href="comida_colombiana.php">comida colombiana</a></li>
			<li><a href="comida_mar_colombiana.php">comida de mar</a></li>
			<li><a href="usuarios.php">usuarios</a></li>
		
		</ul>
	
	<br>
	
	
<h4>ECHO POR:<BR>SANTIAGO OSSA NARANJO <br> Y <br>SANTIAGO ALVAREZ</h4>
	
<img src="img/2020.06.11_-_Como_hacer_un_GIF.gif" width="115" height="80">
	
	
	
	
	
	
	<br>
	<ul class="menu">
			
			<li><a href="logout.php">Cerrar sesion</a></li>
		</ul>
	
	
	
	
	
	
	
	
</body>
</html>
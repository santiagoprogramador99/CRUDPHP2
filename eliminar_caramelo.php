<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	
	
	require("conexion.php");
	
	//rescatar id,
	$id=$_GET['id'];
	
	$base->query("DELETE FROM caramelos WHERE id='$id'");
	
	header("Location:caramelos.php");
	
	
	?>
</body>
</html>
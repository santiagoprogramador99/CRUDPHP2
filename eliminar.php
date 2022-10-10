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
	
	$base->query("DELETE FROM bebidas_colombianas WHERE id='$id'");
	
	header("Location:bebidas.php");
	
	
	?>
</body>
</html>
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
	
	$base->query("DELETE FROM comida_colombiana WHERE id='$id'");
	
	header("Location:comida_colombiana.php");
	
	
	?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>
<?PHP
	include("conexion.php");
	//si no ha pulsado en el boton actualizar
	if(!isset($_POST['bot_actualizar'])){
	
	
	
	
	
	
	$id=$_GET["id"];
	$nombre_comida=$_GET["nom"];
	$precio=$_GET["pre"];
	$tipo_comida=$_GET["tip"];
		
	//si pulso en actualizar
	}else{
		
		$id=$_POST['id'];
		$nombre_comida=$_POST['nom'];
		$precio=$_POST['pre'];
		$tipo_comida=$_POST['tip'];
		
		$sql="UPDATE comida_colombiana SET nombre_comida=:minom, precio=:mipre, tipo_comida=:mitip WHERE Id=:miid";
		
		
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":miid"=>$id, ":minom"=>$nombre_comida, ":mipre"=>$precio, ":mitip"=>$tipo_comida));
		
		header("location:comida_colombiana.php");
		
	}
	?>
<p>
 
</p>
<p>&nbsp;</p>
	
	<!--DECIRLE al formulario se va hacer en la misma pagina-->
<form name="form1" method="post" action="<?php  echo $_SERVER['PHP_SELF']?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>"></td>
		
    </tr>
    <tr>
      <td>NOMBRE COMIDA</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre_comida?>"></td>
    </tr>
    <tr>
      <td>PRECIO</td>
      <td><label for="pre"></label>
      <input type="text" name="pre" id="pre"value="<?php echo $precio?>"></td>
    </tr>
    <tr>
      <td>TIPO COMIDA</td>
      <td><label for="tip"></label>
      <input type="text" name="tip" id="tip"value="<?php echo $tipo_comida?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
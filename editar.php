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
	$nombre_bebidas=$_GET["nom"];
	$precio=$_GET["pre"];
	$tipo_bebida=$_GET["tip"];
		
	//si pulso en actualizar
	}else{
		
		$id=$_POST['id'];
		$nombre_bebidas=$_POST['nom'];
		$precio=$_POST['pre'];
		$tipo_bebida=$_POST['tip'];
		
		$sql="UPDATE bebidas_colombianas SET nombre_bebidas=:minom, precio=:mipre, tipo_bebida=:mitip WHERE Id=:miid";
		
		
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":miid"=>$id, ":minom"=>$nombre_bebidas, ":mipre"=>$precio, ":mitip"=>$tipo_bebida));
		
		header("location:bebidas.php");
		
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
      <td>nombre_bebida</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre_bebidas?>"></td>
    </tr>
    <tr>
      <td>precio</td>
      <td><label for="pre"></label>
      <input type="text" name="pre" id="pre"value="<?php echo $precio?>"></td>
    </tr>
    <tr>
      <td>tipo_bebida</td>
      <td><label for="tip"></label>
      <input type="text" name="tip" id="tip"value="<?php echo $tipo_bebida?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
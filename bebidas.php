<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bebidas y comidas</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
	
	<?php

require("conexion.php");

//ver los registros


$conexion=$base->query("SELECT * FROM bebidas_colombianas");

//guardar en $registros un array de objetos
//ARRAY de objetos asociativos
$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
	
	//ingresar registros
	//si pulso
	if(isset($_POST['cr'])){
		
		
	
	$nombre_bebidas=$_POST['nom'];
	$precio=$_POST['pre'];
	$tipo_bebida=$_POST['tip'];
   
		
		$sql="INSERT INTO bebidas_colombianas (nombre_bebidas, precio, tipo_bebida) VALUES (:nom, :pre, :tip)";
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":nom"=>$nombre_bebidas, ":pre"=>$precio, ":tip"=>$tipo_bebida));
		
		header("location:bebidas.php");
}


?>


<h1>BEBIDAS COLOMBIANAS<span class="subtitulo">lo mejor de nuestra tierra</span></h1>
	<form name="form1" method="post" action="<?php  echo $_SERVER['PHP_SELF']?>">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">id</td>
      <td class="primera_fila">nombre_bebidas</td>
      <td class="primera_fila">precio</td>
      <td class="primera_fila">tipo_bebida</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
     </tr> 
   <?php
	  //temos el array llamado $registros,
	  
	  foreach ($registros as $bebidas_colombianas):
	  ?>
		
   	<tr>
		<!--pasar a trave de un enlace Id del objeto persona, el id corresponde al objeto en que esta -->
				  <td><?php echo $bebidas_colombianas->id?></td>
			      <td><?php echo $bebidas_colombianas->nombre_bebidas?></td>
				  <td><?php echo $bebidas_colombianas->precio?></td>
				  <td><?php echo $bebidas_colombianas->tipo_bebida?></td>
		
		<!--cuando pulse en el boton borrar nos lleva  a la pagian eliminar y nos propiedad id del objeto persona-->

		          <td class="bot"><a href="eliminar.php?id=<?php echo $bebidas_colombianas->id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
		
		
				  
					  
					  	<td class='bot'><a href="editar.php?id=<?php echo $bebidas_colombianas->id?> 
											& nom=<?php echo $bebidas_colombianas->nombre_bebidas?> 
											& pre=<?php echo $bebidas_colombianas->precio?> 
											& tip=<?php echo $bebidas_colombianas->tipo_bebida?>"> 
					  
					  <input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>
	
	<?php
	    endforeach;
	?>
	
	
	   
<tr>
	<td></td>
      <td><input type='text' name='nom' size='10' class='centrado'></td>
      <td><input type='text' name='pre'size='10' class='centrado'></td>
      <td><input type='text' name='tip' size='10' class='centrado'></td>
	
      <td><input class='bot' type='submit' name='cr' id='cr' value='Insertar'></td>
</tr>  
	  
	
	<td><a href="union.php">volver</a></td>
	
  </table>
	</form>

<p>&nbsp;</p>
</body>


</html>
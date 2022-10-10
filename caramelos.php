<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>comidas  y bebidas</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php
	
	

require("conexion.php");

//ver los registros


$conexion=$base->query("SELECT * FROM caramelos");

//guardar en $registros un array de objetos
//ARRAY de objetos asociativos
$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
	
	//ingresar registros
	//si pulso
	if(isset($_POST['cr'])){
		
		
	
	$nombre_caramelo=$_POST['nom'];
	$precio=$_POST['pre'];
	$tipo_caramelo=$_POST['tip'];
   
		
		$sql="INSERT INTO caramelos (nombre_caramelo, precio, tipo_caramelo) VALUES (:nom, :pre, :tip)";
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":nom"=>$nombre_caramelo, ":pre"=>$precio, ":tip"=>$tipo_caramelo));
		
		header("location:caramelos.php");
}


?>


<h1>CARAMELOS<span class="subtitulo">lo mejor de nuestra tierra</span></h1>
	<form name="form1" method="post" action="<?php  echo $_SERVER['PHP_SELF']?>">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">id</td>
      <td class="primera_fila">nombre_caramelo</td>
      <td class="primera_fila">precio</td>
      <td class="primera_fila">tipo_caramelo</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
     </tr> 
   <?php
	  //temos el array llamado $registros,
	  
	  foreach ($registros as $caramelo):
	  ?>
		
   	<tr>
		<!--pasar a trave de un enlace Id del objeto persona, el id corresponde al objeto en que esta -->
				  <td><?php echo $caramelo->id?></td>
			      <td><?php echo $caramelo->nombre_caramelo?></td>
				  <td><?php echo $caramelo->precio?></td>
				  <td><?php echo $caramelo->tipo_caramelo?></td>
		
		<!--cuando pulse en el boton borrar nos lleva  a la pagian eliminar y nos propiedad id del objeto persona-->

		          <td class="bot"><a href="eliminar_caramelo.php?id=<?php echo $caramelo->id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
		
		
				  
					  
					  	<td class='bot'><a href="editar_caramelo.php?id=<?php echo $caramelo->id?> 
											& nom=<?php echo $caramelo->nombre_caramelo?> 
											& pre=<?php echo $caramelo->precio?> 
											& tip=<?php echo $caramelo->tipo_caramelo?>"> 
					  
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
	 <br>
	<td><a href="union.php">volver</a></td>
		
	
	
  </table>
	</form>

<p>&nbsp;</p>
</body>


</html>
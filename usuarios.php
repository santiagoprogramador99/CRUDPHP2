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


$conexion=$base->query("SELECT * FROM usuarios");

//guardar en $registros un array de objetos
//ARRAY de objetos asociativos
$registros=$conexion->fetchAll(PDO::FETCH_OBJ);
	
	//ingresar registros
	//si pulso
	if(isset($_POST['cr'])){
		
		
	
	$usuario=$_POST['usu'];
	$contrasena=$_POST['con'];
		$direccion=$_POST['dir'];
		$correo=$_POST['cor'];
		$telefono=$_POST['tel'];

		
		$sql="INSERT INTO usarios (usuario, direccion, correo_electronico, telefono, contrasena) VALUES (:usu, :dir, :cor, :tel; :con)";
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":usu"=>$usuario, ":dir"=>$direccion, ":cor"=>$correo, ":tel"=>$telefono, ":con"=>$contrasena));
		
		header("location:usuarios.php");
}


?>


<h1>USUARIOS<span class="subtitulo">lo mejor de nuestra tierra</span></h1>
	<form name="form1" method="post" action="<?php  echo $_SERVER['PHP_SELF']?>">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">id_usuario</td>
      <td class="primera_fila">usuario</td>
		<td class="primera_fila">direccion</td>
		<td class="primera_fila">correo_electronico</td>
		<td class="primera_fila">telefono</td>
      
      
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
     </tr> 
   <?php
	  //temos el array llamado $registros,
	  
	  foreach ($registros as $usuarios):
	  ?>
		
   	<tr>
		<!--pasar a trave de un enlace Id del objeto persona, el id corresponde al objeto en que esta -->
				  <td><?php echo $usuarios->id_usuario?></td>
			      <td><?php echo $usuarios->usuario?></td>
		<td><?php echo $usuarios->direccion?></td>
		<td><?php echo $usuarios->correo_electronico?></td>
		<td><?php echo $usuarios->telefono?></td>
		
				  
				  
		
		
		
    </tr>
	
	<?php
	    endforeach;
	?>
	
	

	  
	
	<td><a href="union.php">volver</a></td>
	
  </table>
	</form>

<p>&nbsp;</p>
</body>


</html>
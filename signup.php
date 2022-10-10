<?php

  require 'conexion.php';

  $message = '';

  if (!empty($_POST['usuario']) &&  !empty($_POST['contrasena'])) {
    $sql = "INSERT INTO usuarios (usuario, direccion, correo_electronico, telefono, contrasena) VALUES (:usuario, :direc, :correo, :telef, :contrasena)";
    $stmt = $base->prepare($sql);
	  
    $stmt->bindParam(':usuario', $_POST['usuario']);
	   $stmt->bindParam(':direc', $_POST['direccion']);
	   $stmt->bindParam(':correo', $_POST['correo_electronico']);
	   $stmt->bindParam(':telef', $_POST['telefono']);
	$password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado con exito';								
    } else {
      $message = 'perdon,el usuario no se ha creado ';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>REGISTRO</h1>
    <span>ir a <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST">
      <input name="usuario" type="text" placeholder="ingrese usuario">
     <input name="direccion" type="text" placeholder="ingrese su direccion">
		 <input name="correo_electronico" type="text" placeholder="ingrese su correo electronico">
		 <input name="telefono" type="text" placeholder="ingrese su telefono">
		 <input name="contrasena" type="password" placeholder="ingrese su contraseña">
     
      <input type="submit" value="Registrarse">
    </form>

  </body>
</html>

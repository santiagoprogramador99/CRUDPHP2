<?php


 session_start();

  if (isset($_SESSION['id'])) {
     header('Location:union.php');
  }
  require 'conexion.php';

  if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {
    $records = $base->prepare('SELECT id_usuario, usuario, contrasena FROM usuarios WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
      $_SESSION['id'] = $results['id_usuario'];
     header("Location:login.php");
    } else {
      $message = 'Perdon, las credenciales no considen';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>si no eres usuario <a href="signup.php">registrate</a></span>

    <form action="login.php" method="POST">
      <input name="usuario" type="text" placeholder="ingrese usuario">
      <input name="contrasena" type="password" placeholder="ingrese contraseña">
      <input type="submit" value="ingresar">
    </form>
  </body>
</html>

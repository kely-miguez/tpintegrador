<?php
require_once("./class/Autenticador.php");
$autenticar = new Autenticador();

   if (isset($_COOKIE['email'])) {

       $_SESSION['email'] = $_COOKIE['email'];
       $_SESSION['avatar'] = '';
       $_SESSION['id'] = 1;
       $_SESSION['admin'] = false;
   }


   if (!$autenticar->elUsuarioEstaLogeado()) {
       header('location:login.php');
   }



   echo 'Bienvenido ' . $_SESSION['email'];
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/perfil.css">

    <title></title>
  </head>
  <?php
require_once('plantilla/header.php');
   ?>
  <body>
    <h1>Bienvenido</h1>
  <div class="continer"; >
    <form class="" action="registro.php" method="post" enctype="multipart/form-data">
    <input class="controles" type="text" name="nombres" placeholder ="">

  </div>
  <br>
  <div class = "continer"; >

  </div>

<div>
  <input type="submit" name="ENVIAR" value="ENVIAR">
</div>

  <div >
<input type="submit" name="compras realizadas" value="compras realizadas">

  </div>
  <form class="" action="logout.php" method="post">
      <button type="submit" name="button">Cerrar Sesion</button>
  </form>
  <a href="logout.php">Salir</a>
  <?php
  require_once('plantilla/footer.php');
   ?>
  </body>
</html>

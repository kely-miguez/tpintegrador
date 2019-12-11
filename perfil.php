<?php
require_once('plantilla/header.php');
require_once('plantilla/menu.php');
 ?>

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

 <body>
  <div class="container">

    <form class="" action="registro.php" method="post" enctype="multipart/form-data">
</form>
  </div>

  <div class = "container">
  <form class="" action="logout.php" method="post">
     <button type="submit" class="btn btn-secondary btn-sm" name="button">Cerrar sesion</button>
  </form>
  <form class="" action="carrito.php" method="get">
    <button type="submit" class="btn btn-secondary btn-sm" name="button">Compras realizadas</button>
    </form>
  <a href="logout.php">Salir</a>
    </div>


    </body>
    <?php
    require_once('plantilla/footer.php');
     ?>

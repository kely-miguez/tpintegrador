<?php
if(isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave'];
  $telefono = $_POST['telefono'];
}
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500, initial-scale=1">

    <title>Formulario de registro</title>
    <link rel="stylesheet" href="CSS/registro.css">
  </head>
  <body>
    <h1>Formulario de registro</h1>
    <form class="" action="" method="post"
    class="form-register">
      <h2 class="form__titulo">CREA UNA CUENTA</h2>
      <div class="contenedor-inputs">
        <input type="text" name="nombre" placeholder="Nombre"class="input-48" required>
        <input type="text" name="apellido" placeholder="Apellido"class="input-100" required>
        <input type="email" name="correo" placeholder="Correo"class="input-48" required>
        <input type="text" name="usuario" placeholder="Usuario"class="input-48" required>
        <input type="password" name="clave" placeholder="Contraseña"class="input-48" required>
        <input type="text" name="Telefono" placeholder="Telefono"class="input-100" required>
        <input type="submit" value="Registrar"class="btn-enviar" required>
        <p class:"form__link">¿Ya tienes una cuenta?<a href="#">Ingresa aqui</a></p>
      </div>
     <?php
     include('validarform.php');
      ?>

    </form>

  </body>
</html>
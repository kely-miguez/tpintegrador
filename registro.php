<?php

 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500, initial-scale=1">

    <title>Formulario de registro</title>
    <link rel="stylesheet" href="CSS/registro.css">
    <script src="form.js/validar.js">

    </script>
  </head>
  <body>
    <h1>Formulario de registro</h1>
    <form class="" action="" method="post"
    class="form-register" onsubmit="return validar();">
      <h2 class="form__titulo">CREA UNA CUENTA</h2>
      <div class="contenedor-inputs">
        <input type="text"id="nombre"name="nombre" placeholder="Nombre"class="input-48">
        <input type="text"id="apellido"name="apellido" placeholder="Apellido"class="input-100">
        <input type="email"id="correo" name="correo" placeholder="Correo"class="input-48">
        <input type="text" id="usuario" name="usuario" placeholder="Usuario"class="input-48">
        <input type="password"id="clave" name="clave" placeholder="Clave"class="input-48">
        <input type="text"id="telefono" name="telefono" placeholder="Telefono"class="input-100">
        <input type="submit" value="Registrar"class="btn-enviar">
        <p class:"form__link">¿Ya tienes una cuenta?<a href="#">Ingresa aqui</a></p>
      </div>


    </form>

  </body>
</html>

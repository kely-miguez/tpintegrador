<?php

 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500, initial-scale=1">

    <title>Formulario de registro</title>
    <link rel="stylesheet" href="CSS/registro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </script>
  </head>
  <body>
    <div class="container">

    <h1>Formulario de registro</h1>
    <form class="" action="" method="post"
    class="form-register" onsubmit="return validar();">
      <h2 class="form__titulo">CREA UNA CUENTA</h2>
      <div class="contenedor-inputs">
        <div class="row">
                  <div class="form-group col-md-12 col-lg-12">
                    <input type="text"id="nombre"name="nombre" placeholder="Nombre"class="input-48">
                    <input type="text"id="apellido"name="apellido" placeholder="Apellido"class="input-100">
                  </div>
        </div>

        <div class="row">
          <div class="form-group col-md-12 col-lg-12">
            <input type="email"id="correo" name="correo" placeholder="Correo"class="input-48">
            <input type="text" id="usuario" name="usuario" placeholder="Usuario"class="input-48">
            <input type="text"id="telefono" name="telefono" placeholder="Telefono"class="input-100">
          </div>
        </div>

        <div class="row">
      <div class="form-group col-md-12 col-lg-12">
        <input type="password"id="clave" name="clave" placeholder="Clave"class="input-48">
        <input type="password"id="confirmarclave" name="confirmarclave" placeholder="Confirmar clave"class="input-48">
      </div>
    </div>

        <input type="submit" value="Registrar"class="btn-enviar">
        <p class:"form__link">¿Ya tienes una cuenta?<a href="#">Ingresa aqui</a></p>
      </div>


    </form>

  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

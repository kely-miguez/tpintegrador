 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/tp1.css">
    <title>formulario</title>
  </head>
  <body>
<div class="">


    <form class="" action="index.html" method="post" enctype="multipart/form-data">
      <h1>CONTACTO</h1>
      <p>
        <label for="Nombre">

          <input id ="Nombre" type="text" name="Nombre" value="" placeholder="NOMBRE">
        </label>
      </p>
      <p>
        <label for="Numero">

          <input id = "numero" type="text" name="numero" value="" placeholder="NUMERO">
        </label>
      </p>
      <p>
        <label for="Email">

          <input id ="Email" type="email" name="email" value="" placeholder="EMAIL">
        </label>
        <p>
          <label for="Mensaje">

            <textarea name="Mensaje" class="form-textarea" placeholder="MENSAJE"></textarea>
          </label>
        </p>

      <p>
        <input type="submit" name="" value="ENVIAR" id = "boton">
      </p>
      <div class="">
        <label for="">Cv</label>
        <input type="file" name="cv" value="">
  </div>
      <div class="">
        <label for="">Foto de Perfil</label>
        <input type="file" name="foto de perfil" value="">
      </div>
     <div class="">
       <input type="submit" name="" value="Enviar">
     </div>

    </form>
</div>
  </body>
</html>

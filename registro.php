<?php
 session_start();
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500, initial-scale=1">

    <title>Formulario de registro</title>
    <link rel="stylesheet" href="CSS/logini.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </script>
  </head>
  <body>
    <div class="container">

      <?php

    $registroCorrecto=0;
      $usuario=[
        'nombres' => '',
        'email'=> '',
        'apellido' => '',
        'password' => '',
        'confirmacion' => '',
        'avatar'=>''
      ];

      $errores=[
        'nombres' => '',
        'email'=> '',
        'apellido' => '',
        'password' => '',
        'confirmacion' => '',
        'avatar' => ''
      ];
      $errorEmail='';
     if($_POST){
       if ($_FILES['avatar']['error'] === 0) {

           $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

           if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
               $errorAvatar = 'archivo de formato invalido';
           } else {
               $usuario['avatar'] = $_POST['email'] . '.' . $ext;

               move_uploaded_file($_FILES['avatar']['tmp_name'], 'avatars/' . $usuario['avatar']);
           }
       }
         if($_POST['nombres']!=''){
           $usuario['nombres'] = $_POST['nombres'];
         }
         else{
           $errores['nombres']="El nombre no puede estar vacío";

         }
         if($_POST['apellido']!=''){
           $usuario['apellido'] = $_POST['apellido'];
         }
         else{
           $errores['apellido']="El apellido no puede estar vacío";
         }
         if($_POST['email']!=''){

           $usuario['email'] = $_POST['email'];


           $archivo=FILE_GET_CONTENTS('usuario.json');
           $usuarios=json_decode($archivo,true);
           foreach($usuarios as $emailRegistrado){
             if($emailRegistrado['email']==$usuario['email']){
               $errores['email']='El email ya se encuentra registrado';

             }
           }

         }
         else {
          $errores['email']="Ingrese un email";
         }
        if($_POST['password']!=''){
          $usuario['password'] = $_POST['password'];
        }
        else {
         $errores["password"]="La contraseña no puede estar vacía";
        }
        if($_POST['confirmacion']!=''){
          $usuario['confirmacion'] = $_POST['confirmacion'];
        }
        else {
          $errores["password"]= "Confirme su contraseña";
        }
        if($_POST['password'] != $_POST['confirmacion']){
          $errores["password"]="Las contraseñas no coinciden";
        }
        if($errores['nombres']==""&&$errores['apellido']==""&&$errores['email']==""&&$errores['password']==""){


         $hash1=password_hash($usuario['password'],PASSWORD_DEFAULT);
         $usuario['password']=$hash1;



         $usuarios[] = $usuario;
         $registroCorrecto = 1;
         $json=json_encode($usuarios);
         FILE_PUT_CONTENTS('usuario.json',$json);
    }
    }
         ?>





        <?php  ?>

        <div class="container">
          <h4>FORMULARIO DE REGISTRO</h4>

          <form class="" action="registro.php" method="post" enctype="multipart/form-data">
            <div class="error"><?php echo $errores['nombres']; ?></div>
            <input class="controles" type="text" name="nombres" value="<?php echo $usuario['nombres']; ?>" placeholder="Ingrese su nombre">
            <div class="error"><?php echo $errores['apellido']; ?></div>
            <input class="controles" type="text" name="apellido" value="<?php echo $usuario['apellido']; ?>" placeholder="Ingrese su apellido" >
            <div class="error"><?php echo $errores['email']; ?></div>
            <input class="controles" type="email" name="email" value="<?php echo $usuario['email']; ?>" placeholder="Ingrese su correo electronico">
            <div class="error"><?php echo $errores['password']; ?></div>
            <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">

            <input class="controles" type="password" name="confirmacion" value="" placeholder="Confirme su contraseña">
            <div class="form-group">
              <label for="avatar">Subir avatar</label>
              <input type="file"  id="avatar" name="avatar">
            </div>
            <button class="boton" type="submit" class="btn btn-secondary btn-sm">Registrar</a></button>
            <p>Ya estás registrado? <a class="link" href="login.php">Iniciar sesión</a></a> </p>



          </form>
          <?php
           if($registroCorrecto==1){?>
            <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">REGISTRADO EXITOSAMENTE!</h4>
          <p>Bienvenido <?php echo $usuario['nombres']; ?>, con email <?php echo $usuario['email']; ?> </p>
          <hr>
          <p class="mb-0">Bienvenido a Dayross.</p>
        </div>

        <?php  } ?>

        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

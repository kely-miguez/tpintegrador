<?php
session_start();

  if($_POST){
    $errores=[];
    $usuario=[];
    $_SESSION['selogeo']="";
    if($_POST['email']!=''){
      $email=$_POST['email'];
    }
    else{
      $errores[]="Ingrese su email";
    }
    if($_POST['password']!=''){
      $password=$_POST['password'];
    }
    else{
      $errores[]="Ingrese su contraseña";
    }
    if(empty($errores)){
    $usuariosjson=FILE_GET_CONTENTS('usuario.json');
    $datosusuarios=json_decode($usuariosjson,true);

    foreach ($datosusuarios as $usuarios) {
      if($usuarios['email']==$email && password_verify($password, $usuarios['password'])){
        $_SESSION['email']=$email;
        $_SESSION['nombres']=$usuarios['nombres'];
        $_SESSION['selogeo']=true;

      }
  }
}
 if($_SESSION['selogeo']!=true){
   $_SESSION['email']='';
   $_SESSION['nombres']='';
   $_SESSION['selogeo']='';
 }
  if(isset($_POST['mantenerme']) && $_SESSION['selogeo']==true){
    setcookie('email', $email, time() + 60*60*24*30);
    header('location:perfil.php');
  }
  else{
    if($_SESSION['selogeo']==true){
      header('location:perfil.php');
    }
  }
}
 ?>

    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Formulario de Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0
    maximum-scale=1,minimum-scale=1">
    <link rel="stylesheet" href="CSS/login.css">

  </head>
  <header>

  </header>
  <body>
    <form class="" action="" method="post">
      <h2>Inicie sesión o Registrese</h2>
      <input type="email" placeholder="&#128272; email" name="Email">
      <input type="password" placeholder="&#128272; password" name="password">
      <input type="submit" value="Ingresar">

    </form>

  </body>
</html>

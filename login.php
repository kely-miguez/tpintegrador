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

  }
}
 if(isset($_SESSION['selogeo'])){

   $_SESSION['email']='';
   $_SESSION['nombres']='';
   $_SESSION['selogeo']='';
 }
  if(isset($_POST['mantenerme']) && $_SESSION['selogeo']==true){
    setcookie('email', $email, time() + 60*60*24*30);
    header('location:perfil.php');
  }
  else{
    if(isset($_SESSION['selogeo'])){
      header('location:perfil.php');
    }
  }

 ?>
 <!doctype html>
 <html class="en" lang="ltr">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="x-ua-compatible" content="ie=edge">
 	<title>Iniciar sesion /Dayross</title>
 	<meta name="description" content="">
 	<meta name="viewport" content="width=device-width, initial-scale=1">


 	<link rel="shortcut icon" href="images/favicon.ico">
 	<link rel="apple-touch-icon" href="images/icon.png">

 	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
 	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">


  <link rel="stylesheet" href="perfil.php">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="css/custom.css">

  </head>
  <body>
    <form class="" action="" method="post">
      <h2>Inicie sesión o Registrese</h2>
      <input type="email" placeholder="&#128272; email" name="Email">
      <input type="password" placeholder="&#128272; password" name="password">
      <input type="submit" value="Ingresar">

   <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
     <div class="footer-static-top">
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <div class="footer__widget footer__menu">
               <div class="ft__logo">
                 <a href="index.php">
                     <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/318/2342459318_d7484af5-64db-4947-976b-1069df3db2a5.png?cb=1571669948" alt="logo images">
                 </a>
                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
               </div>
               <div class="footer__content">
                 <ul class="social__net social__net--2 d-flex justify-content-center">
                   <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                   <li><a href="#"><i class="bi bi-google"></i></a></li>
                   <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                   <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                   <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="copyright__wrapper">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-12">
             <div class="copyright">
               <div class="copy__right__inner text-left">
                 <p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </footer>

 </body>
 </html>

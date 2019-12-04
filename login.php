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



 <!doctype html>
 <html class="en" lang="ltr">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="x-ua-compatible" content="ie=edge">
 	<title>Iniciar sesion /Dayross</title>
 	<meta name="description" content="">
 	<meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="perfil.php">
<<<<<<< HEAD
 	<link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/stylos.css">
  <link rel="stylesheet" href="CSS/login.css">

  </head>
  <body>
    <div class="wrapper" id="wrapper">
  		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
  			<div class="container-fluid">
  				<div class="row">
  					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
  						<div class="logo">
  							<a href="index.php">
  								<img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/318/2342459318_d7484af5-64db-4947-976b-1069df3db2a5.png?cb=1571669948" alt="logo images">
  							</a>
  						</div>
  					</div>
  				
  		</header>

          <div class="ht__bradcaump__area bg-image--3">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="bradcaump__inner text-center">
                          	<h2 class="bradcaump-title">Iniciar sesion</h2>
                              <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.php">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Iniciar sesion</span>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

    <div class="container">
=======
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/logini.css">
  <link rel="stylesheet" href="css/custom.css">

  </head>
  <body>
    <form class="" action="" method="post">
      <h2>Inicie sesión o Registrese</h2>
      <div class="container">
>>>>>>> c0dd2512e8a2df9d382bd9ca520b934890ee1260
      <h4>Iniciar Sesión</h4>

      <?php
      if($_POST){
      if($_SESSION['selogeo']!=true && empty($errores)){
      echo "email o contraseña invalida";
    }
    else{
      foreach($errores as $error){
        echo $error;
        echo '<br>';
      }
  }
  echo '<br>';
}
       ?>
      <form class="" action="login.php" method="post" enctype="multipart/form-data">
      <input class="controles" type="email" name="email" value="" placeholder="Ingrese su correo electronico">
      <input class="controles" type="password" name="password" value="" placeholder="Ingrese su contraseña">
      <input type="checkbox" name="mantenerme" value="">
      <label for="">Mantenerme logueado</label>
      <button class="" type="submit" class="btn btn-secondary btn-sm">Login</button>
      </form>
      <p>No tienes cuenta? <a class="link" href="registro.php">Registrate</a></a> </p>

    </div>
  

<<<<<<< HEAD
=======

>>>>>>> c0dd2512e8a2df9d382bd9ca520b934890ee1260
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
                 <p>Dayross marca lider en indumentaria kids.</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </footer>

 </body>
 </html>

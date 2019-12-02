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
  					<div class="col-lg-8 d-none d-lg-block">
  						<nav class="mainmenu__nav">
  							<ul class="meninmenu d-flex justify-content-start">
  								<li class="drop"><a href="index.php">Home</a></li>
  								<li class="drop"><a href="registro.php">Registro</a>
  							  <li class="drop"><a href="login.php">Iniciar sesion</a>
  								<li class="drop"><a href="faq.php">F.A.Q</a>
  								<li class="drop"><a href="contact.php">Contacto</a>
                    	<li class="drop"><a href="perfil.php">Perfil</a>
  							</ul>
  									</div>
  								</li>
  									</div>
  								</li>
  									</div>
  								</li>
  						</nav>
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
    <?php //incluyo el header:
      ?>

    <div class="container">
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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

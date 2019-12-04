<?php
$errores = [];
if ($_POST) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
  $website = $_POST['website'];
  $message = $_POST['message'];
	if (empty($firstname)) {
		$errores['firstname'] = 'El campo nombre esta vacio..';
	}
	if (empty($lastname)) {
		$errores['lastname'] = 'El campo apellido esta vacio..';
	}
	if (empty($email)) {
		$errores['email'] = 'El campo email esta vacio..';
	}
	if (empty($website)) {
		$errores['website'] = 'El campo numero esta vacio..';
	}
	if(empty($message)){
		$errores['message'] = 'El campo mensaje esta vacio..';
	}
	if (!$errores) {
	 echo "todo ok!";
	}
}
 ?>
 <!doctype html>
 <html class="no-js" lang="zxx">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="x-ua-compatible" content="ie=edge">
 	<title>Contacto /Dayross</title>
 	<meta name="description" content="">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="perfil.php">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/stylos.css">
  <link rel="stylesheet" href="CSS/login.css">
 </head>
 <body>
 	<div class="wrapper" id="wrapper">

    <?php
    require_once('plantilla/header.php');
     ?>

         <div class="ht__bradcaump__area bg-image--6">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="bradcaump__inner text-center">
                         	<h2 class="bradcaump-title">Contacto</h2>
                             <nav class="bradcaump-content">
                               <a class="breadcrumb_item" href="index.php">Home</a>
                               <span class="brd-separetor">/</span>
                               <span class="breadcrumb_item active">Contacto</span>
                             </nav>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <section class="wn_contact_area bg--white pt--80 pb--80">

         	<div class="container">
         		<div class="row">
         			<div class="col-lg-8 col-12">
         				<div class="contact-form-wrap">
         					<h2 class="contact__title">Mensaje.</h2>

                             <form id="contact-form" action="#" method="post">
                                 <div class="single-contact-form space-between">
 																	<input type="text" value='<?=$firstname ?? '' ?>' name="firstname" placeholder="Nombre*">
 																	<small style="color : red;"><?=$errores['firstname'] ?? '' ?></small>
 																	<input type="text" value='<?=$lastname ?? '' ?>' name="lastname" placeholder="Apellido*">
 																		<small style="color : red;"><?=$errores['lastname'] ?? '' ?></small>
                                 </div>
                                 <div class="single-contact-form space-between">
 																	<input type="email" value='<?=$email ?? '' ?>' name="email" placeholder="Email*">
 																		<small style="color : red;"><?=$errores['email'] ?? '' ?></small>
 																	<input type="text" value='<?=$website ?? '' ?>' name="website" placeholder="telefono*">
 																		<small style="color : red;"><?=$errores['website'] ?? '' ?></small>
                                 </div>

                                 <div class="single-contact-form message">
 																	<textarea type ="text" name="message" value='<?=$message ?? '' ?>' placeholder="Dejanos tu mensaje..."></textarea>
 																			<small style="color : red;"><?=$errores['message'] ?? '' ?></small>
                                 </div>
                                 <div class="contact-btn">
                                     <button type="submit">Enviar</button>
                                 </div>
                             </form>
                         </div>
                         <div class="form-output">
                             <p class="form-messege">
                         </div>
         			</div>
         			<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
         				<div class="wn__address">
         					<h2 class="contact__title">Contactanos.</h2>
         					<div class="wn__addres__wreapper">
         						<div class="single__address">
         							<i class="icon-location-pin icons"></i>
         							<div class="content">
         								<span>Direccion:</span>
         								<p>Bogota 3264 , Local : 44</p>
         							</div>
         						</div>
         						<div class="single__address">
         							<i class="icon-phone icons"></i>
         							<div class="content">
         								<span>telefono:</span>
         								<p>1158904175</p>
         							</div>
         						</div>
         						<div class="single__address">
         							<i class="icon-envelope icons"></i>
         							<div class="content">
         								<span>Email:</span>
         								<p>dayross@gmail.com</p>
         							</div>
         						</div>
         					</div>
         				</div>
         			</div>
         		</div>
         	</div>
         </section>
         <?php
         require_once('plantilla/footer.php');
          ?>
 </body>
 </html>

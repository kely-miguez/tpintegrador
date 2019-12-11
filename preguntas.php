<?php
require_once('plantilla/header.php');
require_once('plantilla/menu.php');

 ?>
<body>
		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
						<div class="logo">
							<a href="index.php">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">

						</nav>
									</div>
								</li>


		</header>


        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>

		<section class="wn__faq__area bg--white pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="wn__accordeion__content">
							<h2>Preguntas frecuentes, cualquier duda contactarse con nosotros</h2>

						</div>
						<div id="accordion" class="wn_accordion" role="tablist">
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingOne">
						          	<h5>
						                <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">¿Que formas de pago puedo aprovechar para realizar mi compra?</a>
						          	</h5>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="card-body">
					            		<img alt="" class="user-page-logos" src="img/visa.png">
													<img alt="" class="user-page-logos" src="img/merc.png">
													<img alt="" class="user-page-logos" src="img/pago.png">
					            	</div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingTwo">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
							                ¿Cual es el costo de envio? </a>
						          	</h5>
						        </div>
						        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
					          		<div class="card-body">El costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra.</div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingThree">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
							                ¿Como se realizan los envios?</a>
						          	</h5>
						        </div>
						        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
					          		<div class="card-body">Trabajamos con:</div>
												<br>
												<img alt="" class="user-page-logos" src="img/oca.png">
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingFour">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">
							                ¿Cuanto tarda en llegar el pedido? </a>
						          	</h5>
						        </div>
						        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
					          		<div class="card-body">El tiempo de entrega dependerá del tipo de envío seleccionado. En general la demora se encuentra entre 3 y 7 días hábiles luego de acreditado el pago.</div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingFive">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">
							                ¿Cual es el plazo para realizar el cambio?</a>
						          	</h5>
						        </div>
						        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
					          		<div class="card-body">Puedes solicitar un cambio hasta 15 días luego de realizada la compra.</div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingSix">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">
							                ¿Que debo hacer si el producto no llega en buen estado?</a>
						          	</h5>
						        </div>
						        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
											<div class="card-body"></div>
					          		<div class="card-body">Ponte en contacto con nosotros al www.dayross@gmail.com</div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingSeven">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">
							                ¿Como recomiendan lavar nuestras prendas?</a>
						          	</h5>
						        </div>
						        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
					          		<div class="card-body">Siempre es importante seguir los consejos especificados en las etiquetas: lavar con agua fria (preferentemente al reves), no usar secarropas y evitar planchar sobre la estampa.</div>
						        </div>
						    </div>
					</div>
				</div>
			</div>
		</section>

		<?php
require_once('plantilla/footer.php');
		 ?>

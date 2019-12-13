<?php
  require_once('plantilla/header.php');
  require_once('plantilla/menu.php');


 ?>

  <section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="img/foto.png" class="d-block w-100" alt="portada1">
     </div>
     <div class="carousel-item">
       <img src="img/foto2.png" class="d-block w-100" alt="portada3">
     </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
  </div>


  <h1 class="title">Productos</h1>


    <div class="row">
      <div class="col">
        <form class="" action="carrito.php" method="get">
        <img src="img/imagen 2.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>

      </div>
      <div class="col">
        <img src="img/imagen3.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
      </div>
      <div class="w-100"></div>
      <div class="col">
        <img src="img/imagen4.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
      </div>
      <div class="col">
        <img src="img/imagen5.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
require_once('plantilla/footer.php');
 ?>

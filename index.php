<?php
  require_once('plantilla/header.php');
  require_once('plantilla/menu.php');


 ?>
 <section class="padre">


  <section class="principal">
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
</section>
<br>
  <h1 class="niña">PRODUCTOS NIÑA</h1>

<section class="productos">
    <div class="row">
      <div class="col-md-3">
        <form class="" action="carrito.php" method="get">
        <img src="img/imagen 2.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>

      </div>
      <div class="col-md-3">
        <img src="img/1.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
      </div>
      <div class="col-md-3">
        <img src="img/3.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
      </div>
      <div class="col-md-3">
        <img src="img/12.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
      </div>


      <div class="w-100"></div>
      <div class="col-md-3">
        <img src="img/9.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
      </div>
      <div class="col-md-3">
        <img src="img/8.png" alt="producto"><br>
        <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
           </div>
           <div class="col-md-3">
           <img src="img/6.png" alt="producto"><br>
           <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
              </div>
              <div class="col-md-3">
              <img src="img/7.png" alt="producto"><br>
              <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
                 </div>
        </form>
    </div>
    <br>
     <h1 class="niño">PRODUCTOS NIÑO</h1>

     <div class="row">
       <div class="col-md-3">
         <form class="" action="carrito.php" method="get">
         <img src="img/20.png" alt="producto"><br>
         <button type="submit" class="btn btn-primary btn-lg">Comprar</button>

       </div>
       <div class="col-md-3">
         <img src="img/21.png" alt="producto"><br>
         <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
       </div>
       <div class="col-md-3">
         <img src="img/22.png" alt="producto"><br>
         <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
       </div>
       <div class="col-md-3">
         <img src="img/23.png" alt="producto"><br>
         <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
       </div>


       <div class="w-100"></div>
       <div class="col-md-3">
         <img src="img/29.png" alt="producto"><br>
         <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
       </div>
       <div class="col-md-3">
         <img src="img/30.png" alt="producto"><br>
         <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
            </div>
            <div class="col-md-3">
            <img src="img/34.png" alt="producto"><br>
            <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
               </div>
               <div class="col-md-3">
               <img src="img/35.png" alt="producto"><br>
               <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
                  </div>
         </form>
     </div>

</section>
</section>
<?php
require_once('plantilla/footer.php');
 ?>

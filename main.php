<?php
include_once('header.php');
?>
  <div class="container">
<div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="img/cover.jpeg" class="d-block w-100 banner" alt="...">
      <div class="carousel-caption">
            <h1 class="text-uppercase">browse items</h1>    
            <a href="product_view.php" class="btn btn-outline-light mb-3">View products</a>
      </div>
    </div>
    <div class="carousel-item">
    <img src="img/clothes.jpg" class="d-block w-100 banner" alt="...">
      <div class="carousel-caption">
      <h1 class="text-uppercase">post an add</h1>
                <a class="btn btn-outline-light mb-3" href="#" data-bs-toggle="modal" data-bs-target="#RegiModal">Post AD</a>
      </div>
    </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></div>


            
            <div class="container text-box text-center mt-5" id="explore">
           <h3>Explore your needs...</h3>
           <p class="mt-4 fs-5"> <span>From electronics to clothing, there's something for everyone in our store. <span></p>
           <div class="row row-cols-1 row-cols-md-3 g-5 mt-3 mb-4">
  <div class="col">
    <div class="card">
        <a href="#">
      <img src="img/electronics.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-title fs-5">Electronics</p>   
    </div>
    </a>
  </div>
  </div>

  <div class="col">
    <div class="card">
    <a href="#">
      <img src="img/cloth.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-title fs-5">Clothes</p>

      </div>
      </a>
    </div>
  </div>

  <div class="col">
    <div class="card">
    <a href="#">
      <img src="img/toys.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-title fs-5">Toys</p>

      </div>
      </a>
    </div>
  </div>
  </div>

  <a href="product_view.php"> MORE </a>          
</div>
</div>

<?php 
    include_once("footer.php"); ?>

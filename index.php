<?php
  $title = 'Home';
  include 'templates/header.php';
  include 'templates/navigation.php';
?>

<!-- Section: Carousel Section -->
<div class="container">
  <div id="main-slider" class="carousel slide mt-4" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="2"></li>
    </ol><!-- .carousel-indicators -->

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="img/slide_01.jpg" alt="Our Facilities" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">Brand New Facilities</h3>
        </div>
      </div><!-- .carousel-item -->
      <div class="carousel-item">
        <img src="img/slide_02.jpg" alt="Our Facilities" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">Learn About Our Services</h3>
        </div>
      </div><!-- .carousel-item -->
      <div class="carousel-item">
        <img src="img/slide_03.jpg" alt="Our Facilities" class="d-block img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">New Website: 2 for 1 services</h3>
        </div>
      </div><!-- .carousel-item -->
    </div><!-- .carousel-inner -->

    <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a href="#main-slider" class="carousel-control-next" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- #main-slider -->
</div>

<!-- Section: New-Website Section -->
<section class="new-website py-5 mt-4">
  <h2 class="text-center text-uppercase"><span class="text-lowercase">Welcome to Our New</span> Website</h2>
  <p class="text-center mt-3">Feel Like New with our Massages and Professional
  <span class="text-center d-block">therapy</span></p>
</section>

<!-- Section: 3-Column Image Links Section -->
<div class="container pb-5">
  <div class="row">

      <div class="col-12 col-md-4 text-center">
        <div class="image-links">
          <img src="img/service_01.jpg" class="img-fluid mt-4" alt="">
        </div>
        <div class="row no-gutters">
          <div class="col-7 mx-auto col-md-9 mx-auto image-info pt-4">
              <h3 class="text-center text-uppercase"><span class="text-lowercase">learn More </span> about us</h3>
              <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read More</a>
          </div>
        </div>
      </div><!-- .md-4 -->
      <div class="col-12 col-md-4 text-center">
        <div class="image-links">
          <img src="img/service_02.jpg" class="img-fluid mt-4" alt="">
        </div>
        <div class="row no-gutters">
          <div class="col-7 mx-auto col-md-9 mx-auto image-info pt-4">
              <h3 class="text-center text-uppercase"><span class="text-lowercase">about our </span> services</h3>
              <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read More</a>
          </div>
        </div>
      </div><!-- .md-4 -->
      <div class="col-12 col-md-4 text-center">
        <div class="image-links">
          <img src="img/service_03.jpg" class="img-fluid mt-4" alt="">
        </div>
        <div class="row no-gutters">
          <div class="col-7 mx-auto col-md-9 mx-auto image-info pt-4">
              <h3 class="text-center text-uppercase"><span class="text-lowercase">visit our </span> store</h3>
              <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read More</a>
          </div>
        </div>
      </div><!-- .md-4 -->

  </div>
</div>

<!-- Section: Business Hours -->
<div class="business-hours">
  <div class="container">
    <div class="row">
      <div class="col-md-6 py-5">
      <?php include 'templates/business_hours.php'; ?>
      </div>
      <div class="col-md-6 bg-hours img-fluid">
        
      </div>
    </div>
  </div>
</div>

<!-- Section: Products -->
<div class="container products mt-5">
  <h2 class="text-center text-uppercase"><span class="text-lowercase">checkout our</span> Products</h2>
  
  <div class="row py-4">
    <div class="col-6 col-md-3">
      <div class="card mb-5">
        <a href="#">
          <img src="img/product_thumb_01.jpg" alt="" class="card-img-top img-fluid">
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase my-2">Product 1</h3>
            <p class="card-text text-uppercase">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, quidem.</p>
            <p class="price text-center pb-3 mb-0">$25</p>
          </div><!-- .card-block -->
        </a>
      </div><!-- .card -->   
    </div><!-- .col-6 col-md-6 -->
    <div class="col-6 col-md-3">
      <div class="card mb-5">
        <a href="#">
          <img src="img/product_thumb_02.jpg" alt="" class="card-img-top img-fluid">
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase my-2">Product 2</h3>
            <p class="card-text text-uppercase">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, quidem.</p>
            <p class="price text-center pb-3 mb-0">$45</p>
          </div><!-- .card-block -->
        </a>
      </div><!-- .card -->   
    </div><!-- .col-6 col-md-6 -->
    <div class="col-6 col-md-3">
      <div class="card mb-5">
        <a href="#">
          <img src="img/product_thumb_03.jpg" alt="" class="card-img-top img-fluid">
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase my-2">Product 3</h3>
            <p class="card-text text-uppercase">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, quidem.</p>
            <p class="price text-center pb-3 mb-0">$55</p>
          </div><!-- .card-block -->
        </a>
      </div><!-- .card -->   
    </div><!-- .col-6 col-md-6 -->
    <div class="col-6 col-md-3">
      <div class="card mb-5">
        <a href="#">
          <img src="img/product_thumb_04.jpg" alt="" class="card-img-top img-fluid">
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase my-2">Product 4</h3>
            <p class="card-text text-uppercase">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, quidem.</p>
            <p class="price text-center pb-3 mb-0">$60</p>
          </div><!-- .card-block -->
        </a>
      </div><!-- .card -->   
    </div><!-- .col-6 col-md-6 -->


  </div><!-- .row -->
  
</div><!-- .container -->

<!-- Section: Appointments -->
<div class="appointment container-fluid pb-5">
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-3 text-center">
      <h3 class="text-uppercase pt-4 mb-3">make an appointment</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime cumque ipsam natus, aperiam repellendus consequatur possimus perspiciatis voluptatum culpa dolores.</p>
      <a href="#" class="btn btn-primary btn-lg mt-3 text-uppercase">Read More</a>
    </div><!-- .col-12 -->
  </div><!-- .row -->
</div><!-- .container-fluid -->

<?php include 'templates/footer.php'; ?>
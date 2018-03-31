<?php
  $title = 'Services';
  include 'templates/header.php';
  include 'templates/navigation.php';
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/services.jpg" class="img-fluid" alt="">
      <h2 class="text-uppercase d-none d-md-block">Services</h2>
    </div>
  </div>
</div>

<div class="container py-5 mb-0">
  <div class="row">
    <main class="col-lg-8 main-content">
    <h2 class="d-block d-md-none text-uppercase text-center">Services</h2>

    <div id="services" role="tablist" >

      <div class="card">
        <div class="card-header" role="tab" id="heading">
          <h3 class="mb-0 text-uppercase"><a href="#collapse1" data-parent="#services" data-toggle="collapse">
            Service One
          </a></h3>
        </div>
        <div id="collapse1" class="collapse show">
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus totam sit esse praesentium vero aperiam consequatur deleniti voluptatem voluptas sapiente alias earum veniam id facilis cum, saepe eligendi quis labore. Vel omnis temporibus assumenda! Iure neque, eaque, quam adipisci velit facilis est omnis voluptates maxime nostrum beatae vel amet voluptatibus praesentium ut impedit cum nemo, aut exercitationem laboriosam consectetur. Cum.
          </div><!-- .card-body -->
        </div><!-- .collapse1 -->
      </div><!-- .card -->

      <div class="card">
        <div class="card-header" role="tab" id="heading">
          <h3 class="mb-0 text-uppercase"><a href="#collapse2" data-parent="#services" data-toggle="collapse">
            Service Two
          </a></h3>
        </div>
        <div id="collapse2" class="collapse">
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus totam sit esse praesentium vero aperiam consequatur deleniti voluptatem voluptas sapiente alias earum veniam id facilis cum, saepe eligendi quis labore. Vel omnis temporibus assumenda! Iure neque, eaque, quam adipisci velit facilis est omnis voluptates maxime nostrum beatae vel amet voluptatibus praesentium ut impedit cum nemo, aut exercitationem laboriosam consectetur. Cum.
          </div><!-- .card-body -->
        </div><!-- .collapse1 -->
      </div><!-- .card -->

      <div class="card">
        <div class="card-header" role="tab" id="heading">
          <h3 class="mb-0 text-uppercase"><a href="#collapse3" data-parent="#services" data-toggle="collapse">
            Service Three
          </a></h3>
        </div>
        <div id="collapse3" class="collapse">
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus totam sit esse praesentium vero aperiam consequatur deleniti voluptatem voluptas sapiente alias earum veniam id facilis cum, saepe eligendi quis labore. Vel omnis temporibus assumenda! Iure neque, eaque, quam adipisci velit facilis est omnis voluptates maxime nostrum beatae vel amet voluptatibus praesentium ut impedit cum nemo, aut exercitationem laboriosam consectetur. Cum.
          </div><!-- .card-body -->
        </div><!-- .collapse1 -->
      </div><!-- .card -->
      
    </main>
    <aside class="col-lg-4 pt-4 pt-lg-0 discount">
      <div class="p-3">
        <h3 class="text-center text-uppercase mt-4">First Time Customers</h3>
        <p class="lead text-center mt-3">Get 20% Off in any service with this coupon:</p>
        <div class="coupon p-1">
          <p class="text-center text-uppercase">
            <span class="display-4 pt-2">20% Off</span>
            in any service
          </p>
        </div>
      </div>
    </aside>
  </div>
</div>
</div>
<?php 
  include 'templates/appointment.php';
  include 'templates/footer.php';
?>
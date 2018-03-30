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

<div class="container pt-5 mb-0">
  <div class="row">
    <main class="col-lg-8 main-content">
    <h2 class="d-block d-md-none text-uppercase text-center">Services</h2>

    </main>
    <aside class="col-lg-4 pt-4 pt-lg-0">
      <div class="sidebar hours p-3">
      <?php include 'templates/business_hours.php'; ?>
      </div>
    </aside>
  </div>

</div>
<?php include 'templates/footer.php'; ?>
<?php
  $title = 'About Us';
  include 'templates/header.php';
  include 'templates/navigation.php';
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/about_us.jpg" class="img-fluid" alt="">
      <h2 class="text-uppercase d-none d-md-block">About Us</h2>
    </div>
  </div>
</div>

<div class="container pt-5 mb-0">
  <div class="row">
    <main class="col-lg-8 main-content">
      <h2 class="d-block d-md-none text-uppercase text-center">About Us</h2>
      
      <p>Undoubtedly, beautiful elegant shoes on a thin hairpin visually pull up the figure (it is believed that one centimeter of the heel "eats" a kilo of weight), "lengthen" the legs and give femininity to the whole image. But that's all, the positive moments are over. A high heel loads the spine, obstructs the work of blood flow in the legs, promotes the development of varicose veins and thrombi. The optimum height of the heel is 4-6 centimeters.</p>

      <p>The main condition is the health of the feet. In order for the knees to be beautiful, normal blood circulation and skin condition are necessary. To improve the condition of the legs you need to wear a good, matched shoes. Preference should be given to comfortable and soft shoes, and not to chase the newfangled trends. Modern women want to look beautiful and sexy.</p>

      <div class="facilities-gallery" data-toggle="modal">
        <a href="#" data-target="#image_1">
          <img src="img/gallery_thumb_01.jpg" class="rounded">
        </a>
        <div class="modal fade" id="image_1" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_01.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    <aside class="col-lg-4 pt-4 pt-lg-0">
      <div class="sidebar hours p-3">
      <?php include 'templates/business_hours.php'; ?>
      </div>
    </aside>
  </div>

</div>
<?php include 'templates/footer.php'; ?>
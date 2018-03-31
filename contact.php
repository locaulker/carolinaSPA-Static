<?php
  $title = 'Contact Us';
  include 'templates/header.php';
  include 'templates/navigation.php';
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/contact_us.jpg" class="img-fluid" alt="">
      <h2 class="text-uppercase d-none d-md-block">Contact Us</h2>
    </div>
  </div>
</div>

<div class="container py-5 mb-0">
  <div class="row">

    <main class="col-12 col-md-10 offset-md-1 main-content">
    <h2 class="d-block d-md-none text-uppercase text-center">Contact Us</h2>
      <form action="send.php" method="post" class="p-5 pt-md-3 contact-form">

         <div class="form-group">
           <label for="name" class="mt-3">Name:</label>
           <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
         </div> 
         <div class="form-group">
           <label for="email">eMail Address:</label>
           <input type="email" class="form-control" id="email" name="email" placeholder="Your eMail" required>
         </div> 
         <div class="form-group">
           <label for="message">Message:</label>
           <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
         </div>
         <input type="submit" class="btn btn-primary text-uppercase" name="submit" value="Submit">

      </form>
    </main>
    
  </div><!-- .row -->
</div><!-- .container -->

<?php
  include 'templates/footer.php';
?>
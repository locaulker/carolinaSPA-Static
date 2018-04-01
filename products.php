<?php
  $title = 'Products / Store';
  include 'templates/header.php';
  include 'templates/navigation.php';
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/store.jpg" class="img-fluid" alt="">
      <h2 class="text-uppercase d-none d-md-block">Products</h2>
    </div>
  </div>
</div>

<div class="container py-5 mb-0">
  <div class="row">
    <main class="col-12 main-content">
    <h2 class="d-block d-md-none text-uppercase text-center">Products</h2>

    <div class="row products py-4">
    
    <?php
    try {
      require_once 'inc/db.php';
      $sql = 'SELECT `id`, `name`, `image_thumb`, `price`, `short_description` FROM `products` ';
      $result = $db->query($sql);
    } catch (Exception $e) {
      $error = $e->getMessage();
    }

    $rows = $result->num_rows;
    if (!$rows) {
      echo "No Results Found";
    } else {
      while($products = $result->fetch_assoc()) { ?>
        <div class="col-6 col-md-3">
          <div class="card mb-5">
            <a href="product.php?product=<?php echo $products['id']; ?>">
              <img src="img/<?php echo $products['image_thumb']; ?>" alt="" class="card-img-top img-fluid">
              <div class="card-block">
                <h3 class="card-title text-center text-uppercase my-2"><?php echo $products['name']; ?></h3>
                <p class="card-text text-uppercase"><?php echo $products['short_description']; ?></p>
                <p class="price text-center pb-3 mb-0">$<?php echo $products['price']; ?></p>
              </div><!-- .card-block -->
            </a>
          </div><!-- .card --> 
        </div> 
    <?php   
      }
    } $db->close(); ?>

    </div><!-- .row -->
    
</div>
</div>
<?php 
  include 'templates/footer.php';
?>
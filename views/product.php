<?php $title = "Product"; ?>

<?php
if (isset($_SESSION['user'])) {
   require_once('navbarUser.php');
} else {
   require_once('navbar.php');
}
?>
<?php ob_start();
?>
<!-- product section start -->
<div class="product_section layout_padding">
   <!-- <div class="container"> -->
      
   
   <div class="row">
      
      <div class="col-md-12">
         <h1 class="product_taital">Products</h1>
         <p class="product_text">Discover our selection of high-quality products to meet all your technological
            needs.</p>
      </div>
      
   </div>
   
 
   <div class="container">
      <div class="row">
         <?php foreach ($products as $product) : ?>
            <div class="col-md-4 col-lg-3">
               <div class="item">
                  <h6 class="price_text"><br><span style="color: #f75261;"><?php echo $product['nom_produit']; ?></span></h6>
                  <div class="image_main"><img style="width: 200px;height: 170px;" src="images/<?php echo $product['image_produit']; ?>" alt="image" /></div>
                  <h6 class="price_text"><br><span style="color: #f75261;"><?php echo $product['prix_produit']; ?></span></h6>

               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>
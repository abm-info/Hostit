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
      
   <div class="product_bt_1"><a href="index.php?action=addProduct">Add Product</a></div>
   <div class="row">
      
      <div class="col-md-12">
         <h1 class="product_taital">Product List</h1>
         <p class="product_text">You DashBoard Made to add Product easily made by SIAT</p>
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
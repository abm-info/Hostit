<?php $title = "success "; ?>

<?php ob_start(); ?>

<div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div><img src="images/signupsuccess.png" class="about_img"></div>
               </div>
               
            </div>
         </div>
</div>

<?php $content = ob_get_clean();?>
<?= require_once('views/layout.php')?>
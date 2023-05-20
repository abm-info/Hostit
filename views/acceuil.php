<?php $title = "Home Page"; ?>

<?php 
if(isset($_SESSION['user'])){
   require_once('navbarUser.php');
} 
else { 
   require_once('navbar.php');
}
?>
<?php ob_start(); ?>



<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div><img src="images/index.webp" class="about_img"></div>
         </div>
         <div class="col-md-6">
            <h1 class="about_taital">About company</h1>
            
            <p class="about_text">We are honored to have you visit our site, where we offer a range of high-quality
               electronic equipment for sale. Here,
               we hope you will find everything you need to equip yourself with computers, tablets, smartwatches, and
               more.</p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
         </div>
      </div>
   </div>
</div>
<div class="contact_section layout_padding">
   <div class="container-fluid">
      <h1 class="contact_taital">Contact Us</h1>
      <div class="contact_section_2">
         <div class="row">
            <div class="col-md-6">
               <div class="image_7"><img src="images/tab.jpg"></div>
            </div>
            <div class="col-md-6">
            <div class="send_bt"><a href="#" data-toggle="modal" data-target="#messageModal">Click To send a Message</a></div>
            </div>
         </div>
      </div>
   </div>
</div>


<!-- Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="messageModalLabel">Send a Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="messageForm" action="/controller/contactUsController.php" method="POST">
               <div class="form-group">
                  <label for="name">Your Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
               </div>
               <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control" id="phone" name="phone" required>
               </div>
               <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
               </div>
               <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Send</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>


<?php $content = ob_get_clean();?>

<?php require_once('layout.php'); ?>

<script>
   // Optional: You can add client-side form validation using JavaScript/jQuery here
</script>

<?php $title = "Login"; ?>

<?php 
if(isset($_SESSION['user'])){
   header('location:index.php');
} 
else { 
   require_once('navbar.php');
}
?>

<?php ob_start();
?>
  <div class="contact_section layout_padding">
        <div class="container-fluid">
            <h1 class="contact_taital">CONNEXION</h1>
            <form method="post" action="controller/login.php">
                <input type="email" class="mail_text" placeholder="Your Email" name="login" required />
                <input type="password" class="mail_text" placeholder="Password" name="password" required />
                <button type="submit" class="send_bt" name="connexion">CONNEXION</button>
            </form>
        </div>
    </div>
<?php $content = ob_get_clean();?>
<?php require_once('layout.php'); ?>

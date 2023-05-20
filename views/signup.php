<?php $title = "Sign Up"; ?>

<?php ob_start(); 
require_once('views/navbar.php');
?>


    <div class="contact_section layout_padding">
        <div class="container-fluid">
            <h1 class="contact_taital">Register</h1>
            <form method="post" action="controller/signup.php">
                <input type="text" class="mail_text" placeholder="First Name" name="signUpFirstName" required />
                <input type="text" class="mail_text" placeholder="Last Name" name="signUpLastName" required />
                <input type="email" class="mail_text" placeholder="Email" name="signUpemail" required />
                <input type="password" class="mail_text" placeholder="Password" name="signUpPassword" required />
                <input type="password" class="mail_text" placeholder="Re-type Password" name="signUpPassword2" required />
                <input type="text" class="mail_text" placeholder="Phone Number" name="signUpGsm" required />
                <button type="submit" class="send_bt" name="register">Register!</button>
            </form>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require_once('layout.php'); ?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
 <!-- Bootstrap 4 CSS -->
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap 4 JS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Meta Tags -->
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="logo" href="index.php"><img src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=">-----</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="login_menu">
                            <ul>
                                <li><a href="index.php?action=logout">Log Out</a></li>
                                <li><a href="index.php?action=profile"><img src="images/user-icon.png"></a></li>
                                <li><a href="#"><img src="images/trolly-icon.png"></a></li>
                                <li><a href="#"><img src="images/search-icon.png"></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</head>


   
<body>
    <div>
        <?= $content ?>
        </div>
</body>


<footer>
       <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <div class="location_icon">
                  <ul>
                     <li><a href="#"><img src="images/map-icon.png"></a></li>
                     <li><a href="#"><img src="images/mail-icon.png"></a></li>
                     <li><a href="#"><img src="images/call-icon.png"></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="mail_box">
                  <textarea class="enter_email_text" placeholder="Enter Your Email" rows="5" id="comment"
                     name="Message"></textarea>
                  <div class="subscribe_bt_1"><a href="#">Subscribe</a></div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                     <li><a href="#"><img src="images/youtub-icon.png"></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="footer_section_2">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <h3 class="company_text">Product</h3>
                  <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                     volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
               </div>
               <div class="col-lg-3 col-md-6">
                  <h3 class="company_text">Shop</h3>
                  <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                     volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
               </div>
               <div class="col-lg-3 col-md-6">
                  <h3 class="company_text">Company</h3>
                  <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                     volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
               </div>
               <div class="col-lg-3 col-md-6">
                  <h3 class="company_text">MY ACCOUNT</h3>
                  <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                     volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free html Templates</a></p>
      </div>
   </div>
   <!-- copyright section end  -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <!-- owl carousel -->
   <script>
      $('.owl-carousel').owlCarousel({
         loop: true,
         margin: 30,
         nav: true,
         responsive: {
            0: {
               items: 1
            },
            600: {
               items: 3
            },
            1000: {
               items: 4
            }
         }
      })
   </script>
</footer>
</html>
<?php
    session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Marco's Pizza</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid p-0">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-5 col-lg-5">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.php">home</a></li>
                                            <li><a href="Menu.php">Menu</a></li>
                                            <li><a class="active" href="about.php">About</a></li>
                                            `
                                         
                                           <!--<li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo-img">
                                    <a href="index.php">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                                <div class="book_room">
                                    <div class="button-group-area mt-40">    
                                        <?php
                                   
                                   if (isset($_SESSION['logged']['name'])){
                                        echo<<<BUTTON
                                        
                                        <a href="logout.php" class="genric-btn primary circle">Log out</a>
                                        <h3></h3>

BUTTON;                                    

                                    }else{
                                        echo<<<BUTTON
                                        <a href="login.php" class="genric-btn primary circle">Log In</a>
                                        <a href="register.php" class="genric-btn info circle">Register</a>
BUTTON; 
                                    }

                                            
                                    ?>
                                   
                            </div>
                            <?php
                                   
                                   if (isset($_SESSION['logged']['name'])){
                                        echo<<<BUTTON
                                        
                                        <a href="#" class="fa fa-user-circle-o" style="font-size:48px;color:white"></a>
                                        <h3 style="color: white"> &nbsp {$_SESSION['logged']['name']}</h3>
                                        
BUTTON;                                    

                                    }

                                          
                                    ?>
                                                                         
                                </div>
                                
                             
                                
                            
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->

  <!-- bradcam_area_start -->
  <div class="bradcam_area breadcam_bg_1 overlay">
    <h3>about</h3>
</div>
<!-- bradcam_area_end -->
<!-- about_area_start -->
<div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_thumb2">
                        <div class="img_1">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Best Pizza <br>
                                    in your City</h3>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate</p>
                        <div class="img_thumb">
                            <img src="img/jessica-signature.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- gallery_start -->
    <div class="gallery_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                            <div class="section_title mb-70 text-center">
                                    <span>Gallery Image</span>
                                    <h3>Our Gallery</h3>
                                </div>
                    </div>
                </div>
            </div>
            <div class="single_gallery big_img">
                    <a class="popup-image" href="img/gallery/1.png">
                        <i class="ti-plus"></i>
                    </a>
                <img src="img/gallery/1.png" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/2.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="img/gallery/2.png" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/3.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="img/gallery/3.png" alt="">
            </div>
    
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/4.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="img/gallery/4.png" alt="">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/5.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="img/gallery/5.png" alt="">
            </div>
            <div class="single_gallery big_img">
                <a class="popup-image" href="img/gallery/6.png">
                    <i class="ti-plus"></i>
                </a>
                <img src="img/gallery/6.png" alt="">
            </div>
        </div>

    <!-- testimonial_area_start  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <span>Testimonials</span>
                        <h3>Happy Customers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/1.png" alt="">
                                            </div>
                                            <h4>Kristiana Chouhan</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/2.png" alt="">
                                            </div>
                                            <h4>Arafath Hossain</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/3.png" alt="">
                                            </div>
                                            <h4>A.H Shemanto</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- testimonial_area_ned  -->

<!-- instragram_area_start -->
<div class="instragram_area">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="img/instragram/1.png" alt="">
                <div class="ovrelay">
                    <a href="https://www.instagram.com/marcospizza/" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="img/instragram/2.png" alt="">
                <div class="ovrelay">
                    <a href="https://www.instagram.com/marcospizza/" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="img/instragram/3.png" alt="">
                <div class="ovrelay">
                    <a href="https://www.instagram.com/marcospizza/" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="single_instagram">
                <img src="img/instragram/4.png" alt="">
                <div class="ovrelay">
                    <a href="https://www.instagram.com/marcospizza/" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- instragram_area_end -->

<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
               
                </div>
              
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="socail_links text-center">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/marcospizza/" target="_blank">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/marcospizza" target="_blank">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/MarcosPizza/" target="_blank">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                 
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
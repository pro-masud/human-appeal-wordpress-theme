<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package human_appeal
 */

get_header();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Appeal</title>
    <!-- fonts-awosame -->
    <link rel="stylesheet" href="./css/all.css">
    <!-- Main style file -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Main style file -->
    <link rel="stylesheet" href="./css/style.css">
     <!-- Main style file -->
     <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
    <!-- NABTOP____BAR  Start-->
    <nav class="top-nav">
        <div class="container">
           <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="top-info">
                        <p>
                            <span><i class="fa-solid fa-envelope"></i> : Hello@humanappealbd.org</span>
                        </p>
                        <p>
                            <span><i class="fa-solid fa-phone"></i> : Hello@humanappealbd.org</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="top-social">
                        <div class="social-link">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="log_in">
                            <form>
                                <button>Login</button>
                                <button>Register</button>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </nav>
    <!-- NABTOP____BAR End-->
    <!-- Main NavBar____BAR Start-->
    <nav  class="navbar navbar-expand-lg sticky-top navbar-light py-3">
       <div class="container">
            <a class="navbar-brand" href="#"><img src="./images/logo/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse hader_nav" id="navbarNav">
                <ul  class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="foundemessage.html">About us</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="project.html" id="human_appeal" data-bs-toggle="dropdown">Project</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="#">project</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">project</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">project</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">project</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">project</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="testmunial.html">Get Involved</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
                <form class="form-inline top-btn  ms-auto">
                    <button class="btn">Donete Now</button>
                </form>
            </div>
       </div>
    </nav>

    <!-- post page styleing now -->
    <section class="post-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="post-item">
                        <div class="post-img">
                           <a href="#"><img src="./images/project/pro1.png" alt="a"></a>
                        </div>
                        <div class="post-info">
                            <h4>Camp & Local Community </h4>
                            <p>Let’s stand together with the deprived families Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, molestias.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-item">
                        <div class="post-img">
                           <a href="#"><img src="./images/project/pro1.png" alt="a"></a>
                        </div>
                        <div class="post-info">
                            <h4>Camp & Local Community </h4>
                            <p>Let’s stand together with the deprived families Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, molestias.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-item">
                        <div class="post-img">
                           <a href="#"><img src="./images/project/pro1.png" alt="a"></a>
                        </div>
                        <div class="post-info">
                            <h4>Camp & Local Community </h4>
                            <p>Let’s stand together with the deprived families Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, molestias.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-item">
                        <div class="post-img">
                           <a href="#"><img src="./images/project/pro1.png" alt="a"></a>
                        </div>
                        <div class="post-info">
                            <h4>Camp & Local Community </h4>
                            <p>Let’s stand together with the deprived families Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, molestias.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-item">
                        <div class="post-img">
                           <a href="#"><img src="./images/project/pro1.png" alt="a"></a>
                        </div>
                        <div class="post-info">
                            <h4>Camp & Local Community </h4>
                            <p>Let’s stand together with the deprived families Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, molestias.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-item">
                        <div class="post-img">
                           <a href="#"><img src="./images/project/pro1.png" alt="a"></a>
                        </div>
                        <div class="post-info">
                            <h4>Camp & Local Community </h4>
                            <p>Let’s stand together with the deprived families Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, molestias.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="pagination">
                        <ul>
                            <li><a href="#"><i class="fa-sharp fa-solid fa-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa-sharp fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- post page styleing End now -->
    
    <!-- footer section part start now -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <div class="footer-img">
                               <a href="#"> <img src="./images/logo/flogo.png" alt="flogo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <h4><i class="fa-solid fa-phone"></i> Phone</h4>
                            <div class="footer-info">
                                <p>+880 1727 809264 (whatsapp)</p>
                                <p>+880 1886 809264 </p>
                                <p>+880 1770 198277</p>
                            </div>
                            <div class="footer-social-link">
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <h4><i class="fa-solid fa-envelope"></i> Email</h4>
                            <div class="footer-info">
                                <p>contact@humanappealbd.org</p>
                                <p>humanappealbd2010@gmail.com</p>
                            </div>
                        </div>
                        <div class="footer-btn">
                            <a href="#">Donate Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                            <h4><i class="fa-solid fa-location-pin"></i> Location</h4>
                            <div class="footer-info">
                                <p>Al Bayan Complex, Link Road, Cox’s Bazar, Bangladesh</p>
                                <p><strong>Liaison Office:</strong>#05, Road#05, Priyanka City, Sector#12, Uttara, Dhaka-1230</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-item">
                           <div class="pages-link">
                                
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                           <div class="pages-link">
                                <a href="#">Home</a>
                                <a href="#">About</a>
                                <a href="#">Blog</a>
                                <a href="#">Gellary</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                           <div class="pages-link">
                                <a href="#">Recent Activities</a>
                                <a href="#">News</a>
                                <a href="#">Career</a>
                                <a href="#">Contact Us</a>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-item">
                           <div class="pages-link">
                                <a href="#">Terms and Condition</a>
                                <a href="#">About donation</a>
                                <a href="#">Get Involved</a>
                                <a href="#">Become a doner</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-copy-right-text">
                            <p>© 2023 Human Appeal Bangladesh All right reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-right-link">
                            <a href="#">FAQ</a>
                            <a href="#">HELP DESK</a>
                            <a href="#">SUPPORT</a>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section part end now -->


   

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

	

<?php
get_sidebar();
get_footer();

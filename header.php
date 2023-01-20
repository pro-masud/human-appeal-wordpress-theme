<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package human_appeal
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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
            <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?> ./access/images/logo/logo.png" alt=""></a>
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

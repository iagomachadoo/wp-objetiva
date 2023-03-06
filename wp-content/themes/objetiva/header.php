<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name');?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(  );?>/assets/images/favicon.png">
    <!-- Start Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
    <!-- End Google fonts -->
    <!-- Start Header Wordpress -->
    <?php wp_head(); ?>
    <!-- End Header Wordpress -->
</head>
<body>
    
<!-- Start Navbar Area --> 
<div class="navbar-area style2">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?php echo get_template_directory_uri(  );?>/assets/images/white-logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/white-logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#sobre-nos" class="nav-link">Sobre Nós</a>
                        </li>

                        <li class="nav-item"> 
                            <a href="#" class="nav-link">Em Desenvolvimento</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Portfólio</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Contato</a>
                        </li> 
                    </ul>

                    <div class="others-options">
                        <div class="option-item">
                            <div class="sidebar-btn">
                                <div class="sidebar-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="others-options ms-auto">
                        <div class="option-item">
                            <div class="sidebar-btn">
                                <div class="sidebar-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Search Modal -->
<div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            
            <div class="modal-body">
                <form class="modal-search-form">
                    <input type="search" class="search-field" placeholder="Search...">
                    
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Modal -->

<!-- Sidebar Modal -->
<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"> <i class="fa-solid fa-xmark"></i></button>

            <div class="modal-body">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/white-logo.png"  alt="logo">
                </a>
                <div class="sidebar-content">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>

                    <ul class="info-list">
                        <li><i class="fa-solid fa-phone"></i> <a href="tel:9901234567">+990-123-4567</a></li>
                        
                        <li><i class="fa-regular fa-envelope"></i><a href="mailto:hello@mala.com">hello@vidmo.com</a></li>

                        <li><i class="fa-regular fa-location-dot"></i> 413 North Las Vegas, NV 89032</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/?lang=en" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/?lang=en" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->
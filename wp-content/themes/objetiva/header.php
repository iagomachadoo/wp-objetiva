<!DOCTYPE html>
<html lang="en">
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
                            <a href="#" class="nav-link dropdown-toggle active">
                                Home            
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link active ">Home One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">Home Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">Home Three</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="about-us.html" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item"> 
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages 
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Team 
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="team-style-one.html" class="nav-link">Team Style One</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="team-style-two.html" class="nav-link">Team Style Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-style-three.html" class="nav-link">Team Style Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Works 
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="works.html" class="nav-link">Works</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="works-details.html" class="nav-link">Works Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Video 
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="video.html" class="nav-link">Video</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="video-details.html" class="nav-link">Video Details</a>
                                        </li>
                                    </ul>
                                </li>

                                
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Users 
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">Login</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="recover-password.html" class="nav-link">Recover Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>

                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">Terms And Conditions</a>
                                </li>

                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">404 Page</a>
                                </li>
                            </ul>
                        </li>

                            

                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Blog 
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-grid.html" class="nav-link">Blog Grid</a>
                                </li>

                                <li class="nav-item">
                                    <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                </li>

                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact-us.html" class="nav-link">Contact Us</a>
                        </li>
                    </ul>

                    <div class="others-options">
                        <div class="option-item">
                            <div class="search-btn">
                                <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="sidebar-btn">
                                <div class="sidebar-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal"></div>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                                    <span class="slider round"></span>
                                </label>
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
                            <div class="search-btn">
                                <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="sidebar-btn">
                                <div class="sidebar-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal"></div>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch2" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider2">
                                    <span class="slider round"></span>
                                </label>
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
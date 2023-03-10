<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name');?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(  );?>/favicon.ico">
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
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(  );?>/assets/images/Objetiva-logo.webp" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/Objetiva-logo.webp" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#sobre-nos" class="nav-link">Sobre Nós</a>
                        </li>

                        <li class="nav-item"> 
                            <a href="#em-desenvolvimento" class="nav-link">Em Desenvolvimento</a>
                        </li>

                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link">Portfólio</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contato" class="nav-link">Contato</a>
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
</div>
<!-- End Navbar Area -->
<?php
get_header();
include(TEMPLATEPATH . '/recaptcha.php');
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <!--Start Banner Area-->
        <div class="banner-area" id="home">
            <div class="container-fluid2">
                <div class="banner-conteudo position-relative">
                    <div class="banner-texto position-absolute mw-100 h-100 d-flex flex-column justify-content-center ms-sm-5 ms-3 ps-xl-5 ps-lg-3">
                        <h1><span>SONHO, CÂMERA,</span> <span>AÇÃO!</span></h1>
                        <p>Hub de projetos culturais na indústria criativa.</p>
                    </div>
                    <div class="banner-video">
                        <video autoplay muted loop preload="metadata" class="img-fluid d-md-block d-none">
                            <source src="<?php echo get_template_directory_uri();?>/assets/images/video-logo/Banner-video.mp4" type="video/mp4">
                        </video>

                        <video autoplay muted loop preload="metadata" class="video-mobile img-fluid d-md-none d-block">
                            <source src="<?php echo get_template_directory_uri();?>/assets/images/video-logo/Banner-video-mobile3.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!--End Banner Area-->

        <!--Start Sobre Nós Area-->
        <div class="experience-area pt-70 pb-100" id="sobre-nos">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="experience-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/about/Imagem_sobre.webp" alt="Image">
                            <div class="experience">
                                <h2><?php echo date("Y") - 2008;?></h2>
                                <span>Anos de Experiência</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="experience-content pl-15">
                            <div class="experience-title">
                                <span>Sobre Nós</span>
                                <h2>A Objetiva</h2>
                            </div>
                            <div class="content">
                                <p>Somos uma produtora audiovisual de entretenimento que une criatividade, experiência e networking para atuar em todas as etapas do seu projeto. Com a missão de contar histórias que façam a diferença, sejam inesquecíveis e toquem o coração das pessoas, atuamos nos mais variados projetos a partir de 4 pilares: Cultura, Turismo, Família e Patrimônio.</p>
                                <p>Criada em 2008 por Lucas Assunção, a Objetiva possui uma ampla gama de experiência em múltiplos projetos, incluindo séries, filmes, festivais, espetáculos teatrais, álbuns e clipes musicais.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/about/about-shape.png" alt="Image">
                </div>
            </div>
        </div>
        <!--End Sobre Nós Area-->

        <!--Start Diferenciais Area-->
        <div class="features-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Diferenciais</span>
                    <h2>Pilares de atuação</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-features-card">
                            <div class="features-img">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60">
                                    <image id="cultura" x="1" y="1" width="58" height="58" xlink:href="data:img/png;base64,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"/>
                                </svg>

                            </div>
                            <h3>Cultura</h3>
                            <p>Projetos que apresentam, representam e preservam as infinitas manifestações culturais de um povo.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="single-features-card">
                            <div class="features-img">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60">
                                    <image id="paisagem" y="4" width="60" height="52" xlink:href="data:img/png;base64,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"/>
                                </svg>
                            </div>
                            <h3>Turismo</h3>
                            <p>Projetos que evidenciam viagens, paisagens, cidades ou países - e as experiências vividas nesses lugares.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                        <div class="single-features-card">
                            <div class="features-img">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60">
                                    <image id="cultura_1_" data-name="cultura (1)" x="1" y="1" width="58" height="58" xlink:href="data:img/png;base64,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"/>
                                </svg>
                            </div>
                            <h3>Família</h3>
                            <p>Projetos que criam memórias, eternizam histórias familiares e fortalecem a importância dos nossos ancestrais.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                        <div class="single-features-card">
                            <div class="features-img">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60">
                                    <image id="online-streaming" x="1" y="9" width="58" height="46" xlink:href="data:img/png;base64,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"/>
                                </svg>
                            </div>
                            <h3>Patrimônio</h3>
                            <p>Projetos que valorizam a história de um povo e cuidam da identidade cultural que molda o presente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Diferenciais Area-->

        <!--Start Em Desenvolvimento Area-->
        <div class="blog-area ptb-100" id="em-desenvolvimento">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="section-title style2">
                            <h2>Em Desenvolvimento</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                        $args = array (
                            'post_type' => 'projetos em andamento',
                            'order'   => 'ASC'
                        );
                        $the_query = new WP_Query ( $args );

                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog-card">
                                <div class="blog-img" style="background-color: aquamarine;">
                                    <img src="<?php the_field("imagem");?>" alt="Image">
                                    <div class="tag">
                                        <span><?php the_field("formato");?></span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="info">
                                        <ul>
                                            <li><span class="p-0"><?php the_field("genero");?></span></li>
                                        </ul>
                                    </div>
                                    <h2 class="mb-2"><span><?php the_field("titulo");?></span></h2>
                                    <p><?php the_field("sinopse");?></p>
                                </div>
                            </div>
                        </div>
                    <?php 
                        endwhile; else: endif; 
                        wp_reset_query(); wp_reset_postdata(); 
                    ?>
                </div>
            </div>
        </div>
        <!--End Em Desenvolvimento Area-->

        <!--Start Portfólio Area-->
        <div class="trailer-area bg-1 pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}' id="portfolio">
            <div class="container-fluid">
                <div class="container">
                    <div class="section-title style2 white-title">
                        <span>Diferenciais</span>
                        <h2>Projetos realizados</h2>
                    </div>
                </div>
                <div class="trailer-slider owl-carousel owl-theme">
                    <?php
                        $args = array (
                            'post_type' => 'projetos',
                            'order'   => 'ASC'
                        );
                        $the_query = new WP_Query ( $args );
                    ?>

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <a href="<?php the_field("link_do_video");?>" class="popup-youtube">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="<?php the_field("imagem");?>" alt="Image">
                                    <div class="play-btn">
                                        <span>
                                            <i class="fa-solid fa-play"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3><?php the_field("titulo");?></h3>
                                    <span><?php the_field("formato");?></span>
                                </div>
                            </div>
                        </a>

                    <?php endwhile; else: endif; ?>
                    <?php wp_reset_query(); wp_reset_postdata(); ?>
                </div>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <!--End Portfólio Area-->

        <!--Start Contact Area-->
        <div class="contact-area ptb-100" id="contato">
            <div class="container">
                <div class="row get-in-touch">
                    <h2>Fale Conosco</h2>
                    <div class="contact-info-card col-lg-3 col-sm-6">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h4>Telefone</h4>
                        <a href="tel:0884566477587">(088) 456 647 7587</a>
                        <a href="tel:0884566465247">(088) 456 646 5247</a>
                    </div>
                    <div class="contact-info-card col-lg-3 col-sm-6">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h4>Email</h4>
                        <a href="mailto:vidmonet@domain.com">vidmonet@domain.com</a>
                        <a href="mailto:hello@video.com">hello@video.com</a>
                    </div>
                    <div class="contact-info-card col-lg-3 col-sm-6">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h4>Endereço</h4>
                        <span>176, Street Name, New York,</span>
                        <span>NY 10014176, USA</span>
                    </div>
                    <div class="social-content col-lg-3 col-sm-6">
                        <h4>Redes Sociais</h4>
                        <ul>
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
        <!--End Contact Area-->

        <!--Start Contact Form Area-->
        <div class="contact-form-area pb-100">
            <div class="container">
                <div class="section-title">
                    <span>Envie-nos uma mensagem:</span>
                </div>
                <div class="contacts-form">
                    <form id="contactForm2">
                         <?php echo do_shortcode("[form_contato]"); ?>
                    </form>
                </div>
            </div>
        </div>
        <!--End Contact Form Area-->

    <?php endwhile; else: endif; ?>

<?php 
get_footer(); 
?>
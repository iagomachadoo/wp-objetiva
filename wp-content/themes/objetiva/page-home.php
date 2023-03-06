<?php
// Template Name: Home
?>

<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <!--Start Banner Area-->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="banner-conteudo">
                    <div class="banner-texto position-absolute mw-100 h-100 d-flex flex-column justify-content-center">
                        <span>Best Fils Studio </span>
                        <h1>Standing Studio For Films Making</h1>
                        <p>Their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish  weakness of will,</p>
                    </div>
                    <div class="banner-video position-relative">
                        <video autoplay muted loop preload="metadata" class="img-fluid">
                            <source src="<?php echo get_template_directory_uri();?>/assets/images/video-logo/logo-animado.webm" type="video/webm">
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
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/about/about-img-1.jpg" alt="Image">
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
                                <h2>We Like To Create High Quality Cinematography</h2>
                            </div>
                            <div class="content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the mfalteration in some form, by injected humour, or randomised words  donlook even slightly believable. If you are going to use a passage </p>
                                <p>Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden iddlof text. All the Lorem Ipsum generators on the Internet tend to repeat </p>
                                <!-- <a href="works.html" class="default-btn style3 btn">View Project<i class="fa-solid fa-arrow-right-long"></i></a> -->
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
        <div class="features-area bg-f5f5f5 pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Diferenciais</span>
                    <h2>What We Do Movie Production </h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-features-card">
                            <div class="features-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/features/features-img-1.png" alt="Image">
                            </div>
                            <h3>Content Production</h3>
                            <p>Contrary to popular belieors not simply rand It hace of lassica literature from making</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="single-features-card">
                            <div class="features-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/features/features-img-2.png" alt="Image">
                            </div>
                            <h3>Film Production</h3>
                            <p>Contrary to popular belieors not simply rand It hace of lassica literature from making</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                        <div class="single-features-card">
                            <div class="features-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/features/features-img-3.png" alt="Image">
                            </div>
                            <h3>Creative Direction</h3>
                            <p>Contrary to popular belieors not simply rand It hace of lassica literature from making</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                        <div class="single-features-card">
                            <div class="features-img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/features/features-img-4.png" alt="Image">
                            </div>
                            <h3>Video Solution</h3>
                            <p>Contrary to popular belieors not simply rand It hace of lassica literature from making</p>
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
                            <span>Latest News</span>
                            <h2>Em Desenvolvimento</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php 
                        $cont = 6;

                        for ($i=1; $i <= $cont; $i++) { 
                        $imgEmDesenvolvimentoId = get_field("projeto_{$i}_imagem");

                        $imgLarge = wp_get_attachment_image_src( $imgEmDesenvolvimentoId, 'large');
                        $imgMediumLarge = wp_get_attachment_image_src( $imgEmDesenvolvimentoId, 'medium_large');
                        $imgMedium = wp_get_attachment_image_src( $imgEmDesenvolvimentoId, 'medium');
                        $imgThumb = wp_get_attachment_image_src( $imgEmDesenvolvimentoId, 'thumb');
                        $imgPostThumb = wp_get_attachment_image_src( $imgEmDesenvolvimentoId, 'post-thumbnail');
                        $imgThumbnail = wp_get_attachment_image_src( $imgEmDesenvolvimentoId, 'thumbnail');
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-card">
                            <div class="blog-img" style="background-color: aquamarine;">
                                <picture>
                                    <source media="(min-width: 1400px)" srcset="<?php echo $imgMedium[0];?>">
                                    <source media="(min-width: 1200px)" srcset="<?php echo $imgThumb[0];?>">
                                    <source media="(min-width: 992px)" srcset="<?php echo $imgThumbnail[0];?>">
                                    <source media="(min-width: 768px)" srcset="<?php echo $imgPostThumb[0];?>">
                                    <source media="(min-width: 576px)" srcset="<?php echo $imgMediumLarge[0];?>">
                                    <img src="<?php echo $imgLarge[0];?>" alt="Image">
                                </picture>
                                <div class="tag">
                                    <span><?php the_field("projeto_{$i}_formato");?></span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="info">
                                    <ul>
                                        <li><span><?php the_field("projeto_{$i}_genero");?></span></li>
                                    </ul>
                                </div>
                                <h2 class="mb-2"><span><?php the_field("projeto_{$i}_titulo");?></span></h2>
                                <p><?php the_field("projeto_{$i}_sinopse");?></p>
                            </div>
                        </div>
                    </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
        <!--End Em Desenvolvimento Area-->

        <!--Start Portfólio Area-->
        <div class="trailer-area bg-1 pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}' id="portfolio">
            <div class="container-fluid">
                <div class="container">
                    <div class="section-title style2 white-title">
                        <h2>Portfólio</h2>
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

                        <div class="single-trailer-card">
                            <div class="trailer-img">
                                <img src="<?php the_field("imagem");?>" alt="Image">
                                <div class="play-btn">
                                    <a class="popup-youtube" href="<?php the_field("link_do_video");?>">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="trailer-content">
                                <h3><?php the_field("titulo");?></h3>
                                <span><?php the_field("formato");?></span>
                            </div>
                        </div>

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
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row get-in-touch">
                    <h2>Fale Conosco</h2>
                    <div class="contact-info-card col-3">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h4>Phone</h4>
                        <a href="tel:0884566477587">(088) 456 647 7587</a>
                        <a href="tel:0884566465247">(088) 456 646 5247</a>
                    </div>
                    <div class="contact-info-card col-3">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h4>Email</h4>
                        <a href="mailto:vidmonet@domain.com">vidmonet@domain.com</a>
                        <a href="mailto:hello@video.com">hello@video.com</a>
                    </div>
                    <div class="contact-info-card col-3">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h4>Address</h4>
                        <span>176, Street Name, New York,</span>
                        <span>NY 10014176, USA</span>
                    </div>
                    <div class="social-content col-3">
                        <h4>Follow us</h4>
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
        <div class="contact-form-area ptb-100 bg-f8f8f8">
            <div class="container">
                <div class="section-title">
                    <span>Envie-nos uma mensagem:</span>
                </div>
                <div class="contacts-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Nome" id="name" class="form-control" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
            
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
            
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" placeholder="Telefone" required data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
            
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Empresa">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="assunto" id="assunto" placeholder="Assunto" required data-error="Please enter your subject" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
            
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Mensagem" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input
                                        name="gridCheck"
                                        value="I agree to the terms and privacy policy."
                                        class="form-check-input"
                                        type="checkbox"
                                        id="gridCheck"
                                        required
                                    >
                                    <label class="form-check-label" for="gridCheck">
                                        I agree to the <a href="terms-conditions.html">terms</a> and <a href="privacy-policy.html">privacy policy</a>
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
            
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    <span>Send Message</span>
                                    <i class="flaticon-right-arrow-2"></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End Contact Form Area-->

    <?php endwhile; else: endif; ?>
<?php get_footer(); ?>
<?php
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Registrar o CSS
function objetiva_css() {
	// Registra os arquivos
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), "5.2.0", false );

    wp_register_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), "2.0.7", false );

    wp_register_style( 'owl-carrousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), "2.3.4", false );

    wp_register_style( 'owl-defauld', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), "2.3.4", false );

    wp_register_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), false, false );

    wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.1.1', false );

    wp_register_style( 'odometer', get_template_directory_uri() . '/assets/css/odometer.min.css', array(), false, false );

    wp_register_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css', array(), false, false );

    wp_register_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), false, false );

    wp_register_style( 'dark', get_template_directory_uri() . '/assets/css/dark.css', array(), false, false );

    wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), false, false );

	// Coloca os styles no site
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'meanmenu' );
	wp_enqueue_style( 'owl-carrousel' );
	wp_enqueue_style( 'owl-defauld' );
	wp_enqueue_style( 'magnific-popup' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'odometer' );
	wp_enqueue_style( 'aos' );
	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'dark' );
	wp_enqueue_style( 'responsive' );
}
add_action( 'wp_enqueue_scripts', 'objetiva_css' );

// Registrar JS
function objetiva_scripts() {
	// Registra os arquivos
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), "3.6.0", true );

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), "5.2.0", true );

    wp_register_script( 'jquery-meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array(), false, true );

    wp_register_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '2.3.4', true );

    wp_register_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), '1.1.0', true );

    wp_register_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), false, true );

    wp_register_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), false, true );

    wp_register_script( 'odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array(), '0.4.8', true );

    wp_register_script( 'appear', get_template_directory_uri() . '/assets/js/appear.min.js', array(), false, true );

    wp_register_script( 'form-validator', get_template_directory_uri() . '/assets/js/form-validator.min.js', array(), '0.8.1', true );

    wp_register_script( 'contact-form-script', get_template_directory_uri() . '/assets/js/contact-form-script.js', array(), false, true );

    wp_register_script( 'ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.min.js', array(), false, true );

    wp_register_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true );

	// Coloca os scripts no site
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'jquery-meanmenu' );
	wp_enqueue_script( 'owl-carousel' );
	wp_enqueue_script( 'jquery-magnific-popup' );
	wp_enqueue_script( 'aos' );
	wp_enqueue_script( 'parallax' );
	wp_enqueue_script( 'odometer' );
	wp_enqueue_script( 'appear' );
	wp_enqueue_script( 'form-validator' );
	wp_enqueue_script( 'contact-form-script' );
	wp_enqueue_script( 'ajaxchimp' );
	wp_enqueue_script( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'objetiva_scripts' );

// Adicionar tamanhos de imagens
function custom_sizes_images_desenvolvimento() {
	add_image_size('large', 551, 382, true);
	add_image_size('medium_large', 516, 308, true);
	add_image_size('medium', 416, 308, true);
	add_image_size('thumb', 356, 219, true);
	add_image_size('post-thumbnail', 336, 219, true);
	add_image_size('thumbnail', 296, 219, true);
}
add_action( 'after_setup_theme', 'custom_sizes_images_desenvolvimento' );

//Adicionar Custom Post Types

function custom_post_type_projetos() {
	register_post_type('projetos', array(
		'label' => 'Projetos Portfólio',
		'description' => 'Projetos Portfólio',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'projetos-portfolio', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Projetos Portfólio',
			'singular_name' => 'projeto portfólio',
			'menu_name' => 'Projetos Portfólio',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo projeto',
			'edit' => 'Editar',
			'edit_item' => 'Editar projeto',
			'new_item' => 'Novo projeto',
			'view' => 'Ver projeto',
			'view_item' => 'Ver projeto',
			'search_items' => 'Procurar projetos',
			'not_found' => 'Nenhum projeto Encontrado',
			'not_found_in_trash' => 'Nenhum projeto Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_projetos');
?>
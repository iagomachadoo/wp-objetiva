<?php
include(TEMPLATEPATH . '/recaptcha.php');

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

    wp_register_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css', array(), false, false );

    wp_register_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), false, false );

    wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), false, false );

	// Coloca os styles no site
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'meanmenu' );
	wp_enqueue_style( 'owl-carrousel' );
	wp_enqueue_style( 'owl-defauld' );
	wp_enqueue_style( 'magnific-popup' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'aos' );
	wp_enqueue_style( 'style' );
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

    wp_register_script( 'appear', get_template_directory_uri() . '/assets/js/appear.min.js', array(), false, true );

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
	wp_enqueue_script( 'appear' );
	wp_enqueue_script( 'ajaxchimp' );
	wp_enqueue_script( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'objetiva_scripts' );

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

function custom_post_type_em_andamento() {
	register_post_type('projetos em andamento', array(
		'label' => 'Projetos Em Andamento',
		'description' => 'Projetos Em Andamento',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'projetos-em-andamento', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Projetos Em Desenvolvimento',
			'singular_name' => 'projeto em andamento',
			'menu_name' => 'Projetos Em Desenvolvimento',
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
add_action('init', 'custom_post_type_em_andamento');

//Validação formulário de contato
function captcha($input){
    $secret = SECRET_KEY;
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret) .  '&response=' . urlencode($input);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response,true);

    return($responseKeys['success']);
}

function display_form_contato() {

    global $wpdb;
	$validation_messages = [];
	$success_message = '';
    

	if ( isset($_POST['contato-form'])) {

        $responseData = captcha($_POST['g-recaptcha-response']);
        
        if ($responseData) {
            //Sanitize the data
            $nome = isset($_POST['nome']) ? sanitize_text_field($_POST['nome']) : '';
            $email = isset($_POST['email']) ? sanitize_text_field($_POST['email']) : '';
            $telefone = isset($_POST['telefone']) ? sanitize_textarea_field($_POST['telefone']) : '';
            $empresa = isset($_POST['empresa']) ? sanitize_textarea_field($_POST['empresa']) : '';
            $assunto = isset($_POST['assunto']) ? sanitize_textarea_field($_POST['assunto']) : '';
            $mensagem = isset($_POST['mensagem']) ? sanitize_textarea_field($_POST['mensagem']) : '';


            //Validate the data
            if (strlen($nome) === 0) {
                $validation_messages[] = esc_html__('Por favor insira um nome válido', 'objetiva');
            }

            if (strlen($email) === 0 or
                ! is_email($email)) {
                $validation_messages[] = esc_html__('Por favor insira um email válido', 'objetiva');
            }

            if (strlen($telefone) === 0) {
                $validation_messages[] = esc_html__('Por favor insira um telefone válido', 'objetiva');
            }

            if (strlen($assunto) === 0) {
                $validation_messages[] = esc_html__('Por favor insira um assunto', 'objetiva');
            }

			if (strlen($mensagem) === 0) {
                $validation_messages[] = esc_html__('Por favor insira uma mensagem', 'objetiva');
            }

            //Send an email to the WordPress administrator if there are no validation errors
            if (empty($validation_messages)) {
                $wpdb->insert(
                    'wp_contato',
                    array(
                        'nome' => $nome,
                        'email' => $email,
                        'telefone' => $telefone,
                        'empresa' => $empresa,
                        'assunto' => $assunto,
                        'mensagem' => $mensagem

                    ),
                    array(
                        '%s',
                        '%s',
                        '%s',
                        '%s',
                        '%s',
                        '%s'

                    )
                );

                //$mail    = "comercial@lvalenca.com.br";
                $mail    = "iagomachado22@gmail.com";
                $year    = date("Y");
                $subject = "Nova mensagem de contato";
                $headers = array('Content-Type: text/html; charset=UTF-8');
                $message = "<section style='background-color:#f8fafc; '>";
                $message .=     "<div>";
                $message .=     "<h2 style='text-align:center; padding:2rem 0rem; margin:0;'>Objetiva</h2>";
                $message .=     "</div>";
                $message .=     "<div style='background-color:#ffffff; width:100%; padding:2rem 0;'>";
                $message .=         "<div style='margin:0 auto; width:40%;'>";
                $message .=         "<p style='color:#000000'><strong>Nome:</strong>" . $nome . "</p>";
                $message .=         "<p style='color:#000000'><strong>Email:</strong>" . $email . "</p>";
                $message .=         "<p style='color:#000000'><strong>Telefone:</strong>" . $telefone . "</p>";
                $message .=         "<p style='color:#000000'><strong>Nome da Empresa:</strong>" . $empresa . "</p>";
                $message .=         "<p style='color:#000000'><strong>Assunto:</strong>" . $assunto . "</p>";
                $message .=         "<p style='color:#000000'><strong>Mensagem:</strong>" . $mensagem . "</p>";
                $message .=         "</div>";
                $message .=     "</div>";
                $message .=     "<div>";
                $message .=     "<p style='color:#000000; text-align:center; padding:2rem 0rem; margin:0;'>&copy;" . $year . " Objetiva. Todos os direitos reservados.</p>";
                $message .=     "</div>";
                $message .= "</section>";

                wp_mail($mail, $subject, $message, $headers);

                $success_message = esc_html__('Sua mensagem foi enviada com sucesso!', 'newtheme');
            }
        }else if(!$responseData){
            $validation_messages[] = esc_html__('reCaptcha inválido, tente novamente!');
        }

	}

	//Display the validation errors
	if ( ! empty( $validation_messages ) ) {
		foreach ( $validation_messages as $validation_message ) {
			$nome_campo = explode(' ', $validation_message);
			if(count($nome_campo) >= 5){
				echo "<div class='validation-message list-unstyled' id='{$nome_campo[4]}'>" . esc_html( $validation_message ) . "</div>";
			}else{
				echo "<div class='validation-message text-danger' id='{$nome_campo[0]}'>" . esc_html( $validation_message ) . "</div>";
			}
		}
	}

	//Display the success message
	if ( strlen( $success_message ) > 0 ) {
		echo '<div class="success-message text-danger">' . esc_html( $success_message ) . '</div>';
	}

	?>

    <!-- Echo a container used that will be used for the JavaScript validation -->
    <form id="contato-form" method="post" action="#contato-form">
		<input type="hidden" name="contato-form">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<input type="text" name="nome" placeholder="Nome" id="nome" class="form-control" required>
					<div class="help-block with-errors"></div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
					<div class="help-block with-errors"></div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<input type="text" name="telefone" id="telefone" placeholder="Telefone" required  class="form-control">
					<div class="help-block with-errors"></div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa">
					<div class="help-block with-errors"></div>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<input type="text" name="assunto" id="assunto" placeholder="Assunto" required class="form-control">
					<div class="help-block with-errors"></div>
				</div>
			</div>

			<div class="col-12">
				<div class="form-group">
					<textarea name="mensagem" class="form-control" placeholder="Mensagem" id="mensagem" cols="30" rows="6"></textarea>
					<div class="help-block with-errors"></div>
				</div>
			</div>

			<div class="col-lg-12 col-md-12">
				<button type="submit" class="g-recaptcha default-btn" data-sitekey="<?php echo SITE_KEY;?>" data-callback='onSubmitContato' data-action='submit'><span>Enviar mensagem</span><i class="flaticon-right-arrow-2"></i></button>

				<div id="msgSubmit" class="h3 text-center hidden"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</form>
    
	<script>
		function onSubmitContato(token) {
			document.getElementById('contato-form').submit();
		}

		const mensagem = document.querySelectorAll('.validation-message');
		mensagem.forEach((item) => {
			if(item.id === 'reCaptcha'){
				const mensagemErro = item
				document.querySelector('#msgSubmit').appendChild(mensagemErro);
			}else{
				const camposForm = document.querySelector(`form #${item.id}`);
				if(item.id === camposForm.id){
					camposForm.nextElementSibling.appendChild(item) 
				}
			}
		})

		const mensagemSucesso = document.querySelector('.success-message');
		if(mensagemSucesso){
			document.querySelector('#msgSubmit').appendChild(mensagemSucesso);
		}
	</script>
	
	<?php
}

add_shortcode( 'form_contato', 'display_form_contato' );
?>
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


/**
 * verbena functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package verbena
 */
add_action( 'carbon_fields_register_fields', 'boots_register_custom_fields' );
function boots_register_custom_fields() {
// путь к пользовательскому файлу определения поля (полей), измените под себя
require_once __DIR__ . '/inc/custom-field-options/metabox.php';
require_once __DIR__ . '/inc/custom-field-options/theme-options.php';
}
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
\Carbon_Fields\Carbon_Fields::boot();
}

if ( ! function_exists( 'verb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function verb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on verbena, use a find and replace
		 * to change 'verb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'verb', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'verb' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'verb_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'verb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function verb_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'verb_content_width', 640 );
}
add_action( 'after_setup_theme', 'verb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function verb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'verb' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'verb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'verb_widgets_init' );


function tg_text_clear($text){
	$result = str_replace(["<br/>", "<br>"],"\n\r", $text);
	return $result;
}


function message_to_telegram($text)
{
	$arr_chat = carbon_get_theme_option( 'as_tg_send' );
	if($arr_chat) {

		$arr_chat = explode(",",$arr_chat);
	    $ch = curl_init();
		
		for ($i = 0; $i<count($arr_chat); $i++) {
		    curl_setopt_array(
		        $ch,
		        array(
		            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
		            CURLOPT_POST => TRUE,
		            CURLOPT_RETURNTRANSFER => TRUE,
		            CURLOPT_TIMEOUT => 10,
		            CURLOPT_POSTFIELDS => array(
		                'chat_id' => trim($arr_chat[$i]),
		                'text' => tg_text_clear($text),
						'parse_mode' => "html",
		            ),
		        )
		    );
		    $output = curl_exec($ch);
		}
	}
	
}





/**
 * Enqueue scripts and styles.
 */
function verb_scripts() {
//	wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css?family=Montserrat:300,400,500&display=swap&subset=cyrillic');
	wp_enqueue_style( 'arctic', get_template_directory_uri() . '/css/jquery.arcticmodal-0.3.css', array(), null, 'all');
	wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), null, 'all');
	wp_enqueue_style( 'verb-style', get_stylesheet_uri(), array(), "1.0.72", "all" );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'verb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'verb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('libs', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true);

	wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array(), null, true);

	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/jquery-scrolltofixed-min.js', array(), null, true);

	wp_enqueue_script('parallax', get_template_directory_uri() . '/js/sly.min.js', array(), null, true);

	wp_enqueue_script('arctic', get_template_directory_uri() . '/js/jquery.arcticmodal-0.3.min.js', array(), null, true);

	wp_enqueue_script('main', get_template_directory_uri() . '/js/common.js', array(), "1.0.24", true);

	wp_localize_script( 'main', 'allAjax', array(
      'ajaxurl' => admin_url( 'admin-ajax.php' ),
      'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
    ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'verb_scripts' );

function main_menu() {
	wp_nav_menu(array(
		'theme_location' => 'menu-1',
		'container' => false,
		'menu_class' => 'menu ul-clean',
	));
}
remove_filter( 'the_content', 'wpautop' );
function wph_add_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wph_add_mime_types');

	function to_crm ($name, $phone, $info)
	{
		$link = 'https://verbena.potokcrm.ru/crm/api/v1/lead/set/?api_key=ebbac204d6f53d8532a20723bccc1c9f1efec817';
		$curl = curl_init();
		 
		$data = [
			'method' => 'create', // метод, 'create' - для создания, 'update' - для обновления, в данном случае использовать нет необходимости
			'inbox_type_id' => "Заявка с сайта", // id типа входящего обращения
			'visit_id' => $_COOKIE['WhiteCallback_visit'], // идентификатор визита сервиса, будет присутствовать, если установлен js код наших виджетов, поле не обязательное, автоматически добавит информацию о посетителе, получается из Cookie
			'values' => [ // массив значений системных и произвольных полей
			'name' => $name ? $name : 'Заявка с сайта ' . ($phone ? $phone : $email), // имя
			'phone' => $phone, // телефон
			'email' => $email, // email
			'comment' => $info, // примечание
			'utm_source' => $utm_source, // utm-метка utm_source
			'utm_medium' => $utm_medium, // utm-метка utm_medium
			'utm_campaign' => $utm_campaign, // utm-метка utm_campaign
			'utm_content' => $utm_content, // utm-метка utm_content
			'utm_term' => $utm_term, // utm-метка utm_utm_term
			
			]
		];
		 
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_URL, $link);
		curl_setopt($curl,CURLOPT_POST,true);
		curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode(['request' => $data]));
		curl_setopt($curl,CURLOPT_HEADER,false);
		 
		echo $out=curl_exec($curl);
		echo $code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
		curl_close($curl);	
	}

	function mailHeader () {
		return "text/html";
	}


add_action( 'wp_ajax_universal_send_review', 'universal_send_review' );
  add_action( 'wp_ajax_nopriv_universal_send_review', 'universal_send_review' );

  function universal_send_review() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт Verbena <noreply@verbena-center.ru>',
        'content-type: text/html',
      );
    
    //   add_filter('wp_mail_content_type', "text/html");
      if ($_REQUEST["qvm"] === "1") {
		$text_tg = '<b>Вопрос с сайта<b> <br><br> <strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"]. '<br/><strong>Вопрос: </strong>' . $_REQUEST['review'];
		message_to_telegram($text_tg);
		if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Вопрос с сайта 1', '<strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"]. '<br/><strong>Вопрос: </strong>' . $_REQUEST['review'], $headers))
		{
			to_crm ($_REQUEST["name"], $_REQUEST["tel"], "Заявка с формы: ".$_REQUEST["msg"]." Вопрос:".$_REQUEST['review']);
			wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
		}
		else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
	  } else {
		$text_tg = '<b>Заказ с сайта</b> <br><br> <strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"]. '<br/><strong>Отзыв: </strong>' . $_REQUEST['review'];
		message_to_telegram($text_tg);
		if (wp_mail(carbon_get_theme_option( 'as_email_send' ), 'Заказ с сайта 11', '<strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"]. '<br/><strong>Отзыв: </strong>' . $_REQUEST['review'], $headers))
		{
			
			to_crm ($_REQUEST["name"], $_REQUEST["tel"], "Заявка с формы: ".$_REQUEST["msg"]." Отзыв:".$_REQUEST['review']);
			wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
		}
		else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
      }

	  

    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }
/*
  add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
			return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
		return $the_template;' )
		
);
	*/



  add_action( 'wp_ajax_universal_send', 'universal_send' );
  add_action( 'wp_ajax_nopriv_universal_send', 'universal_send' );

  function universal_send() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }

    $title_mail = 'Заказ с сайта';
    if($_REQUEST['msg'] === 'Запрос на скидку'){
    	$title_mail = 'Запрос на скидку';
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
      
      $headers = array(
        'From: Сайт Verbena <noreply@verbena-center.ru>',
        'content-type: text/html',
      );
    
    //   add_filter('wp_mail_content_type', "text/html");
      //carbon_get_theme_option( 'as_email_send' )

	$text_tg = '<b>'. $title_mail .'</b> <br><br> <strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"];
	message_to_telegram($text_tg);

      if (wp_mail(carbon_get_theme_option( 'as_email_send' ), $title_mail, '<strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"], $headers))
	  {
		  to_crm ($_REQUEST["name"], $_REQUEST["tel"], "Заявка с формы: ".$_REQUEST["msg"]);
		  wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
      }
	  else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }

  add_filter('excerpt_more', function($more) {
	return '...';
});

/*
  add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
			return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
		return $the_template;' )
		
);

*/

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


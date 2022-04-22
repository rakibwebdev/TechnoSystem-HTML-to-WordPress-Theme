<?php


define( 'THEME_VERSION', '1.0.5' );
define( 'THEME_URI', get_template_directory_uri(  ) );

function technosystem_setup() {

	load_theme_textdomain( 'technosystem', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary Menu', 'technosystem' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'technosystem_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'technosystem_setup' );


function technosystem_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'technosystem_content_width', 640 );
}
add_action( 'after_setup_theme', 'technosystem_content_width', 0 );

function technosystem_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'technosystem' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'technosystem' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'technosystem_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function technosystem_scripts() {
	// Third Part CSS
	wp_enqueue_style( 'animate', THEME_URI . '/assets/css/animate.css', null, THEME_VERSION );
	wp_enqueue_style( 'bootstrap', THEME_URI . '/assets/css/bootstrap.min.css', null, THEME_VERSION );
	wp_enqueue_style( 'fontawesome', THEME_URI . '/assets/css/fontawesome.css', null, THEME_VERSION );
	wp_enqueue_style( 'magnifing', THEME_URI . '/assets/css/magnific-popup.css', null, THEME_VERSION );
	wp_enqueue_style( 'owl-carousel', THEME_URI . '/assets/css/owl.carousel.min.css', null, THEME_VERSION );
	wp_enqueue_style( 'owl-carousel-theme', THEME_URI . '/assets/css/owl.theme.default.min.css', null, THEME_VERSION );
	wp_enqueue_style( 'select2-custom', THEME_URI . '/assets/css/select2-custom-style.css', null, THEME_VERSION );
	wp_enqueue_style( 'select2', THEME_URI . '/assets/css/select2.min.css', null, THEME_VERSION );

	// Theme CSS
	wp_enqueue_style( 'main-style', THEME_URI . '/assets/css/style.css', null, THEME_VERSION );


	// Third Part JS
	wp_enqueue_script( 'technosystem-navigation', get_template_directory_uri() . '/js/navigation.js', array(), THEME_VERSION, true );

	wp_enqueue_script( 'appear', THEME_URI . '/assets/js/appear.min.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'bootstrap', THEME_URI . '/assets/js/bootstrap.min.js', array('jquery'), THEME_VERSION, true );

	//wp_enqueue_script( 'count-down', THEME_URI . './assets/js/count-down-x.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'essentials', THEME_URI . '/assets/js/essential.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'form-plugin', THEME_URI . '/assets/js/form.plugin.min.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'form-validation', THEME_URI . '/assets/js/form.validation.min.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'filterizr', THEME_URI . '/assets/js/jquery.filterizr.min.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'magnific-popup', THEME_URI . '/assets/js/magnific-popup.min.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'owl', THEME_URI . '/assets/js/owl.carousel.min.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'proper', THEME_URI . '/assets/js/popper.js', array('jquery'), THEME_VERSION, true );

	wp_enqueue_script( 'select2', THEME_URI . '/assets/js/select2.min.js', array('jquery'), THEME_VERSION, true );

	// Theme JS
	wp_enqueue_script( 'main', THEME_URI . '/assets/js/script.js', array('jquery'), THEME_VERSION, true );

	// Comment reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'technosystem_scripts' );


require get_template_directory() . '/inc/custom-header.php';


require get_template_directory() . '/inc/template-tags.php';


require get_template_directory() . '/inc/template-functions.php';


require get_template_directory() . '/inc/customizer.php';
// Kirki Customizer
require get_template_directory() . '/customizer/customizer.php';

// TGMPA
require get_template_directory() . '/installation/class-tgm-plugin-activation.php';

// Require Plugins
require get_template_directory() . '/installation/require-plugins.php';

// Custom Post Type
require get_template_directory() . '/inc/custom-post-type.php';
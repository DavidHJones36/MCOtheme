<?php

/**
 * bootstrappermco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bootstrappermco
 */

add_action( 'admin_head', 'hide_editor' );
function hide_editor() {
    $template = [
        'template-about.php',
        'template-complex-event.php',
        'template-contact.php',
        'template-donate.php',
        'template-event.php',
        'template-home.php',
        'template-newsletter.php',
        'template-smi.php'];
    $template_slug = get_page_template_slug();
	if(in_array($template_slug, $template)) { // template
        remove_post_type_support('page', 'editor');
	}else{remove_post_type_support('page', 'editor');}
}

if ( ! function_exists( 'bootstrappermco_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bootstrappermco_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bootstrappermco, use a find and replace
	 * to change 'bootstrappermco' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bootstrappermco', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'bootstrappermco' )
	) );
    
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'footer' => esc_html__( 'Footer Menu', 'bootstrappermco' )
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
	add_theme_support( 'custom-background', apply_filters( 'bootstrappermco_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'bootstrappermco_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootstrappermco_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bootstrappermco_content_width', 640 );
}
add_action( 'after_setup_theme', 'bootstrappermco_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bootstrappermco_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bootstrappermco' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bootstrappermco' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bootstrappermco_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bootstrappermco_scripts() {
    wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'v4.0.0', 'all' );
    
    wp_enqueue_style( 'wufoo-styles', get_template_directory_uri() . '/css/wufoo.css', array(), null, 'all' );
    
	wp_enqueue_style( 'MCOtheme-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 'v4.7.0', 'all' );
    
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 'v.4.0.0', true );
    
    wp_enqueue_script( 'underscore-js', get_template_directory_uri() . '/js/underscore-min.js', array('jquery'), 'v.1.9.1', true );
    
    
    wp_enqueue_script( 'bootstrappermco-js', get_template_directory_uri() . '/js/bootstrappermco.js', array('jquery'), null, true );

	wp_enqueue_script( 'bootstrappermco-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootstrappermco_scripts' );

/**
 * Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if


/** * Implement the Custom Header feature. require get_template_directory() . '/inc/custom-header.php';*/

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Bootstrap menu
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**
 * Plugin Activation
 */
require get_template_directory() . '/inc/plugin-activation.php';

/**
 * Meta Boxes
 */
require get_template_directory() . '/inc/meta-box.php';

/**
 * Theme Options
 */
require get_template_directory() . '/inc/theme-options.php';

function defer_parsing_of_js ( $url ) {
if ( FALSE === strpos( $url, '.js' ) ) return $url;
if ( strpos( $url, 'jquery.js' ) ) return $url;
return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
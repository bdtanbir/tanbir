<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'personal_tm_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function personal_tm_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tanbir, use a find and replace
		 * to change 'tanbir' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tanbir', get_template_directory() . '/languages' );

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

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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
				'personal_tm_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 134,
				'width'       => 30,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'personal_tm_setup' );


function personal_tm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'personal_tm_content_width', 640 );
}
add_action( 'after_setup_theme', 'personal_tm_content_width', 0 );


/*
 * Comment Fields Supports
 * */
function personal_tm_comment_field_move_to_bottom($fields)
{
	$comment_field = $fields['comment'];
	unset($fields['comment']);
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter('comment_form_fields', 'personal_tm_comment_field_move_to_bottom');


function personal_tm_scripts() {
	wp_enqueue_style('google-montserrat-font', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300&display=swap');
	wp_enqueue_style('google-open-sans-font', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300&display=swap');
    wp_enqueue_style('lib-bootstrap-min', get_theme_file_uri('/assets/css/bootstrap.min.css'));
    wp_enqueue_style('lib-line-awesome', '//maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css');
    
	wp_enqueue_style( 'personal-tm-style', get_stylesheet_uri(), array(), _S_VERSION );


    
	wp_enqueue_script('lib-typed-js', '//cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js', array('jquery'), null, true);
	wp_enqueue_script('personal-tm-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), _S_VERSION, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'personal_tm_scripts' );


<?php
/**
 * Petween care functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Petween_care
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function petween_care_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Petween care, use a find and replace
		* to change 'petween-care' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'petween-care', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'petween-care' ),
			'header-menu' => esc_html__('Header menu', 'petween-care'),
			'pages-légales' => esc_html__('pages légales', 'petween-care'),
			'liens-utils' => esc_html__('liens utils', 'petween-care'),
		)
	);

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
			'petween_care_custom_background_args',
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'petween_care_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function petween_care_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'petween_care_content_width', 640 );
}
add_action( 'after_setup_theme', 'petween_care_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function petween_care_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'petween-care' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'petween-care' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'petween_care_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function petween_care_scripts() {
	wp_enqueue_style( 'petween-care-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
	wp_style_add_data( 'petween-care-style', 'rtl', 'replace' );

	wp_enqueue_script( 'petween-care-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'petween_care_scripts' );

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

/**
 * Petween-care customizer
 *
 * @param [type] $wp_customize
 * @return void
 */
function Petween_care_customizer_settings($wp_customize)
{

	// Section for Contact Information
	$wp_customize->add_section('contact_info_section', array(
		'title'    => __('Contact Information', 'Petween-care'),
		'priority' => 30,
	));

	// Email
	$wp_customize->add_setting('contact_email', array(
		'default'   => '',
	));

	$wp_customize->add_control('contact_email', array(
		'type'     => 'email',
		'section'  => 'contact_info_section',
		'label'    => __('Email', 'Petween-care'),
	));
	// Section for Social Media Links
	$wp_customize->add_section('social_media_section', array(
		'title'    => __('Social Media Links', 'Petween-care'),
		'priority' => 35,
	));

	// Facebook
	$wp_customize->add_setting('facebook_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('facebook_link', array(
		'type'     => 'url',
		'section'  => 'social_media_section',
		'label'    => __('Facebook', 'Petween-care'),
		'description' => 'https://facebook.com/yourusername',
	));

	// Youtub
	$wp_customize->add_setting('youtub_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('youtub_link', array(
		'type'     => 'url',
		'section'  => 'social_media_section',
		'label'    => __('Youtub', 'Petween-care'),
		'description' => 'https://youtub.com/yourusername'
	));

	// Instagram
	$wp_customize->add_setting('instagram_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('instagram_link', array(
		'type'     => 'url',
		'section'  => 'social_media_section',
		'label'    => __('Instagram', 'Petween-care'),
		'description' => 'https://instagram.com/in/yourusername'
	));

	// Twitter
	$wp_customize->add_setting('tiktok_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('tiktok_link', array(
		'type'     => 'url',
		'section'  => 'social_media_section',
		'label'    => __('Twitter', 'Petween-care'),
		'description' => 'https://twitter.com/yourusername'
	));

	// Section for Conction link
	$wp_customize->add_section('Conction_link_section', array(
		'title'    => __('Conction link', 'Petween-care'),
		'priority' => 30,
	));
	// conection
	$wp_customize->add_setting('conection_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('conection_link', array(
		'type'     => 'url',
		'section'  => 'Conction_link_section',
		'label'    => __('conection', 'Petween-care'),
	));

}
add_action('customize_register', 'Petween_care_customizer_settings');



/**
 * Register Custom Post Type "Annonces"
 *
 * @return void
 */
function register_Annonce_post_type()
{
	$labels = array(
		'name'               => _x('Annonces', 'Post Type General Name', 'Petween-care'),
		'singular_name'      => _x('Annonce', 'Post Type Singular Name', 'Petween-care'),
		'menu_name'          => __('Annonces', 'Petween-care'),
		'parent_item_colon'  => __('Parent Annonce:', 'Petween-care'),
		'all_items'          => __('All Annonces', 'Petween-care'),
		'view_item'          => __('View Annonce', 'Petween-care'),
		'add_new_item'       => __('Add New Annonce', 'Petween-care'),
		'add_new'            => __('Add New', 'Petween-care'),
		'edit_item'          => __('Edit Annonce', 'Petween-care'),
		'update_item'        => __('Update Annonce', 'Petween-care'),
		'search_items'       => __('Search Annonces', 'Petween-care'),
		'not_found'          => __('Not Found', 'Petween-care'),
		'not_found_in_trash' => __('Not Found in Trash', 'Petween-care'),
	);
	$args = array(
		'label'               => __('Annonce', 'Petween-care'),
		'description'         => __('Annonces', 'Petween-care'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-media-document',
		'menu_position'       => 5,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'Annonces'),
		'capability_type'     => 'post',
	);
	register_post_type('Annonce', $args);
}
add_action('init', 'register_Annonce_post_type');



/**
 * Register service taxonomy
 *
 * @return void
 */
// function register_Service_benefits_taxonomy()
// {
// 	$labels = array(
// 		'name'                       => _x('Services', 'Taxonomy General Name', 'text_domain'),
// 		'singular_name'              => _x('service', 'Taxonomy Singular Name', 'text_domain'),
// 		'menu_name'                  => __('Services', 'text_domain'),
// 		'all_items'                  => __('All Services', 'text_domain'),
// 		'parent_item'                => __('Parent service', 'text_domain'),
// 		'parent_item_colon'          => __('Parent service:', 'text_domain'),
// 		'new_item_name'              => __('New service Name', 'text_domain'),
// 		'add_new_item'               => __('Add New service', 'text_domain'),
// 		'edit_item'                  => __('Edit service', 'text_domain'),
// 		'update_item '                => __('Update service', 'text_domain'),
// 		'separate_items_with_commas' => __('Separate service with commas', 'text_domain'),
// 		'search_items'               => __('Search Services', 'text_domain'),
// 		'add_or_remove_items'        => __('Add or remove service', 'text_domain'),
// 		'choose_from_most_used'      => __('Choose from the most used service', 'text_domain'),
// 		'not_found'                  => __('Not Found', 'text_domain'),
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_in_nav_menus'          => true,
// 		'show_admin_column'          => true,
// 		'query_var'                  => true,
// 		'rewrite'                    => array('slug' => 'service'),
// 	);
// 	register_taxonomy('service', array('annonce'), $args);
// }
// add_action('init', 'register_Service_benefits_taxonomy');




/**
 * Register Custom Post Type "Faqs"
 *
 * @return void
 */
function register_Faq_post_type()
{
	$labels = array(
		'name'               => _x('Faqs', 'Post Type General Name', 'Petween-care'),
		'singular_name'      => _x('Faq', 'Post Type Singular Name', 'Petween-care'),
		'menu_name'          => __('Faqs', 'Petween-care'),
		'parent_item_colon'  => __('Parent Faq:', 'Petween-care'),
		'all_items'          => __('All Faqs', 'Petween-care'),
		'view_item'          => __('View Faq', 'Petween-care'),
		'add_new_item'       => __('Add New Faq', 'Petween-care'),
		'add_new'            => __('Add New', 'Petween-care'),
		'edit_item'          => __('Edit Faq', 'Petween-care'),
		'update_item'        => __('Update Faq', 'Petween-care'),
		'search_items'       => __('Search Faqs', 'Petween-care'),
		'not_found'          => __('Not Found', 'Petween-care'),
		'not_found_in_trash' => __('Not Found in Trash', 'Petween-care'),
	);
	$args = array(
		'label'               => __('Faq', 'Petween-care'),
		'description'         => __('Faqs', 'Petween-care'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-media-document',
		'menu_position'       => 5,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'Faqs'),
		'capability_type'     => 'post',
	);
	register_post_type('Faq', $args);
}
add_action('init', 'register_Faq_post_type');


function custom_breadcrumbs() {
	$separator = '-';
	$home = 'HOME'; 
	$before = '<span class="current">'; 
	$after = '</span>'; 
  
	if (!is_home() && !is_front_page() || is_paged()) {
	  echo '<nav class="breadcrumbs">';
	  global $post;
	  $homeLink = home_url();
	  echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $separator . ' ';
  
	  if (is_category()) {
		global $wp_query;
		$cat_obj = $wp_query->get_queried_object();
		$thisCat = $cat_obj->term_id;
		$thisCat = get_category($thisCat);
		$parentCat = get_category($thisCat->parent);
		if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $separator . ' '));
		echo $before . single_cat_title('', false) . $after;
	  } elseif (is_single()) {
		$cat = get_the_category();
		// $cat = $cat[0];
		// echo get_category_parents($cat, TRUE, ' ' . $separator . ' ');
		echo $before . get_the_title() . $after;
	  } elseif (is_page() && !$post->post_parent) {
		echo $before . get_the_title() . $after;
	  } elseif (is_page() && $post->post_parent) {
		$parent_id = $post->post_parent;
		$breadcrumbs = array();
		while ($parent_id) {
		  $page = get_page($parent_id);
		  $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
		  $parent_id = $page->post_parent;
		}
		$breadcrumbs = array_reverse($breadcrumbs);
		foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $separator . ' ';
		echo $before . get_the_title() . $after;
	  } elseif (is_tag()) {
		echo $before . single_tag_title('', false) . $after;
	  } elseif (is_author()) {
		global $author;
		$userdata = get_userdata($author);
		echo $before . 'Articles de ' . $userdata->display_name . $after;
	  } elseif (is_404()) {
		echo $before . 'Erreur 404' . $after;
	  }
  
	  echo '</nav>';
	}
  }
  


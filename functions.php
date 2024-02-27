<?php
require_once 'include/options.php';
function smart_clipping_files() {
    wp_enqueue_style( 'cdn_plyr_css', get_template_directory_uri() . 'https://cdn.plyr.io/3.6.8/plyr.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'owl_theme_css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'owl_carousel_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'slick-slider', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'smart_clipping_style_css', get_stylesheet_uri() );

    wp_enqueue_script( 'bootstrap_jquery', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'main_jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'jquery_ddslick_jquery', get_template_directory_uri() . '/assets/js/jquery.ddslick.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'selector_jquery', get_template_directory_uri() . '/assets/js/selector.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'comparison_slider_jquery', get_template_directory_uri() . '/assets/js/comparison-slider.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'cdn_plyr_jquery', get_template_directory_uri() . 'https://cdn.plyr.io/3.6.8/plyr.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'plyer_jquery', get_template_directory_uri() .'/assets/js/plyer.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'owl_carousel_jquery', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() .'/assets/js/slick.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'portfolioSlider', get_template_directory_uri() .'/assets/js/portfolioSlider.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'baguetteBox', get_template_directory_uri() .'/assets/js/baguetteBox.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'popupslider', get_template_directory_uri() .'/assets/js/popupslider.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'carousel_jquery', get_template_directory_uri() .'/assets/js/carousel.js', array('jquery'), '1.0', true );
    
    wp_enqueue_script( 'beforeafter_jquery', get_template_directory_uri() .'/assets/js/beforeafter.jquery.min.js', array(), '1.0', true );
    wp_enqueue_script( 'beforeafter_jquery_1.0.0', get_template_directory_uri() .'/assets/js/beforeafter.jquery-1.0.0.min.js', array(), '1.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array(), '1.2', true );

}
add_action( 'wp_enqueue_scripts', 'smart_clipping_files' );

function smart_clipping_default() { 
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );

    register_nav_menus(
		array(
			'top-menu' => ( 'Top Menu' ),
			'main-menu' => ( 'Main Menu' ),
		)
	);

}
add_action( 'after_setup_theme', 'smart_clipping_default' );


add_action( 'init', 'smart_clipping_custom_post' );
function smart_clipping_custom_post() { 
	register_post_type( 'blog', array(
        'labels' => array(
			'name' => __( 'Blogs' ),
			'singular_name' => __( 'blog' ),
		),
        'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
        'public' => false,
		'show_ui' => true,
    ));
	register_post_type( 'video', array(
        'labels' => array(
			'name' => __( 'Video' ),
			'singular_name' => __( 'video' ),
		),
        'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
        'public' => false,
		'show_ui' => true,
    ));
	register_post_type( 'product', array(
        'labels' => array(
			'name' => __( 'Products' ),
			'singular_name' => __( 'Products' ),
		),
        'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
        'public' => false,
		'show_ui' => true,
    ));
	register_post_type( 'gallery', array(
        'labels' => array(
			'name' => __( 'Gallerys' ),
			'singular_name' => __( 'Gallerys' ),
		),
        'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
        'public' => false,
		'show_ui' => true,
    ));
	register_post_type( 'service', array(
        'labels' => array(
			'name' => __( 'Services' ),
			'singular_name' => __( 'Services' ),
		),
        'supports' => array( 'title', 'editor', 'custom-fields', 'page-attributes' ),
        'public' => false,
		'show_ui' => true,
    ));
	register_post_type( 'whatwedo', array(
        'labels' => array(
			'name' => __( 'What we do' ),
			'singular_name' => __( 'What we do' ),
		),
        'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
        'public' => false,
		'show_ui' => true,
    ));
	//My code
	$labels = array(
        'name'               => 'Jobs',
        'singular_name'      => 'job',
        'menu_name'          => 'Job',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Job',
        'edit_item'          => 'Edit Job',
        'new_item'           => 'New Job',
        'view_item'          => 'View Job',
        'search_items'       => 'Search Job',
        'not_found'          => 'No products found',
        'not_found_in_trash' => 'No products found in Trash',
        'parent_item_colon'  => 'Parent Job:',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
        'rewrite'             => array( 'slug' => 'jobs', 'with_front' => true ),
        'has_archive'         => 'jobs',
        'capability_type'     => 'post',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'jobs', $args );


}


add_filter('widget_text', 'do_shortcode');





// function footer_widgets_function(){
// 	register_sidebar(array(
// 		'name' => 'Footer Widgets',
// 		'id' => 'footer-widgets',
// 		'description' => 'Add your footer widgets',
// 		'before_widget' => '<div class="col-lg-3 col-md-6">
// 		<div class="footer-menu">',
// 		'after_widget' => '</div>
// 	  </div>',
// 		'before_title' => '<h3 class="title">',
// 		'after_title' => '</h3>',
// 	));
// }
// add_action( 'widgets_init', 'footer_widgets_function' );

function footer_widgets_function() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer one', 'smartclipping' ),
			'id'            => 'footer-one',
			'description'   => esc_html__( 'Add widgets here.', 'smartclipping' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer two', 'smartclipping' ),
			'id'            => 'footer-two',
			'description'   => esc_html__( 'Add widgets here.', 'smartclipping' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer three', 'smartclipping' ),
			'id'            => 'footer-three',
			'description'   => esc_html__( 'Add widgets here.', 'smartclipping' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer four', 'smartclipping' ),
			'id'            => 'footer-four',
			'description'   => esc_html__( 'Add widgets here.', 'smartclipping' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'video_widget', 'smartclipping' ),
			'id'            => 'video',
			'description'   => esc_html__( 'Add widgets here.', 'smartclipping' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'footer_widgets_function' );

function thumbpost_list_shortcode($atts) {
    $atts = shortcode_atts(array(
        'count' => '2',
    ), $atts);

    $q = new WP_Query(array(
        'posts_per_page' => $atts['count'],
        'post_type' => 'post'
    ));

    $list = '<ul>';
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '
            <li class="contactlist-item">
                <div class="titlebox">
                    ' . get_the_post_thumbnail($idd, 'thumbnail') . '
                    <span class="title">' . get_the_title() . '</span>
                </div>
                <a href="" class="contactlist-link">' . get_the_content($idd) . '</a>
            </li>
        ';
    endwhile;
    $list .= '</ul>';
    wp_reset_postdata();
    return $list;
}
add_shortcode('thumb_posts', 'thumbpost_list_shortcode');
function test_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on test, use a find and replace
		* to change 'test' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'test', get_template_directory() . '/languages' );

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
			'test_custom_background_args',
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
add_action( 'after_setup_theme', 'test_setup' );
function wpdocs_custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
add_action( 'wpcf7_init', 'custom_add_form_tag_datalist' );
  
function custom_add_form_tag_datalist() {
  wpcf7_add_form_tag(
    'datalist',
    'custom_datalist_form_tag_handler',
    array( 'name-attr' => true )
  );
}
function custom_datalist_form_tag_handler( $tag ) {
	$atts = array(
	  'type' => 'text',
	  'name' => $tag->name,
	  'list' =>  'speakers',
	);
	
	$input = sprintf(
	  '<input %s />',
	  wpcf7_format_atts( $atts )
	);
	
	$datalist = '';
	
	foreach ( $tag->values as $val ) {
	  $datalist .= sprintf( '<option>%s</option>', esc_html( $val ) );
	}
	
	$datalist = sprintf(
	  '<datalist id="%1$s">%2$s</datalist>',
	  $tag->name . '-options',
	  $datalist
	);
	
	return $input . $datalist;
  }
  add_filter( 'wpcf7_autop_or_not', '__return_false' );
<?php
/**
 * Jstore functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jstore
 */

if ( ! function_exists( 'jstore_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jstore_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org.
	 * If you're building a theme based on Jstore, use a find and replace
	 * to change 'jstore' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'jstore');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	// for custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	
	// Thumbnail sizes
	add_image_size( 'jstore-featured', 980, 600, true );
	
	add_image_size( 'jstore-featured-single', 980, 600, true );
	
	add_editor_style('editor-style.css');
	
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'jstore' ),
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
	
	// custom logo 
	if ( ! function_exists( 'jstore_custom_logo' ) ) :
	/**
 	* Displays the optional custom logo.
 	*
 	*Does nothing if the custom logo is not available.
 	*
 	* @since Twenty Fifteen 1.5
 	*/
	function jstore_custom_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}
	
	endif;

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'jstore_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'jstore_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jstore_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jstore_content_width', 640 );
}
add_action( 'after_setup_theme', 'jstore_content_width', 0 );

/*Add theme menu page*/
 
add_action('admin_menu', 'jstore_menu');

function jstore_menu() {
	
	$jstore_page_title = __("Jstore Premium",'jstore');
	
	$jstore_menu_title = __("Jstore Premium",'jstore');
	
	add_theme_page($jstore_page_title, $jstore_menu_title, 'edit_theme_options', 'jstore_pro', 'jstore_pro_page');
	
}

/*
**
** Premium Theme Feature Page
**
*/

function jstore_pro_page(){
	
	if ( is_admin() ) {
		include_once( get_template_directory(). '/inc/admin/premium-screen/index.php');
	} 
	
} 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 
function jstore_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jstore' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jstore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Shop', 'jstore' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Add widgets here.', 'jstore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'jstore' ),
		'id'            => 'jstore-footer1',
		'description'   => esc_html__( 'Add widgets here.', 'jstore' ),
		'before_widget' => '<section id="%1$s" class="widget col-sm-3 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'jstore' ),
		'id'            => 'jstore-footer2',
		'description'   => esc_html__( 'Add widgets here.', 'jstore' ),
		'before_widget' => '<section id="%1$s" class="widget col-sm-3 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'jstore' ),
		'id'            => 'jstore-footer3',
		'description'   => esc_html__( 'Add widgets here.', 'jstore' ),
		'before_widget' => '<section id="%1$s" class="widget col-sm-3 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'jstore' ),
		'id'            => 'jstore-footer4',
		'description'   => esc_html__( 'Add widgets here.', 'jstore' ),
		'before_widget' => '<section id="%1$s" class="widget col-sm-3 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'jstore_widgets_init' );

// remove sidebar from single product page

function jstore_remove_sidebar_product_page() {
    if ( is_singular('product') ) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
    }
}
add_action('template_redirect', 'jstore_remove_sidebar_product_page');

/**
 * Enqueue scripts and styles.
 */
function jstore_scripts() {

	wp_enqueue_script( 'jstore-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '1.0', true );
		
	wp_enqueue_script( 'jstore-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '1.0', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css',array(),'3.3.4' );
			
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.min.css',array(),'4.7.0' );
		
	wp_enqueue_style( 'jstore-style', get_stylesheet_uri() );

	wp_enqueue_style( 'jstore-raleway-font','https://fonts.googleapis.com/css?family=Raleway', array(), '1.0', 'all' );
   
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', true );
	
	wp_enqueue_script( 'jstore-custom-js', get_template_directory_uri() . '/js/jstore-custom-js.js', array('jquery'), '3.3.4', true );
	
}
add_action( 'wp_enqueue_scripts', 'jstore_scripts' );

function jstore_admin_script($jstore_hook){
	
	if($jstore_hook != 'appearance_page_jstore_pro') {
		return;
	} 
    
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome-4.7.0/css/font-awesome.min.css',array(),'4.7.0' );
	wp_enqueue_style( 'jstore-custom-css', get_template_directory_uri() .'/css/jstore-custom.css',array(),'1.0' );

}

add_action( 'admin_enqueue_scripts', 'jstore_admin_script' );

// Display an optional post thumbnail.

if ( ! function_exists( 'jstore_post_thumbnail')) :
	
	
	
	function jstore_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}
		if ( is_singular() ) :
		?>
		<div class="entry-summary">
			<?php the_post_thumbnail(); ?>
		</div><!-- .post-thumbnail -->
		<?php else : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php
					the_post_thumbnail('post-thumbnail', array( 'alt' => esc_attr(get_the_title())));
				?>
			</a>
		</div>
		<?php endif; // End is_singular()
	}
endif;


/**
 * Clean up the_excerpt()
 */
function jstore_excerpt_length($length) {
 
	if ( is_admin() ) {
        return $length;
    }else{
		return 50;
	}
	
}		

function jstore_excerpt_more($more) {
 
	return '<a class="jstore-read-more" href="'.esc_url(get_the_permalink()).'" rel="nofollow">'.__("Read More &hellip;",'jstore').'</a>';
}

add_filter('excerpt_length', 'jstore_excerpt_length');

add_filter('excerpt_more', 'jstore_excerpt_more');

/* Include Premium Button Class File*/

require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/premium/class-customize.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

<?php

// include R debug
require(dirname(__FILE__) . '/lib/r-debug.php');


function addText(){
    echo "<p>Hellooo</p>";
}

add_action('tailpress_footer', 'addText');
/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
            'categoriesproduct' => __( 'Categories Product Menu', 'tailpress' ),
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
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );

//    Woo Commerce
//    add_theme_support( 'woocommerce', array(
////        'thumbnail_image_width' => 100,
////        'single_image_width'    => 300,
////
////        'product_grid'          => array(
////            'default_rows'    => 3,
////            'min_rows'        => 2,
////            'max_rows'        => 8,
////            'default_columns' => 4,
////            'min_columns'     => 2,
////            'max_columns'     => 5,
////        ),
//    ) );
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a style="white-space: nowrap" class="whitespace-nowrap"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );


// Setup Widget Areas
function wphooks_widgets_init() {
    register_sidebar([
        'name'          => esc_html__( 'Search Top Sidebar', 'wphooks' ),
        'id'            => 'search-top-sidebar',
        'description'   => esc_html__( 'Add widgets for main sidebar here', 'wphooks' ),
        'before_widget' => '<section id="search-top-bar">',
        'after_widget'  => '</section>',
//        'before_title'  => '<h2 class="widget-title">',
//        'after_title'   => '</h2>',
    ]);
    register_sidebar([
        'name'          => esc_html__( 'Menu Top Sidebar', 'wphooks' ),
        'id'            => 'menu-top-sidebar',
        'description'   => esc_html__( 'Add widgets for main sidebar here', 'wphooks' ),
        'before_widget' => '<section id="menu-top-bar">',
        'after_widget'  => '</section>'
    ]);

    register_sidebar([
        'name'          => esc_html__( 'Warning Sidebar', 'wphooks' ),
        'id'            => 'warning-sidebar',
        'description'   => esc_html__( 'Add widgets for main sidebar here', 'wphooks' ),
        'before_widget' => '<section id="warning-sidebar" class="bg-red-500 text-white py-2 font-light">',
        'after_widget'  => '</section>'
    ]);
}
add_action( 'widgets_init', 'wphooks_widgets_init' );



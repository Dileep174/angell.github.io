<?php 
/* Theme Functions FIles
*/

function angel_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'home-featured', 680, 400, array('center','center'));
    add_image_size( 'single-img', 600, 550, array('center','center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'angel')
    ) );
};

add_action('after_setup_theme', 'angel_theme_setup' );




// @start hooks and filters for navigation menu 

function add_additional_class_on_a($classes, $item, $args) {

	if( $args->menu == 'primary-menu' ) {
        
		if( $item->object_id == 16 ) {
            $classes['class'] = 'nav-link dropdown-toggle show active text-center';
			$classes['data-bs-toggle'] = "dropdown";
			$classes['aria-expanded'] = "true";
		} else {
			$classes['class'] = 'nav-item nav-link text-center';
		}		
	}
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

add_filter( 'nav_menu_link_attributes', 'nav_menu_link_class', 10, 2 );
function nav_menu_link_class( $atts, $item ) {
    if( !$item->has_children && $item->menu_item_parent > 0 ) {
        $class  = 'dropdown-item border-bottom';
        $atts['class'] = $class;
    }
    return $atts;
}

function wpdocs_custom_dropdown_class( $classes ) {
	$classes[] = 'dropdown-menu bg-light';
	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'wpdocs_custom_dropdown_class' );

// @end hooks and filters for navigation menu 




function angel_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('jquery');
    wp_enqueue_script('angel-bootstrap', get_template_directory_uri(), '/js/bootstrap.bundle.min.js');
    wp_enqueue_script('angel-script', get_template_directory_uri(), '/js/script.js');
}

add_action('wp_enqueue_scripts', 'angel_scripts');

//sidebar (widgets)

function angel_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'angel' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main sidebar on right side',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'angel' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'angel' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'angel' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Footer Widget 4', 'angel' ),
      'id'            => 'footer-4',
      'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
    
    ) );

    register_sidebar( array(
      'name'          => __( 'Footer Widget 5', 'angel' ),
      'id'            => 'footer-5',
      'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
  
    ) );
}

add_action( 'widgets_init','angel_widgets_init' );


// Register Custom Post Types
//add_action('init', 'register_custom_posts_init');

// function register_custom_posts_init() {
//     // Register cards
//     $cards_labels = array(
//         'name'               => 'Cards',
//         'singular_name'      => 'Card',
//         'menu_name'          => 'Cards'
//     );
//     $cards_args = array(
//         'labels'             => $cards_labels,
//         'public'             => true,
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' )
//     );
//     register_post_type('Cards', $cards_args);

// }


?>



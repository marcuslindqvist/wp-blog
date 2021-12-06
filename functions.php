<?php
function load_stylesheets() {
wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
//registrerar två sidebars
function local_register_sidebars() {

 register_sidebar(
 array(
 'id' => 'primary',
 'name' => __( 'Primary Sidebar' ),
 'description' => __( 'Sidebar.' ),
 'before_widget' => '<div id="" class="widget %2$s">',
 'after_widget' => '</div>',
 'before_title' => '<h3 class="widgettitle">',
 'after_title' => '</h3>',
 )
 );
 register_sidebar(
 array(
 'id' => 'secondary',
 'name' => __( 'Secondary Sidebar' ),
 'description' =>
__( 'Sidebar.' ),
 'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget' => '</div>',
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 )
 );
}
function wpdocs_excerpt_more( $more ) {
    return '...<br /><a href="'.get_the_permalink().'" rel="nofollow">Läs vidare</a>';
}
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
add_action( 'widgets_init','local_register_sidebars');
add_action( 'init', 'register_my_menus');
?>
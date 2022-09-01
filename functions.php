<?php

//Theme Options
add_theme_support('widgets');

//functions
function nepi_photography_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
function index_page_excerpt_length(){
  return 35;
}

function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}

// nav functions
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));


//Actions
add_action('wp_enqueue_scripts', 'nepi_photography_resources');

add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );



//Custom Post
function create_post_type() {
  register_post_type( 'photo-showcase',
    array(
      'labels' => array(
        'name' => ('Photo Showcases'),
        'singular_name' => ('Photo Showcase'),
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => false,
      'supports'  =>  array('title', 'editor', 'thumbnail'),
      'taxonomies' => array('category'),
    )
  );
}
add_action( 'init', 'create_post_type' );

//add custom post to display with standard query
function add_custom_pt( $query ) {
  if ( $query->is_home() && $query->is_main_query() || $query->is_category()
    || $query->is_author() || $query->is_date() )  {
    $query->set( 'post_type', array( 'post', 'photo-showcase' ) );
  }
}
add_action( 'pre_get_posts', 'add_custom_pt' );



//Register Sidebars
function my_sidebars(){

  register_sidebar(
    array(
      'name' => 'Page Middle Area',
      'id' => 'middle-area',
    )
  );
  register_sidebar(
    array(
      'name' => 'Photo Blog Upper Area',
      'id' => 'photo-upper-area',
    )
  );
  register_sidebar(
    array(
      'name' => 'Page Lower Area',
      'id' => 'lower-area',
    )
  );
  }

add_action('widgets_init', 'my_sidebars');

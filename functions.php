<?php
  //chamar a tag tittle
  function agi_title_tag(){
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme','agi_title_tag');

  //registrar menus
  register_nav_menus(array(
    'principal' => __('Menu principal','Aginov')
  ));

  /**
  * Register Custom Navigation Walker
  */
  function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  }
  add_action( 'after_setup_theme', 'register_navwalker' );

  // Creating Post Type
function create_post_type() {
  // Creating Post Type Events
  register_post_type( 'events',
      array(
          'taxonomies'  => array( 'category' ),
          'labels' => array(
              'name' => __( 'Eventos' ),
              'singular_name' => __( 'Eventos' )
          ),
          'public' => true,
          'has_archive' => true,
          'show_in_rest' => true,
          'supports' => array('title','custom-fields'),
      )
  );
  register_post_type( 'propriedade',
  array(
      'taxonomies'  => array( 'category' ),
      'labels' => array(
          'name' => __( 'Propriedade Intelectual' ),
          'singular_name' => __( 'propriedade intelectual' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'supports' => array('title','editor')
  )
);

}
add_action( 'init', 'create_post_type' );

require get_template_directory().'/inc/costumizer.php';
?>
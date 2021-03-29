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
			'supports' => array('title','custom-fields','editor','thumbnail'),
			'show_in_admin_bar'   => false,
			'show_in_nav_menus'   => false,
			'publicly_queryable'  => false,
			'query_var'           => false
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

register_post_type( 'parcerias',
	array(
		'taxonomies'  => array( 'category' ),
		'labels' => array(
			'name' => __( 'Parcerias' ),
			'singular_name' => __( 'Parcerias' )
		),
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array('title','editor')
	)
);

}
add_action( 'init', 'create_post_type' );
/*
function enable_categories_for_pages() {
  register_taxonomy_for_object_type('category', 'page');
}
add_action( 'init', 'enable_categories_for_pages' );
*/
require get_template_directory().'/inc/costumizer.php';
?>
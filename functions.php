<?php
  //chamar a tag tittle
  function agi_title_tag(){
    add_theme_support('title-tag');
	 add_theme_support ('post-thumbnails');
  }
  add_action('after_setup_theme','agi_title_tag');

  //registrar menus
  register_nav_menus(array(
    'principal' => __('Menu principal','Aginov')
  ));

	// Definir o tamanho o resumo
	add_filter( 'excerpt_length', function($length) {
		return 10;
	} );


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
			'show_ui' => true,
			'show_in_menu' => 'edit.php?post_type=events',
			'supports' => array('title','custom-fields','editor','thumbnail')
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
			'show_ui' => true,
			'show_in_menu' => 'edit.php?post_type=events',
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
		'show_ui' => true,
		'show_in_menu' => 'edit.php?post_type=events',
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

function postdados($postid){

	$post = (object) array(
		'titulo' => get_the_title($postid),
		'subtitulo' => get_post_meta($postid,"subtitulo",true),
		'resumo' => get_the_excerpt($postid),
		'data' => get_post_meta($postid, 'data', true),
		'horario' => get_post_meta($postid, 'horario', true),
		'modalidade' => get_post_meta($postid, 'modalidade', true),
		'tipo' => get_post_meta($postid, 'tipo', true),
		'tema' => get_post_meta($postid, 'tema', true),
		'link' => get_the_permalink($postid)
	);

	return $post;
}

function get_ajax_posts() {
	// Query Arguments
	$my_args = array(
		'post_type' => 'events',
		'post_per_page' => 40,
		'nopaging' => true
	);
	$posts_l=array();
	$posts = get_posts( $my_args );
	foreach ( $posts as $post ) {
		array_push($posts_l,  postdados($post->ID));
	}
	echo json_encode( $posts_l );

	exit; // exit ajax call(or it will return useless information to the response)
}

// Fire AJAX action for both logged in and non-logged in users
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
add_action('wp_ajax_nopriv_get_ajax_posts', 'get_ajax_posts');




//testa funcionalidade de adicionar menu para os tipos de post

function menuSuperiorGroup(){
	$page_title='Custom title';
	$menu_title="Sub Páginas";
	$capability="admcontent";
	$menu_slug="edit.php?post_type=events";
	$function ='';
	$icon_url='';
	$position=50;

	add_menu_page(
		$page_title,
	 	$menu_title,
		$capability,
		$menu_slug,
		$function,
		$icon_url,
		$position
	);

	$menu_title="Página Inicial";
	$menu_slug="http://aginov.risc.lan/wp-admin/";
	$capability="admcontent";
	add_menu_page(
		$page_title,
	 	$menu_title,
		$capability,
		$menu_slug,
		$function,
		$icon_url,
		$position
	);

	$menu_title="Menus";
	$menu_slug="http://aginov.risc.lan/wp-admin/nav-menus.php";
	$capability="admcontent";
	add_menu_page(
		$page_title,
	 	$menu_title,
		$capability,
		$menu_slug,
		$function,
		$icon_url,
		$position
	);

}

add_action( 'admin_menu', 'menuSuperiorGroup' );


	/* Adiciona submenus nos menus personalizados criados pelos devs */
	$parent_slug="http://aginov.risc.lan/wp-admin/";
	$page_title="personalize";
	$menu_title="Editar Página Inicial";
	$capability="admcontent";
	$menu_slug="http://aginov.risc.lan/wp-admin/customize.php?return=%2Fwp-admin%2F";

	add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug);
	$parent_slug="http://aginov.risc.lan/wp-admin/nav-menus.php";
	$page_title="menu";
	$menu_title="Menu da Página Principal";
	$capability="admcontent";
	$menu_slug="http://aginov.risc.lan/wp-admin/nav-menus.php";

	add_submenu_page($parent_slug,$page_title,$menu_title,$capability,$menu_slug);
	// remove item no menu Personalizar (Customize)
	function my_customize_register2() {
		global $wp_customize;
		$wp_customize->remove_panel('nav_menus');  //Modify this line as needed
		$wp_customize->remove_section('static_front_page');  //Modify this line as needed
		$wp_customize->remove_section('custom_css');  //Modify this line as needed
	}
	// remove itens do painel admin
	function remove_menus(){

		remove_menu_page( 'edit-comments.php' ); //Comments - comentários
		remove_menu_page( 'edit.php' ); //Comments - comentários
		remove_submenu_page( 'themes.php', 'nav-menus.php' );
		remove_menu_page( 'customize.php' );
		 remove_menu_page( 'tools.php' ); //Tools - ferramentas (recomendo!)

  }
  add_action( 'admin_menu', 'remove_menus' );

	add_action( 'customize_register', 'my_customize_register2',11 );
	require get_template_directory().'/inc/costumizer.php';
?>
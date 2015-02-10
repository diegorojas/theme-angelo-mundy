<?php
/**
 * Adiciona suporte adicional a thumbnails
 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'projetos', 340, 450, true ); //(cropped)
/**
 * Registrando uma Sidebar diamica para midias sociais
 */
// Add footer widget areas
add_action( 'widgets_init', 'angelomundy_widget_areas_reg' ); 

function angelomundy_widget_areas_reg() {

	register_sidebar( array(
		'name'          => __( 'Redes Sociais', 'theme-angelo-mundy' ),
		'id'            => 'sidebar-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
/**
 * Adicionando um Custom Post Type para Outros Projetos
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_projetos' );
/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_projetos() {
    /**
     * Labels customizados para o tipo de post
     */
    $labels = array(
	    'name' => _x('Projetos', 'post type general name'),
	    'singular_name' => _x('Projeto', 'post type singular name'),
	    'add_new' => _x('Novo Projeto', 'projeto'),
	    'add_new_item' => __('Novo Projeto'),
	    'edit_item' => __('Editar Projeto'),
	    'new_item' => __('Novo Projeto'),
	    'all_items' => __('Todos Projetos'),
	    'view_item' => __('Ver Projeto'),
	    'search_items' => __('Procurar Projetos'),
	    'not_found' =>  __('Nenhum projetos encontrado'),
	    'not_found_in_trash' => __('Nenhum projeto encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Projetos'
    );
    
    /**
     * Registramos o tipo de post projetos através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'projetos', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => true,
	    'query_var' => true,
		'rewrite' => array(
		 'slug' => 'projetos',
		 'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'hierarchical' => true,
	    'menu_position' => null,
	    'supports' => array('title','editor','thumbnail'),
		'taxonomies' => array( 'post_tag' )
	    )
    );
	flush_rewrite_rules();
}

 /**
     * Esta função muda o nome "Posts" no menu do dashboard
     */
	add_filter('gettext', 'change_post_to_music');
	add_filter('ngettext', 'change_post_to_music');
	function change_post_to_music($translated) {
	$translated = str_ireplace('Post', 'Musica', $translated);
	return $translated;
}

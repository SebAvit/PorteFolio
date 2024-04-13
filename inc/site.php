<?php /*
/*
* On utilise une fonction pour créer notre custom post type 'Sites'
*/

function site_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Sites', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Site', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Sites'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les sites'),
		'view_item'           => __( 'Voir les sites'),
		'add_new_item'        => __( 'Ajouter un nouveau site'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le site'),
		'update_item'         => __( 'Modifier le sites'),
		'search_items'        => __( 'Rechercher un site'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'sites'),
		'description'         => __( 'Tous sur sites'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'sites'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'sites', $args );

}

add_action( 'init', 'site_custom_post_type', 0 );
add_action( 'init', 'site_add_taxonomies', 0 );

function site_add_taxonomies() {
	
	// Taxonomie Année

	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_type = array(
		'name'              			=> _x( 'Types', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Type', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher un type'),
		'all_items'        				=> __( 'Tous les types'),
		'edit_item'         			=> __( 'Editer le type'),
		'update_item'       			=> __( 'Mettre à jour le type'),
		'add_new_item'     				=> __( 'Ajouter un nouveau type'),
		'new_item_name'     			=> __( 'Valeur du nouveau type'),
		'separate_items_with_commas'	=> __( 'Séparer les types avec une virgule'),
		'menu_name'         => __( 'Type'),
	);

	$args_type = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => false,
		'labels'            => $labels_type,
		'show_ui'           => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'site-type' ),
	);

	register_taxonomy( 'site-type', 'sites', $args_type );
}
?>
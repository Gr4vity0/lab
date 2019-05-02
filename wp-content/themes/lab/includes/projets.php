<?php
    /**
 * 
 * 
 * 
 * Post Type Projets
 * 
 * 
 * 
 * 
 * 
 * 
 */
function wpt_projets() {
	$labels = array(
        'name' => __('Projets'),
        'singular_name' => __('Projet'),
        'add_new' => __('Ajouter'),
        'add_new_item' => __('Ajouter un projet'),
        'edit_item' => __('Modifier la projet'),
        'new_item' => __('Nouveau projet'),
        'view_item' => __('Voir la projet'),
        'view_items' => __('Voir les projets'),
        'search_items' => __('Rechercher des projets'),
        'not_found' => __('Pas de projet trouvé.'),
        'not_found_in_trash' =>('Pas de projets dans la corbeille.'), 
        'all_items' => __('Toutes les projets'),
        'archives' => __('projets archivés'),        
        'filter_items_list' => __('Filtre de projets'),
        'items_list_navigation' => __('Navigation de projet'),
        'items_list' =>__('Liste projet'),
        'item_published' => __('projet publié.'),
        'item_published_privately' =>__('projet publié en privé.'),
        'item_reverted_to_draft' =>__('La projet est retourné au brouillon.'),
        'item_scheduled' => __('projet planifié.'),
        'item_updated' =>__('projet mise à jours.'), 
	);
	$supports = array(
		'title',
		'editor',
		'thumbnail',
		'comments',
                'revisions',
                
	);
	$args = array(
		'labels'               => $labels,
		'supports'             => $supports,
		'public'               => true,
		'capability_type'      => 'post',
		'rewrite'              => array( 'slug' => 'projets' ),
		'has_archive'          => true,
                'menu_icon'            => 'dashicons-portfolio',
                'taxonomies'          => array('topics', 'category' ),

        );

        register_post_type( 'projets', $args );
        
}
add_action( 'init', 'wpt_projets' );
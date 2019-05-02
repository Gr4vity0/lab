<?php
    /**
 * 
 * 
 * Post Type Services
 * 
 * 
 */
function wpt_services() {
	$labels = array(
        'name' => __('Services'),
        'singular_name' => __('Service'),
        'add_new' => __('Ajouter'),
        'add_new_item' => __('Ajouter un service'),
        'edit_item' => __('Modifier la service'),
        'new_item' => __('Nouveau service'),
        'view_item' => __('Voir la service'),
        'view_items' => __('Voir les services'),
        'search_items' => __('Rechercher des services'),
        'not_found' => __('Pas de service trouvé.'),
        'not_found_in_trash' =>('Pas de services dans la corbeille.'), 
        'all_items' => __('Toutes les services'),
        'archives' => __('services archivés'),        
        'filter_items_list' => __('Filtre de services'),
        'items_list_navigation' => __('Navigation de service'),
        'items_list' =>__('Liste service'),
        'item_published' => __('service publié.'),
        'item_published_privately' =>__('service publié en privé.'),
        'item_reverted_to_draft' =>__('La service est retourné au brouillon.'),
        'item_scheduled' => __('service planifié.'),
        'item_updated' =>__('service mise à jours.'), 
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
		'rewrite'              => array( 'slug' => 'services' ),
		'has_archive'          => true,
                'menu_icon'            => 'dashicons-yes',
                'taxonomies'          => array('topics', 'category', 'post_tag' ),

        );

        register_post_type( 'services', $args );
        
}
add_action( 'init', 'wpt_services' );
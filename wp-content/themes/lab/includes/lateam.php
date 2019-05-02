<?php
    /**
 * Registers the membre post type.
 */
function wpt_membre() {
	$labels = array(
        'name' => __('Membres'),
        'singular_name' => __('Membre'),
        'add_new' => __('Ajouter'),
        'add_new_item' => __('Ajouter un membre'),
        'edit_item' => __('Modifier la membre'),
        'new_item' => __('Nouveau membre'),
        'view_item' => __('Voir la membre'),
        'view_items' => __('Voir les membre'),
        'search_items' => __('Rechercher des membre'),
        'not_found' => __('Pas de membre trouvé.'),
        'not_found_in_trash' =>('Pas de membre dans la corbeille.'), 
        'all_items' => __('Toutes les membre'),
        'archives' => __('membre archivés'),        
        'filter_items_list' => __('Filtre de membre'),
        'items_list_navigation' => __('Navigation de membre'),
        'items_list' =>__('Liste membre'),
        'item_published' => __('membre publié.'),
        'item_published_privately' =>__('membre publié en privé.'),
        'item_reverted_to_draft' =>__('La membre est retourné au brouillon.'),
        'item_scheduled' => __('membre planifié.'),
        'item_updated' =>__('membre mise à jours.'), 
        'featured_image' => __( 'Selectionner une photo de profil' ),
        'set_featured_image' => __( 'Definir la photo de profil du membre de l\'équipe' ),
        'remove_featured_image' => __( 'Supprimer la photo de profil' ),
        'use_featured_image' => __( 'Utiliser comme photo de profil' ),
        
	);
	$supports = array(
		'title',
		'thumbnail',
                
	);
	$args = array(
		'labels'               => $labels,
		'supports'             => $supports,
		'public'               => true,
		'capability_type'      => 'post',
		'rewrite'              => array( 'slug' => 'membre' ),
		'has_archive'          => true,
                'menu_icon'            => 'dashicons-businessman',
                'taxonomies'          => array('post_tag'),

        );
        register_post_type( 'membres', $args );

}
add_action( 'init', 'wpt_membre' );
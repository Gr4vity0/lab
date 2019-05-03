<?php
    /**
 * On enregistre un post type Citations.
 */
function wpt_citations() {
	$labels = array(
        'name' => __('Citations'),
        'singular_name' => __('Citation'),
        'add_new' => __('Ajouter'),
        'add_new_item' => __('Ajouter une citation'),
        'edit_item' => __('Modifier la citation'),
        'new_item' => __('Nouvelle citation'),
        'view_item' => __('Voir la citation'),
        'view_items' => __('Voir les citations'),
        'search_items' => __('Rechercher des citations'),
        'not_found' => __('Pas de citation trouvée.'),
        'not_found_in_trash' =>('Pas de citations dans la corbeille.'), 
        'all_items' => __('Toutes les citations'),
        'archives' => __('citations archivées'),        
        'filter_items_list' => __('Filtre de citations'),
        'items_list_navigation' => __('Navigation de citation'),
        'items_list' =>__('Liste citation'),
        'item_published' => __('citation publiéé.'),
        'item_published_privately' =>__('citation publiée en privé.'),
        'item_reverted_to_draft' =>__('La citation est retournée au brouillon.'),
        'item_scheduled' => __('citation planifiée.'),
        'item_updated' =>__('citation mise à jours.'), 
        'featured_image' => __( 'Selectionner une photo' ),
        'set_featured_image' => __( 'Definir la photo pour le citation' ),
        'remove_featured_image' => __( 'Supprimer la photo' ),
        'use_featured_image' => __( 'Utiliser comme photo de citation' )
	);
	$supports = array(
		'title',
		'editor',
		'thumbnail',
                'revisions',
                
	);
	$args = array(
		'labels'               => $labels,
		'supports'             => $supports,
		'public'               => true,
		'capability_type'      => 'post',
		'rewrite'              => array( 'slug' => 'citations' ),
		'has_archive'          => true,
                'menu_icon'            => 'dashicons-format-quote',
                'taxonomies'          => array('topics', 'category' ),
                'capabilities' => array(
                        'edit_post' => 'edit_citation',
                        'edit_posts' => 'edit_citations',
                        'edit_others_posts' => 'edit_other_citations',
                        'publish_posts' => 'publish_citations',
                        'read_post' => 'read_citation',
                        'read_private_posts' => 'read_private_citations',
                        'delete_post' => 'delete_citation',
                    ),
        );

	register_post_type( 'citations', $args );
}
add_action( 'init', 'wpt_citations' );
<?php
    /**
 * 
 * 
 * Post Type -> Testimonials
 * 
 * 
 * 
 */
function wpt_testimonials() {
	$labels = array(
        'name' => __('Testimonials'),
        'singular_name' => __('Testimonial'),
        'add_new' => __('Ajouter'),
        'add_new_item' => __('Ajouter un testimonial'),
        'edit_item' => __('Modifier la testimonial'),
        'new_item' => __('Nouveau testimonial'),
        'view_item' => __('Voir le testimonial'),
        'view_items' => __('Voir les testimonials'),
        'search_items' => __('Rechercher des testimonials'),
        'not_found' => __('Pas de testimonial trouvé.'),
        'not_found_in_trash' =>('Pas de testimonials dans la corbeille.'), 
        'all_items' => __('Tout les testimonials'),
        'archives' => __('testimonials archivés'),        
        'filter_items_list' => __('Filtre de testimonials'),
        'items_list_navigation' => __('Navigation de testimonial'),
        'items_list' =>__('Liste testimonial'),
        'item_published' => __('testimonial publié.'),
        'item_published_privately' =>__('testimonial publié en privé.'),
        'item_reverted_to_draft' =>__('La testimonial est retourné au brouillon.'),
        'item_scheduled' => __('testimonial planifié.'),
        'item_updated' =>__('testimonial mise à jours.'), 
        'featured_image' => __( 'Selectionner une photo' ),
        'set_featured_image' => __( 'Definir la photo pour le testimonial' ),
        'remove_featured_image' => __( 'Supprimer la photo' ),
        'use_featured_image' => __( 'Utiliser comme photo de testimonial' )
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
		'rewrite'              => array( 'slug' => 'testimonials' ),
		'has_archive'          => true,
                'menu_icon'            => 'dashicons-testimonial',
                'taxonomies'          => array('topics', 'category' ),

        );

	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'wpt_testimonials' );
<?php


//Taxo tags




add_action( 'init', 'wpa4182_init');
function wpa4182_init()
{
    global $wp_taxonomies;


    $wp_taxonomies['post_tag']->labels = (object)array(
        'name' => 'Ajoutez un Poste',
        'menu_name' => 'Postes',
        'singular_name' => 'poste',
        'search_items' => 'Rechercher un poste',
        'popular_items' => 'Poste populaires',
        'all_items' => 'Tout les postes',
        'parent_item' => null, // Tags aren't hierarchical
        'parent_item_colon' => null,
        'edit_item' => 'Modifier le poste',
        'update_item' => 'Mettre à jour le poste',
        'add_new_item' => 'Ajouter un nouveau poste',
        'new_item_name' => 'Nouveau poste',
        'separate_items_with_commas' => 'Separer les postes avec une virgule',
        'add_or_remove_items' => 'Ajouter ou supprimer des postes',
        'choose_from_most_used' => 'Choisir parmis les postes les plus utilisés',
    );

    $wp_taxonomies['post_tag']->label = 'Postes';
}
?>
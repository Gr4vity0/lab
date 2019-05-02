<?php


//Menu navbar




// Nous allons prendre l'habitude de préfixer nos class afin de ne pas créer de conflit avec wordpress on ne sait jamais que le nom soit déjà utiliser ailleurs.

class MgMenu
{
  /**
   * Fonction qui ajoute un menu au thème.
   *
   * @return void
   */
  public static function register_main_menu()
  {
    register_nav_menu('main-menu', 'Menu principal dans le header.');
    // Ajout d'un menu pour les réseaux sociaux dans le footer. On rendra alors le menu actuelle dynamique et dans
    // le backoffice on mettra l'html icon directement à la place du texte du lien du menu.
    register_nav_menu('social-network-footer', 'Menu réseaux sociaux footer');
    
  }
  /**
   * Fonction qui ajoute des attributes au balise a des nav_menu
   *
   * @param [type] $att
   * @param [type] $item
   * @param [type] $args
   * @return void
   */


}

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

add_action('after_setup_theme', [MgMenu::class, 'register_main_menu']);
// Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
// les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

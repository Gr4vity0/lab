<?php



//CUSTOMIZE



class MgCustomizer
{
  public static function ajout_personnalisation_index($wp_customize)
  {


// PANNELS 

    //Pannel Index
    $wp_customize->add_panel('coding-panel-index', [
      'title' => __('Personnalisation de la page d\'accueil'),
      'Description' => __('Personnalisation de la page index'),
    ]);

    //Pannel Service
    $wp_customize->add_panel('coding-panel-services', [
      'title' => __('Personnalisation de la page services'),
      'Description' => __('Personnalisation de la page services '),
    ]);

    //Pannel BLOG
    $wp_customize->add_panel('coding-panel-blog', [
      'title' => __('Personnalisez la page blog'),
      'Description' => __('Personnalisez la page blog'),
    ]);


// SECTIONS INDEX

    //Sections Index Caroussel
    $wp_customize->add_section('coding-index-section-caroussel', [
      'panel' => 'coding-panel-index',
      'title' => __('Personnalisation du Caroussel'),
      'description' => __('Personnalisez le caroussel')
    ]);


    //Section Index Logo (navbar)
    $wp_customize->add_section('coding-index-section-logo', [
      'panel' => 'coding-panel-index',
      'title' => __('Personnalisation du Logo'),
      'description' => __('Personnalisez le Logo')
    ]);

    //Section Index Description (discover the world)
    $wp_customize->add_section('coding-index-section-description', [
      'panel' => 'coding-panel-index',
      'title' => __('Personnalisation de la description'),
      'description' => __('Personnalisez la description')
    ]);

    //Section index Video
    $wp_customize->add_section('coding-index-section-video', [
      'panel' => 'coding-panel-index',
      'title' => __('Selection de la video sur la page d\'accueil'),
      'description' => __('Selectionnez une video depuis votre pc ou une video en ligne')
    ]);

    //Section Index Promotion
    $wp_customize->add_section('coding-index-section-promotion', [
      'panel' => 'coding-panel-index',
      'title' => __('Modification du titre section Promotion'),
      'description' => __('Modifiez le titre section Promotion')
    ]);

    //Section Index Contact

    $wp_customize->add_section('coding-contact-section', [
      'panel' => 'coding-panel-index',
      'title' => __('Modification des informations de contact'),
      'description' => __('Modifiez la partie contact')
    ]);
    
    //Section Index contact Services

    $wp_customize->add_section('coding-services', [
      'panel' => 'coding-panel-index',
      'title' => __('Modification du titre de la section service'),
      'description' => __('Modifiez le titre de la section service')
    ]);
    
    //Section Index Testimonials

    $wp_customize->add_section('coding-testimonials', [
      'panel' => 'coding-panel-index',
      'title' => __('Modification du titre de la section testimonial'),
      'description' => __('Modifiez le titre de la section testimonial')
    ]);
    



// SECTIONS SERVICES


    //Section Services Titre
    $wp_customize->add_section('coding-page-service-service', [
      'panel' => 'coding-panel-services',
      'title' => __('Modification du titre de la section service'),
      'description' => __('Modifiez le titre de la section service')
    ]);

    //Section Services Titre Projets
    $wp_customize->add_section('coding-page-service-projet', [
      'panel' => 'coding-panel-services',
      'title' => __('Modification du titre de la section projet'),
      'description' => __('Modifiez le titre de la section projet')
    ]);


    //Section Services - Projets Modification image centrale (gsm)
    $wp_customize->add_section('coding-page-service', [
      'panel' => 'coding-panel-services',
      'title' => __('Modification du logo de la section projet'),
      'description' => __('Modifiez le logo de la section projet')
    ]);


// SECTIONS BLOG

    $wp_customize->add_section('coding-blog-section', [
      'panel' => 'coding-panel-blog',
      'title' => __('Modifiez la citation'),
      'description' => __('Modifiez la citation')
    ]);




//SETTINGS ET CONTROLS INDEX
//----------------------------------------------

    // Personnalisation logo titre (navbar)
    $wp_customize->add_setting('logo');
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize,
      'logo',
      array(
        'label' => 'Logo',
        'section' => 'coding-index-section-logo',
      )
    ));


    //Caroussel

    //Caroussel Titre
    $wp_customize->add_setting('titrecarou', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('about-control-tim', [
      'section' => 'coding-index-section-caroussel',
      'settings' => 'titrecarou',
      'label' => __('Modifier le Titre du caroussel'),
      'description' => __('Modifier le titre du caroussel'),
      'type' => 'text'

    ]);

    //Carrousel Logo
    $wp_customize->add_setting('logo2');
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize,
      'logo2',
      array(
        'label' => __('Modifier le Logo du caroussel'),
        'description' => __('Modifier le logo du caroussel'),
        'section' => 'coding-index-section-caroussel',
      )
    ));


    //Caroussel image 1
    $wp_customize->add_setting('carou1');
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize,
      'carou1',
      array(
        'label' => 'Image caroussel 1',
        'section' => 'coding-index-section-caroussel',
      )
    ));

    //Caroussel image 2
    $wp_customize->add_setting('carou2');
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize,
      'carou2',
      array(
        'label' => 'Image caroussel 2',
        'section' => 'coding-index-section-caroussel',
      )
    ));




    //SECTION DESCRIPTION

    //Description titre
    $wp_customize->add_setting('titredesc', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-c', [
      'section' => 'coding-index-section-description',
      'settings' => 'titredesc',
      'label' => __('Modifier le Titre de la description'),
      'description' => __('Modifier le titre de la description'),
      'type' => 'text'
    ]);
    //Description titre
    $wp_customize->add_setting('titredesc2', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-z', [
      'section' => 'coding-index-section-description',
      'settings' => 'titredesc2',
      'label' => __('Modifier le Titre de la description'),
      'description' => __('Modifier le titre de la description'),
      'type' => 'text'
    ]);
    //Description titre
    $wp_customize->add_setting('titredesc3', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-y', [
      'section' => 'coding-index-section-description',
      'settings' => 'titredesc3',
      'label' => __('Modifier le Titre de la description'),
      'description' => __('Modifier le titre de la description'),
      'type' => 'text'
    ]);



    //Description col gauche
    $wp_customize->add_setting('descolgauche', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('about-control-b', [
      'section' => 'coding-index-section-description',
      'settings' => 'descolgauche',
      'label' => __('Modifier le texte'),
      'description' => __('Modifier le texte'),
      'type' => 'textarea'
    ]);

    //Description col droite
    $wp_customize->add_setting('desccoldroite', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('about-control-a', [
      'section' => 'coding-index-section-description',
      'settings' => 'desccoldroite',
      'label' => __('Modifier le texte'),
      'description' => __('Modifier le texte'),
      'type' => 'textarea'
    ]);



    //VIDEO DE LA PAGE D'ACCUEIL
    $wp_customize->add_setting('themeslug_url_setting_id', array(
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'themeslug_sanitize_url',
    ));

    $wp_customize->add_control('themeslug_url_setting_id', array(
      'type' => 'url',
      'section' => 'coding-index-section-video', // Add a default or your own section
      'label' => __('Selectionnez une video en ligne'),
      'description' => __('Insérez l\'url de votre video'),
      'text_attrs' => array(
        'placeholder' => __('https://www.youtube.com/watch?v=JgHfx2v9zOU'),
      ),
    ));

    function themeslug_sanitize_url($url)
    {
      return esc_url_raw($url);
    }

    //Image Video
    $wp_customize->add_setting('imagevideo');
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize,
      'imagevideo',
      array(
        'label' => 'Selectionner une image',
        'section' => 'coding-index-section-video',
      )
    ));


    //SECTION PROMOTION


    //Section Promotion Titre
    $wp_customize->add_setting('promotitle', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-d', [
      'section' => 'coding-index-section-promotion',
      'settings' => 'promotitle',
      'label' => __('Modifier le Titre de la section promotion'),
      'description' => __('Modifier le titre de la section promotion'),
      'type' => 'text'
    ]);


    //Section Promotion Texte
    $wp_customize->add_setting('promotext', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-e', [
      'section' => 'coding-index-section-promotion',
      'settings' => 'promotext',
      'label' => __('Modifier le texte de la section promotion'),
      'description' => __('Modifier le texte de la section promotion'),
      'type' => 'text'
    ]);

    
    
    //SECTIONS SERVICES

    //Section Services Titre
    $wp_customize->add_setting('titreservice', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-aa', [
      'section' => 'coding-services',
      'settings' => 'titreservice',
      'label' => __('Modifier le Titre des services'),
      'description' => __('Modifier le titre des services'),
      'type' => 'text'
    ]);
    //Services titre 2 (span)
    $wp_customize->add_setting('titreservice2', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control--bb', [
      'section' => 'coding-services',
      'settings' => 'titreservice2',
      'label' => __('Modifier le Titre de la description'),
      'description' => __('Modifier le titre des services'),
      'type' => 'text'
    ]);
    //Services titre 3
    $wp_customize->add_setting('titreservice3', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-cc', [
      'section' => 'coding-services',
      'settings' => 'titreservice3',
      'label' => __('Modifier le Titre des services'),
      'description' => __('Modifier le titre des services'),
      'type' => 'text'
    ]);




    //Testimonials

    //Testimonials titre
    $wp_customize->add_setting('titretestimonial', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-aa', [
      'section' => 'coding-testimonials',
      'settings' => 'titretestimonial',
      'label' => __('Modifier le titre de la section testimonial'),
      'description' => __('Modifier le titre de la section testimonial'),
      'type' => 'text'
    ]);



    //Contact section
    $wp_customize->add_setting('contacttitre', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-f', [
      'section' => 'coding-contact-section',
      'settings' => 'contacttitre',
      'label' => __('Modifier le titre de la section contact'),
      'description' => __('Modifier le titre de la section contact'),
      'type' => 'text'
    ]);

    $wp_customize->add_setting('contacttexte', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('about-control-g', [
      'section' => 'coding-contact-section',
      'settings' => 'contacttexte',
      'label' => __('Modifier le texte de la section contact'),
      'description' => __('Modifier le texte de la section contact'),
      'type' => 'textarea'
    ]);

    $wp_customize->add_setting('contacttitreadresse', []);
    $wp_customize->add_control('about-control-h', [
      'section' => 'coding-contact-section',
      'settings' => 'contacttitreadresse',
      'label' => __('Modifier le titre de l\'adresse'),
      'description' => __('Modifier le titre de l\'adresse'),
      'type' => 'text'
    ]);

    $wp_customize->add_setting('contactadresse', []);
    $wp_customize->add_control('about-control-i', [
      'section' => 'coding-contact-section',
      'settings' => 'contactadresse',
      'label' => __('Modifier l\'adresse (rue)'),
      'description' => __('Modifier l\'adresse (rue)'),
      'type' => 'text'
    ]);

    $wp_customize->add_setting('contactville', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-j', [
      'section' => 'coding-contact-section',
      'settings' => 'contactville',
      'label' => __('Modifier la  ville'),
      'description' => __('Modifier la ville'),
      'type' => 'input'
    ]);

    $wp_customize->add_setting('contacttelephone', []);
    $wp_customize->add_control('about-control-k', [
      'section' => 'coding-contact-section',
      'settings' => 'contacttelephone',
      'label' => __('Modifier le numéro de telephone'),
      'description' => __('Modifier le numero de telephone'),
      'type' => 'input'
    ]);

    $wp_customize->add_setting('contactmail', [
      'sanitize_callback' => 'sanitize_email'
    ]);
    $wp_customize->add_control('about-control-l', [
      'section' => 'coding-contact-section',
      'settings' => 'contactmail',
      'label' => __('Modifier l\'adresse email'),
      'description' => __('Modifier l\'adresse email'),
      'type' => 'email'
    ]);



    //SERVICES
    //Image video
    $wp_customize->add_setting('imageprojet');
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize,
      'imageprojet',
      array(
        'label' => 'Selectionner une image',
        'section' => 'coding-page-service',
      )
    ));
    //Services projet titre
    $wp_customize->add_setting('titreprojet', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-ee', [
      'section' => 'coding-page-service-projet',
      'settings' => 'titreprojet',
      'label' => __('Modifier le Titre des projets'),
      'description' => __('Modifier le Titre des projets'),
      'type' => 'text'
    ]);
    //Services titre
    $wp_customize->add_setting('titreprojet2', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control--ff', [
      'section' => 'coding-page-service-projet',
      'settings' => 'titreprojet2',
      'label' => __('Modifier le Titre des projets'),
      'description' => __('Modifier le Titre des projets'),
      'type' => 'text'
    ]);
    //Services titre
    $wp_customize->add_setting('titreprojet3', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-gg', [
      'section' => 'coding-page-service-projet',
      'settings' => 'titreprojet3',
      'label' => __('Modifier le Titre des projets'),
      'description' => __('Modifier le Titre des projetss'),
      'type' => 'text'
    ]);

    //Services service titre
    $wp_customize->add_setting('titreservice1', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-hh', [
      'section' => 'coding-page-service-service',
      'settings' => 'titreservice1',
      'label' => __('Modifier le Titre des services'),
      'description' => __('Modifier le titre des services'),
      'type' => 'text'
    ]);

    //Services titre
    $wp_customize->add_setting('titreservice2', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control--ii', [
      'section' => 'coding-page-service-service',
      'settings' => 'titreservice2',
      'label' => __('Modifier le Titre de la description'),
      'description' => __('Modifier le titre des services'),
      'type' => 'text'
    ]);

    //Services titre
    $wp_customize->add_setting('titreservice3', [
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ]);
    $wp_customize->add_control('about-control-jj', [
      'section' => 'coding-page-service-service',
      'settings' => 'titreservice3',
      'label' => __('Modifier le Titre des services'),
      'description' => __('Modifier le titre des services'),
      'type' => 'text'
    ]);



    //SECTIONS BLOG

    //Sidebar Blog Citation (quote)
    $wp_customize->add_setting('citation', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('about-control-ll', [
      'section' => 'coding-blog-section',
      'settings' => 'citation',
      'label' => __('Modifier la citation'),
      'description' => __('Modifier la citation'),
      'type' => 'textarea'
    ]);
  }
}
add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_index']);

<?php

define('INCLUDE_DIR', get_template_directory() . "/includes");

require_once(INCLUDE_DIR . '/enqueue-scripts.php');

require_once(INCLUDE_DIR . '/menu.php');

require_once(INCLUDE_DIR . '/theme-setup.php');

require_once(INCLUDE_DIR . '/customizer.php');

require_once(INCLUDE_DIR . '/iconsservices.php');

require_once(INCLUDE_DIR . '/iconsprojets.php');

require_once(INCLUDE_DIR . '/services.php');

require_once(INCLUDE_DIR . '/projets.php');

require_once(INCLUDE_DIR . '/lateam.php');

require_once(INCLUDE_DIR . '/testimonials.php');

require_once(INCLUDE_DIR . '/citations.php');

require_once(INCLUDE_DIR . '/postemetabox.php');

require_once(INCLUDE_DIR . '/sidebars.php');

require_once(INCLUDE_DIR . '/tagtaxo.php');

require_once(INCLUDE_DIR . '/pagination.php');




function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'c79f9ac88c6063';
    $phpmailer->Password = 'ba70f350550fe7';
  }
  
  add_action('phpmailer_init', 'mailtrap');



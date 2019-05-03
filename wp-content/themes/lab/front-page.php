<?php 

get_header();
require_once get_template_directory() . "/includes/span.php";
get_template_part('templates/intro');
get_template_part('templates/about');
get_template_part('templates/testimonial');
get_template_part('templates/services');
get_template_part('templates/team');
get_template_part('templates/promotion');
get_template_part('templates/contact');

get_footer();

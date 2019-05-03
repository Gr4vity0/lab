<?php
$logo = get_theme_mod('logo'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    wp_head();
    ?>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="<?php echo esc_url($logo) ?>" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="<?php echo esc_url($logo) ?>" alt="" height="32px" width="111px"><!-- Logo -->

		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>

		        <?php
        wp_nav_menu([
            'menu' => 'main-menu',
          'menu_class' => '',
          'theme_location' => 'main-menu',
		  'container' => '',
		  'items_wrap' => '<ul class="menu-list">%3$s</ul>',
		]);
		

        ?>

	</header>
	<!-- Header section end -->
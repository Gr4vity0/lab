<?php
$logo2 = get_theme_mod('logo2'); 
$titrecarou = get_theme_mod('titrecarou');
$carou1 = get_theme_mod('carou1');
$carou2 = get_theme_mod('carou2');
?>
	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="<?php echo esc_url($logo2) ?>" alt="">
				<p><?= $titrecarou ?></p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item hero-item" data-bg="<?php echo esc_url($carou1) ?>"></div>
			<div class="item hero-item" data-bg="<?php echo esc_url($carou2) ?>"></div>
		</div>
	</div>
	<!-- Intro Section -->

	

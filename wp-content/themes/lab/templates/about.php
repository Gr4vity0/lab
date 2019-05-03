<?php
$descolgauche = get_theme_mod('descolgauche'); 
$desccoldroite = get_theme_mod('desccoldroite');  
$video = get_theme_mod('themeslug_url_setting_id');
$imagevideo = get_theme_mod('imagevideo');

$args = array(
	'post_type'   => 'services',
	'orderby' => 'rand',
	'posts_per_page' => 3,
	
);
$query = new WP_Query( $args );?>

<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					<?php while ($query->have_posts()): $query->the_post(); ?>
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
							<?php fontawesome_icon(); ?>
							</div>
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2><?=(spanToStyle('titredesc'));?></h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p><?php echo $descolgauche ?></p>
					</div>
					<div class="col-md-6">
						<p><?php echo $desccoldroite ?></p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="/index.php?page_id=105" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="<?= $imagevideo ?>" alt="">
							<a href="<?php echo $video ?>" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->
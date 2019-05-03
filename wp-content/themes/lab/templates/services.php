<?php

$args = array(
	'post_type'   => 'services',
	'orderby' => 'rand',
	'posts_per_page' => 9,
	
);
$query = new WP_Query( $args );?>	
	
	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2><?=(spanToStyle('titreservice'));?></h2>
			</div>
			<div class="row">
				<!-- single service -->
				<?php while ($query->have_posts()): $query->the_post(); ?>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
						<?php fontawesome_icon(); ?>
						</div>
						<div class="service-text">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="text-center">
				<a href="/index.php/service" class="site-btn">Browse</a>
			</div>
		</div>
	</div>

<?php

get_header();
$titretestimonials = get_theme_mod('titretestimonial');

$args = array(
	'post_type'   => 'testimonials',
	'posts_per_page' => 6,
	'orderby' => 'rand', 
);
$query = new WP_Query( $args );
?>
<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2><?= $titretestimonials ?></h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">

					<?php while ($query->have_posts()): $query->the_post(); ?>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p><?php the_content(); ?></p>
							<div class="client-info">
								<div class="avatar">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="client-name">
									<h2><?php the_title(); ?></h2>
									<p><?php poste_get_meta( 'poste_poste' ); ?></p>
								</div>
							</div>
						</div>
						<?php endwhile ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->
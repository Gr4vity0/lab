<?php
$contacttitre = get_theme_mod('contacttitre');
$contacttexte = get_theme_mod('contacttexte');
$contacttitreadresse = get_theme_mod('contacttitreadresse');
$contactadresse = get_theme_mod('contactadresse');
$contactville = get_theme_mod('contactville');
$contacttelephone = get_theme_mod('contacttelephone');
$contactmail = get_theme_mod('contactmail');
$imageprojet = get_theme_mod('imageprojet');
$titreprojet = get_theme_mod('titreprojet');
$titreprojet2 = get_theme_mod('titreprojet2');
$titreprojet3 = get_theme_mod('titreprojet3');
$titreservice1 = get_theme_mod('titreservice1');
$titreservice2 = get_theme_mod('titreservice2');
$titreservice3 = get_theme_mod('titreservice3');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type'   => 'services',
	'orderby' => 'rand',
	'posts_per_page' => 6,
	'paged' => $paged,
);
$query = new WP_Query($args);

global $post;
$post_slug = $post->post_name;


$args2 = array(
	'post_type'   => 'projets',
	'posts_per_page' => '3',
	'orderby' => 'rand',
);
$query2 = new WP_Query($args2);

$args3 = array(
	'post_type'   => 'projets',
	'posts_per_page' => '3',
	'orderby' => 'rand',
);
$query3 = new WP_Query($args3);

$args4 = array(
	'post_type'   => 'projets',
	'posts_per_page' => '3',
	'orderby' => 'rand',
);
$query4 = new WP_Query($args4);

get_header();
get_template_part('templates/pageheader'); ?>

<!-- services section -->
<div class="services-section spad">
	<div class="container">
		<div class="section-title dark">
			<h2><?= $titreservice1 ?> <span><?= $titreservice2 ?></span><?= ' ' . $titreservice3 ?></h2>
		</div>
		<div class="row">
			<!-- single card -->
			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<?php fontawesome_icon(); ?>
						</div>
						<div class="service-text">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?>.</p>
						</div>
					</div>
				</div>

			<?php endwhile; ?>

		</div>
		<div class="text-center">
			<?php echo paginate_links(array(
          'format' => 'page/%#%',
          'current' => $paged,
          'total' => $query->max_num_pages
        ));
        ?>
		</div>
	</div>
</div>

<!-- features section -->
<div class="team-section spad"  id="projetss">
	<div class="overlay"></div>
	<div class="container">
		<div class="section-title">
			<h2><?= $titreprojet ?> <span><?= $titreprojet2 ?></span><?= ' ' . $titreprojet3 ?></h2>
		</div>
		<div class="row">
			<!-- feature item -->
			<div class="col-md-4 col-sm-4 features">
				<?php while ($query2->have_posts()) : $query2->the_post(); ?>
					<div class="icon-box light left">
						<div class="service-text">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
						<div class="icon">
							<?php fontawesome_icon2(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<!-- Devices -->
			<div class="col-md-4 col-sm-4 devices">
				<div class="text-center">
					<img src="<?php echo esc_url($imageprojet) ?>" alt="">
				</div>
			</div>
			<!-- feature item -->
			<div class="col-md-4 col-sm-4 features">
				<?php while ($query3->have_posts()) : $query3->the_post(); ?>
					<div class="icon-box light left">
						<div class="service-text">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
						<div class="icon">
							<?php fontawesome_icon2(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="text-center">
			<a href="#servicess" class="site-btn">Browse</a>
		</div>
	</div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad" id="servicess">
	<div class="container">
		<div class="row">
			<!-- Single Card -->
			<?php while ($query4->have_posts()) : $query4->the_post(); ?>

				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="<?= the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="card-text">
							<h2><?= the_title() ?></h2>
							<p><?= the_content(); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>

		</div>
	</div>
</div>
<!-- services card section end-->


<?php

get_template_part('templates/newsletter');
get_template_part('templates/contact'); 


get_footer();

?>
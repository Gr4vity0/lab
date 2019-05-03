<?php
$args = array(
	'post_type'   => 'membre',
	'orderby' => 'rand',
	'posts_per_page' => 1,
);
$page_id = get_the_ID();
$query = new WP_Query($args); ?>

<?php

$post_slug = 'christinne-williams-2';

$args2 = array(

	'name' => $post_slug,
	'post_type' => 'membre',
	'posts_per_page' => 1,
	'caller_get_posts' => 1
);

$my_query = null;

$my_query = new WP_Query($args2);
?>
<?php
$args3 = array(
	'post_type'   => 'membre',
	'orderby' => 'rand',
	'posts_per_page' => 1,
);
$page_id = get_the_ID();
$my_query2 = new WP_Query($args3); ?>
<!-- Team Section -->
<div class="team-section spad">
	<div class="overlay"></div>
	<div class="container">
		<div class="section-title">
			<h2><?=(spanToStyle('titreteam'));?></h2>
		</div>
		<div class="row">
			<!-- single member -->
			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<div class="col-sm-4">
					<div class="member">
						<?php the_post_thumbnail(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_tags('<h3>', '', '</h3>') ?>
					</div>
				</div>
			<?php endwhile;   wp_reset_query();?>

			<!-- single member -->
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="col-sm-4">
					<div class="member">
						<?php the_post_thumbnail(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_tags('<h3>', '', '</h3>') ?>
					</div>
				</div>
			<?php endwhile; ?>



			<!-- single member -->
			<?php while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
				<div class="col-sm-4">
					<div class="member">
						<?php the_post_thumbnail(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_tags('<h3>', '', '</h3>') ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<!-- Team Section end-->
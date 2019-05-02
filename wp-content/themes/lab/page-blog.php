<?php get_header();


$totalcomments = get_comments_number();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type'   => 'post',
	'posts_per_page' => 3,
	'paged' => $paged
);

$query = new WP_Query($args);

$args2 = array(
	'post_type'   => 'citations',
	'posts_per_page' => 1,
	'orderby' => 'rand',
);
$query2 = new WP_Query($args2);

$args4 = array(
	'post_type' => ['post', 'testimonials', 'services', 'projets'],
	'posts_per_page' => 5,
	'orderby' => 'rand',
);
$query4 = new WP_Query($args4);


get_template_part('templates/pageheader'); ?>


<!-- page section -->
<div class="page-section spad">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-7 blog-posts">

				<?php while ($query->have_posts()) : $query->the_post(); ?>
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
							<div class="post-date">
								<h2><?= get_the_date("j"); ?></h2>
								<h3><?= get_the_date("F Y"); ?></h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title"><?= the_title(); ?></h2>
							<div class="post-meta">
								<a href=""><?= the_author(); ?></a>
								<a href="">
									<?php
									$allTags = get_the_tags();
									foreach ($allTags as $tag) {
										echo $tag->name . ' ,';
									}
									?>
								</a>
								<a href=""><?= get_comments_number() ?> Comments</a>
							</div>
							<p><?php the_excerpt(); ?></p>
							<a href="<?= the_permalink() ?>" class="read-more">Read More</a>
						</div>
					</div>
				<?php endwhile; ?>
				<!-- Pagination -->
				<div class="text-center">
					<?php echo paginate_links(array(
						'format' => 'page/%#%',
						'current' => $paged,
						'total' => $query->max_num_pages
					));
					?>
				</div>
			</div>

			<!-- Sidebar area -->
			<div class="col-md-4 col-sm-5 sidebar">
				<!-- Single widget -->
				<div class="widget-item">
					<?php get_search_form(); ?>
				</div>
				<?php dynamic_sidebar('sidebar'); ?>
				<?php get_template_part('templates/mySidebars'); ?>
			</div>
		</div>
	</div>
</div>
<!-- page section end-->

<?php 
get_template_part('templates/newsletter');
get_footer(); ?>
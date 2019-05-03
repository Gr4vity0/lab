<?php
get_header();
get_template_part("templates/headertitre");
?>


<div class="page-section spad">
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-sm-7 blog-posts">
				<h1><?php echo 'Resultat pour les tags: ' . get_query_var('tag') . get_query_var('category_name') ?></h1>
				<br>
				<br>
				<?php
				// Check if there are any posts to display
				if (have_posts()) : ?>

					<header class="archive-header">


						<?php
						// Display optional category description
						if (category_description()) : ?>
							<div class="archive-meta"><?php echo category_description(); ?></div>
						<?php endif; ?>
					</header>

					<?php
					while (have_posts()) : the_post(); ?>
						<!-- Post item -->
						<div class="post-item">
							<div class="post-thumbnail">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								<div class="post-date">
									<h2><?= get_the_date("j"); ?></h2>
									<h3><?= get_the_date("F Y"); ?></h3>
								</div>
							</div>
							<div class="post-content">
								<h2 class="post-title"><?= the_title(); ?></h2>
								<div class="post-meta">
									<a href=""><?= the_author() ?></a>
									
										<!-- ici la boucle-->
										<?php
										$allTags = get_the_tags();
										foreach ($allTags as $tag) {?>
										<a href="<?= get_tag_link($tag); ?>"><?php echo $tag->name; ?></a>
									<?php } ?>
									
									<a href=""><?= get_comments_number() ?> Comments</a>
								</div>
								<p><?= the_excerpt(); ?></p>
								<a href="<?= the_permalink(get_the_ID()) ?>" class="read-more">Read More</a>
							</div>
						</div>
					<?php endwhile;

				else : ?>
					<p>Sorry, no posts matched your criteria.</p>


				<?php endif; ?>
			</div>
			<div class="col-md-4 col-sm-5 sidebar">
				<?php get_search_form();    ?>
				<?php dynamic_sidebar('sidebar'); ?>

				<?php get_template_part('templates/mySidebars'); ?>


			</div>
		</div>
	</div>

	<?php
	get_footer();
	?>
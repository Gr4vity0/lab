			<!-- Sidebar area -->
			<div class="col-md-4 col-sm-5 sidebar">
				<!-- Single widget -->
				<div class="widget-item">
					<?php get_search_form(); ?>
				</div>
				<?php dynamic_sidebar('sidebar'); ?>
				<?php get_template_part('templates/mySidebars'); ?>
			</div>
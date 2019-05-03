<!-- newsletter section -->
<div class="newsletter-section spad">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2>Newsletter</h2>
			</div>
			<div class="col-md-9">
				<!-- newsletter form -->
				<?php include plugin_dir_path(__FILE__) . '/notice-news.php' ?>

				<form class="nl-form" id="con_form" action="<?= admin_url('admin-post.php'); ?>" method="post">
				<?php wp_nonce_field('send-news'); ?>
				<input type="hidden" name="action" value="send-news">
				<input type="text" name="emailNew" placeholder="Your email">
					<button class="site-btn btn-2">Newsletter</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- newsletter section end-->

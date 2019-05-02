<?php 
global $post;
$post_slug = $post->post_name;

?>

<!-- Page header -->
<div class="page-top-section">
	<div class="overlay"></div>
	<div class="container text-right">
		<div class="page-info">
			<h2><?= $post_slug ?></h2>
			<div class="page-links">
				<a href="#">Home</a>
				<span><?= $post_slug ?></span>
			</div>
		</div>
	</div>
</div>
<!-- Page header end-->
<?php 
$citation = get_theme_mod('citation'); ?>

<!-- Single widget -->
					<div class="widget-item">

						<h2 class="widget-title">Tags</h2>
                        <ul class="tag">
						<?php 
						$allTags = get_tags();
						foreach ($allTags as $tag) { 	?>
							<li><a href=""><?= $tag->name ?></a></li>
						<?php } ?>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p><?= $citation ?></p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="<?= get_template_directory_uri().'/img/add.jpg' ?>" alt=""></a>
						</div>
					</div>

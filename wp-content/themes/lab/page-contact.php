<?php
get_header();
$contacttitre = get_theme_mod('contacttitre');
$contacttexte = get_theme_mod('contacttexte');
$contacttitreadresse = get_theme_mod('contacttitreadresse');
$contactadresse = get_theme_mod('contactadresse');
$contactville = get_theme_mod('contactville');
$contacttelephone = get_theme_mod('contacttelephone');
$contactmail = get_theme_mod('contactmail');	
$address = 'Bruxelles';
    
?>

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Contact</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Contact</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->


	<!-- Google map -->
	<?= '<iframe frameborder="0" class="map" id="map-area" style="width: 100%;"src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>'; ?>



	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2><?= $contacttitre ?></h2>
					</div>
					<p><?= $contacttexte ?></p>
					<h3 class="mt60"><?= $contacttitreadresse ?></h3>
					<p class="con-item"><?= $contactadresse ?><br> <?= $contactville ?></p>
					<p class="con-item"><?= $contacttelephone ?></p>
					<p class="con-item"><?= $contactmail ?></p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form" action="<?= get_admin_url() . '?action=send-mail'; ?>" method="post">
					<?php wp_nonce_field('send-mail'); ?>
						<div class="row">
							<div class="col-sm-6">
							<input type="text" name="name" id="name"
                                value="<?= isset($old['name']) ? $old['name'] : '' ?>"placeholder="Name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" id="message" cols="30"
                                rows="10" placeholder="Your email"><?= isset($old['message']) ? $old['message'] : '' ?></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->


<?php
get_footer();
?>

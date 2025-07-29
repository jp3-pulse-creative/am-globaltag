<div id="contact-form-2" class="pepi-row">
	<div class="container">
		<div class="cf-ctn">
			<div class="row">
				<div class="col-lg-1 hide-lg"></div>
				<div class="col-lg-5 col-md-6">
					<h4><strong>Alvarez &amp; Marsal</strong><br/>
					600 Madison Ave<br/>
					New York, NY, 10022</h4>
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/redesign/contact-map02.jpg"/>
				</div>
				<div class="col-lg-5 col-md-6">
					<h1 class="section-title">Connect With Us</h1>
					<?php if(get_field('contact_form')){
						echo do_shortcode(get_field('contact_form'));
					}else{
						//echo do_shortcode('[contact-form-7 id="9" title="Contact Form"]');
						echo do_shortcode('[contact-form-7 id="346" title="Main Contact Form"]');
					}?>
				</div>
				<div class="col-lg-1 hide-lg"></div>
			</div>
		</div>
	</div>
</div>

<script>
	$( document ).ready(function() {
		var cta_btn = '<a href="" class="cta-btn"><div class="cta-inner d-flex align-items-center"><span class="arrow_carrot-right text-white"></span><input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit"></div></a>'
		$('.wpcf7-submit').replaceWith(cta_btn);
	});
</script>
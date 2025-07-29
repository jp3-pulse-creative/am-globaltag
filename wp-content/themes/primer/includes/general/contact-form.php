<section id="contact-form" class="pepi-row__pad-y" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/images/recruitment-pages/a&m-global-transaction-advisory-group-tag-contact-footer-bg.jpg'); ?>);background-size: cover;">
	<div class="container bg-white p-lg-5 mt-0 mt-lg-0 pt-0 px-lg-0">
		<div class="row justify-content-center align-items-center<?php if (is_page('Experienced Hire Recruiting')) {
																		echo ' pt-5 pt-lg-0';
																	} ?>">
			<div class="col-12 text-lg-center mb-3">
				<h2 class="section-title">Contact Us</h2>
			</div>
		</div>
		<?php if (get_field('contact_form')) {
			echo do_shortcode(get_field('contact_form'));
		} else {
			echo do_shortcode('[contact-form-7 id="f9ccfeb" title="Footer Form"]');
		} ?>
	</div>
</section>
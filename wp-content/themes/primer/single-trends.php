<?php
/*
 * news redirect to source (external link)
 */
$source_redirect = get_field('external_link');
if($source_redirect) wp_redirect(clean_url($source_redirect), 301);
get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">

		</div> <!-- /.blog-main -->
	</div> <!-- /.row -->
</div>
<?php get_footer(); ?>
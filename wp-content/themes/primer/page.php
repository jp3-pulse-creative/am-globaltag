<?php
/*
 * default page
 */
get_header(); ?>
<div class="w-100 d-flex justify-content-center align-items-center text-white mb-5" style="background: #00244A; padding: 150px 0; color: #ffffff;"><h1 class="text-white"><?php the_title(); ?></h1></div>
<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div> <!-- /.blog-main -->
		</div> <!-- /.row -->
	</div>
</div>
<?php get_footer(); ?>
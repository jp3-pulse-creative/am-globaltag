<?php
/*
 Template Name: What We Do 2
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: https://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(2); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

</div>
<?php endif; ?>
<style>
	.promo-rsvp h1 {
		width: 100%;
		text-align: center;
		text-transform: uppercase;
		font-family: "Helvetica Neue LT W05_47 Lt Cn", "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 46px;
		padding: 0 30px;
	}
	#promo-rsvp{
		display: flex;
		align-items: center;
		background-image: url("<?php echo site_url();?>/wp-content/uploads/2018/08/back-what-we-do.jpg");
		overflow: hidden;
		height: 570px;
		background-position: center;
		background-attachment: scroll;
		background-size: cover !important;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl" style="background-image:<?php echo $image; ?>">
			 <h1><?php echo get_the_title() ?></h1>
			</section>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<?php endwhile; else : ?>


<?php endif; ?>

<?php get_footer(8); ?>

<?php
/**
 * The template used for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! primer_use_featured_hero_image() ) : ?>

		<?php include (TEMPLATEPATH .  'templates/parts/loop/post', 'thumbnail' ); ?>

	<?php endif; ?>

	<?php include (TEMPLATEPATH .  'templates/parts/loop/page', 'content' ); ?>

	<?php include (TEMPLATEPATH .  'templates/parts/loop/page', 'footer' ); ?>

</article><!-- #post-## -->

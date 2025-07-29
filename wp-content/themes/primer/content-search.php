<?php
/**
 * The template part for displaying results in search pages.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php include (TEMPLATEPATH .  'templates/parts/loop/post', 'title' ); ?>

	<?php include (TEMPLATEPATH .  'templates/parts/loop/post', 'thumbnail' ); ?>

	<?php include (TEMPLATEPATH .  'templates/parts/loop/post', 'excerpt' ); ?>

	<?php include (TEMPLATEPATH .  'templates/parts/loop/post', 'search-footer' ); ?>

</article><!-- #post-## -->

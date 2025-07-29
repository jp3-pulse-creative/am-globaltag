<?php
/* Template Name: Reboot: Deals & Highlights - ALM */

?>

<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/includes/general/featured-image-slider-deals.php'); ?>


<div id="deals-highlights" class="pepi-row archive-page archive-page__deals">
  <div class="container">

    <?php
    $shortcode_filter = get_field('alm_filter_shortcode', $post->ID);
    $shortcode_query = get_field('alm_query_shortcode', $post->ID);

    echo do_shortcode("$shortcode_filter"); ?>

    <?php echo do_shortcode("$shortcode_query"); ?>
  </div>
</div>

<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>
<?php get_footer(); ?>
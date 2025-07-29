<?php
/* Template Name: Reboot: Archive Insights - ALM */

?>

<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/includes/general/featured-image-slider-tl.php'); ?>


<div id="our-insights" class="pepi-row archive-page archive-page__thought-leadership">
  <div class="container">

    <?php
    $shortcode_filter = get_field('alm_filter_shortcode', 174);
    $shortcode_query = get_field('alm_query_shortcode', 174);

    echo do_shortcode("$shortcode_filter"); ?>

    <?php echo do_shortcode("$shortcode_query"); ?>
  </div>
</div>

<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

<?php get_footer(); ?>
<?php
/* Template Name: Reboot: Events - ALM */

?>

<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/includes/general/featured-image-slider-events.php'); ?>


<div id="events" class="pepi-row archive-page archive-page__events">
  <div class="container">
    <?php
    $shortcode_filter = get_field('alm_filter_shortcode', $post->ID);
    echo do_shortcode("$shortcode_filter");
    ?>
    <div class="row">
      <div class="col-12 px-1">
        <h2 class="section-title">
          All Events
        </h2>
        <div class="short-border mb-5"></div>
      </div>
    </div>
    <?php
    $shortcode_query = get_field('alm_query_shortcode', $post->ID);

    ?>

    <?php echo do_shortcode("$shortcode_query"); ?>
  </div>
</div>

<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>

<?php get_footer(); ?>
<?php
/* Template Name: Reboot: Archive Trends */

?>

<?php get_header(); ?>

<div class="hero-row">
  <div class="row">
    <div class="col-sm-12">
      <div class="hero-image"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/reboot/trends/trends-banner-bg.jpg)">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>

<div id="our-insights" class="pepi-row archive-page archive-page__news">
  <div class="container">

    <?php
    $shortcode_filter = get_field('alm_filter_shortcode', 4649);
    $shortcode_query = get_field('alm_query_shortcode', 4649);

    echo do_shortcode("$shortcode_filter"); ?>

    <?php echo do_shortcode("$shortcode_query"); ?>
  </div>
</div>

<?php include(TEMPLATEPATH . '/includes/general/cta-banner-intelligence.php'); ?>
<?php get_footer(); ?>
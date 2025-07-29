<?php // include 'protect.php';?>
<?php
/*
 * Template Name: Reboot: Deals & Highlights - Original + ALM
 */

?>
<?php get_header(2); ?>
<style>
  .hero-2 {
    width: 100%;
    top: 226px;
    /*    top: 32%;*/
  }

  #section-0 .hero-2 h2 {
    width: 70%;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff;
    padding: 20px 0px;
    margin: 20px auto;
  }

  #section-filter .filter-table.news-table {
    max-width: 100%;
  }

  #section-4 {
    width: 100%;
  }

  .news-block-2 {
    position: relative;
    display: inline-block;
    height: 510px;
    max-height: 510px;
    /*    padding: 13px;*/
  }

  /*
    .news-block-2z {
          position: relative;
  display: inline-block;
            padding: 13px;
    }
*/

  .news-block-feature h1 {
    position: absolute;
    display: block;
    z-index: 100;
    width: 100%;
    font-family: 'Helvetica Neue LT W01_41488878';
    font-size: 24px;
    color: #fff;
    font-weight: bold;
    top: 16%;
    left: 1%;
  }

  .news-block-feature h1 a {
    color: #fff;
  }

  .news-block-2 h4 {
    font-family: 'Helvetica Neue LT W01_41488878';
    color: #474646;
    font-size: 16px;
    padding-left: 20px !important;
    padding-right: 20px !important;
    margin-top: 0px;
    /*text-align: center;*/
    text-align: center;
    /*	text-transform: capitalize;*/
  }

  .news-block-2 h3 {
    font-size: 16px;
  }

  .news-block-2 p {
    line-height: 14px;
  }

  .hero-2 p {
    width: 100% !important;
    line-height: 24px;
    max-width: 1200px;
  }

  p.gle2 {
    font-size: 16px;
    line-height: 18px;
  }

  p.gle2-b br {
    display: none;
  }

  .tl-current a {
    border-bottom: 4px solid #00355F !important;
  }

  .bottomMenu .tl-current a {
    border: none !important;
  }

  .news-block-2 p {
    position: absolute;
    /*    bottom: 15px;*/
    top: 380px;
    margin: 0px auto;
    display: block;
    width: 100%;
  }

  @media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
    .tl-current a {
      border-top: 4px solid #00355f !important;
      background: black;
    }

    .news-block-2 p {
      position: relative;
      top: auto !important;
    }

    #section-0 .hero-2 h2 {
      border-top: 0px solid #fff;
      border-bottom: 0px solid #fff;
    }

    .bottomMenu .tl-current a {
        {
        background: none;
      }
    }
</style>
<style>
  <?php the_field('css');
  ?>
  #section-0
  {
  /*
  width:
  100%;
  position:
  relative;
  max-height:
  650px;
  margin-bottom:
  0px;
  overflow:
  hidden;
  */
  margin-top:
  -50px;
  }
  #section-0 .hero-2 h2,   #section-0 .hero-2 p {

    color: white!important;
}
  .alm-reveal.alm-filters {
    display: flex;
    flex-wrap: wrap;
  }
  .carousel-indicators li {
    border: 0!important;
    border-radius: 50px;

  }
</style>
<div id="section-0" class="home-slider">
  <div class="container-fluid px-0">

    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
      <!-- Overlay -->
      <!--  <div class="overlay"></div>-->

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php

      // The Query
      $slide_q = new WP_Query( array(
        'post_type' => 'deal_highlights',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC' ) );
      $slide_c = 0;
      // The Loop
      if ( $slide_q->have_posts() ) {
        while ( $slide_q->have_posts() ) {
          $slide_q->the_post();
          $postcategory = get_the_category();
          $cat_region = '';
          $cat_pub = '';
          if ( $postcategory ) {
            foreach ( $postcategory as $category ) {
              if ( $category->parent == 5 ) {
                $cat_region = $category->name;
              }
              if ( $category->parent == 3 ) {
                $cat_pub = $category->name;
              }
            }
          }
          ?>
        <div class="carousel-item slides <?php if($slide_c == 0): echo 'active'; endif;?>">
          <div class="slide-news-1" style="background-image:url(<?php the_field('header-image')?>)"></div>

          <div class="hero-2">
            <p class="gle2"><?php echo get_the_date(); ?><br>
              <?php the_field('city'); ?>, <?php the_field('country'); ?>, <?php the_field('region'); ?>
            </p>
            <h2>
              <?php the_field('client'); ?>
            </h2>
            <p class="gle2-b">
              <?php the_field('services'); ?>
            </p>
          </div>
        </div>
        <?php
      $slide_c++;
      }
      } else {
        // no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>
        <!---->

      </div>
      <a class="left carousel-control" href=".carousel" role="button" data-slide="prev"><img
          src="<?php bloginfo('template_directory'); ?>/images/arrow-left.png" border="0" /></span></a><a
        class="right carousel-control" href=".carousel" role="button" data-slide="next"><img
          src="<?php bloginfo('template_directory'); ?>/images/arrow-right.png" border="0" /></span></a>
    </div>
  </div>

</div>

<!--======================================-->
<?php
$oldY = 2018;
$currY = ( int )date( 'Y' );
$yList = array();
for ( $i = $currY; $i >= $oldY; $i-- ) {
  array_push( $yList, $i );
}
?>



<div class="container">
  <div class="section-white not-white">
    <div id="section-4">
      <?php
        $shortcode_filter = get_field('alm_filter_shortcode', $post->ID);
        $shortcode_query = get_field('alm_query_shortcode', $post->ID);

        echo do_shortcode("$shortcode_filter");?>

      <?php echo do_shortcode("$shortcode_query");?>
    </div>
  </div>


</div>
<!--/section-4-->


<!--set pagination anchors below carousel-->

<?php get_footer(8); ?>
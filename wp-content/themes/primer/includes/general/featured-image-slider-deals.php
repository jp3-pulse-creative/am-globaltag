<?php

// The Query
$slide_q = new WP_Query( array(
'post_type' => 'deal_highlights',
'posts_per_page' => 3,
'orderby' => 'date',
'order' => 'DESC' ) );

$slide_c = 0;
// The Loop
if ( $slide_q->have_posts() ) :


?>
<div id="featuredSlider" class="carousel deals slide <?php echo $post->ID;?>" data-ride="carousel">
  <ol class="carousel-indicators d-none">
    <?php while ( $slide_q->have_posts() ) :

      $slide_q->the_post();

             ?>
    <li data-target="#featuredSlider" data-slide-to="<?php echo  $slide_c;?>"
      class="<?php if( $slide_c == 0){echo 'active';}?>"></li>

    <?php   $slide_c ++; endwhile; ?>
  </ol>

  <div class="carousel-inner">
    <?php


            $slide_c = 0;
            // The Loop
            while ( $slide_q->have_posts() ) :
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
                <img src="<?php the_field('header-image')?>" alt="">
                <div class="hero-2">
                  <p><?php echo get_the_date(); ?>
                    <?php the_field('city'); ?>, <?php the_field('country'); ?>, <?php the_field('region'); ?>
                  </p>
                  <hr>
                  <h2>
                    <?php the_field('client'); ?>
                  </h2>
                  <hr>
                  <p class="gle2-b">
                    <?php the_field('services'); ?>
                  </p>
                </div>
              </div>
              <?php
                $slide_c++;
                     endwhile;?>

                 <?php   else:
                        // no posts found
                        ?>

                    <?php endif;

            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
    <!---->
  </div>





  <a class="carousel-control-prev" href="#featuredSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#featuredSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div>
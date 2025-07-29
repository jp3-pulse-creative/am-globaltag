<?php
$featured_posts = get_field('news_featured', $post->ID);

$post_count = 0;
    if( $featured_posts ):

        ?>
    <div id="featuredSlider" class="carousel slide <?php echo $post->ID;?>" data-ride="carousel">
    <ol class="carousel-indicators d-none">
        <?php foreach( $featured_posts as $post ):


            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post);

             ?>
        <li data-target="#featuredSlider" data-slide-to="<?php echo $post_count;?>" class="<?php if($post_count == 0){echo 'active';}?>"></li>

        <?php  $post_count ++; endforeach; ?>
        </ol>

        <div class="carousel-inner">
        <?php $post_count = 0; foreach( $featured_posts as $post ):
        $featured_image = get_field('header-image');

            ?>
        <div class="carousel-item <?php if($post_count == 0){echo 'active';}?>">
        <div class="gradient"></div>
        <img src="<?php echo $featured_image; ?>" class="d-block w-100" alt="<?php echo get_the_title();?>">
        <div class="carousel-caption">
            <h1><?php echo get_the_title();?></h1>
                                <ul>
                                    <li><?php echo get_the_date();?></li>
                                    <li> | <?php $cats = array();
                    foreach (get_the_category($post->ID, 'Regions') as $c) {
                    $cat = get_category($c);
                    array_push($cats, $cat->name);
                    }

                    if (sizeOf($cats) > 0) {
                    $post_categories = implode(', ', $cats);
                    } else {
                    $post_categories = 'Not Assigned';
                    }

                    echo $post_categories;?></li>
                                </ul>
        </div>
        </div>
        <?php  $post_count ++; endforeach; ?>
    </div>

        <?php
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>




     <a class="carousel-control-prev" href="#featuredSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#featuredSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div>
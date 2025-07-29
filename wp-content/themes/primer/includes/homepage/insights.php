<div id="home-insights" class="pepi-row">
    <div class="container mb-5 pb-4 pb-md-0 mb-md-0">
        <div class="row">
            <div class="col-sm-12 px-0">
                <h1 class="section-title">Thought Leadership</h1>
                <div class="short-border"></div>
            </div>
        </div>
        <div class="row mx-flush-30">
            <?php

                    $args = array(
                        'post_type' => 'thought_leadership',
                        'posts_per_page' => 3,
                    );
                    $query = new WP_Query($args);

                    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-md-4">
                <div class="insight-block">
                    <div class="insight-img"
                        style="background-image:url(<?php echo get_field('home-thumb'); ?>)">
                    </div>
                    <h3><?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?></h3>
                    <div class="short-border"></div>
                    <p><?php echo  mb_strimwidth(get_field('home-excerpt'), 0, 120, '...');?></p>
                    <a class="plain-btn" href="<?php echo get_permalink()?>">Read More <i
                            class="fas fa-caret-right"></i></a>
                </div>
            </div>

            <?php endwhile; else : ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12 px-0 d-flex justify-content-md-end">
            <a href="<?php echo site_url();?>/thought-leadership/" class="cta-btn mt-2">
                <div class="cta-inner cta-inner d-flex align-items-center"><span class="arrow_carrot-right"></span><span class="btn-label amblue">Read More</span>
                </div>
            </a>
            </div>
        </div>
    </div>
</div>
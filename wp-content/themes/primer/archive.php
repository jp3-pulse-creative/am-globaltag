<?php
/* Template Name: Archive OG */
?>

<?php get_header(); ?>

<div class="header-slider">
    <div class="h-slide hs-1" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2018/10/amcp_header-e1540497569493.png">
        <div class="amc-wrapper">
            <?php the_field('hero_text'); ?>
        </div>
    </div>
</div>

<?php include(TEMPLATEPATH . 'nav') ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div id="single-post" class="amc-wrapper">
            <div class="col-md-2">
                <div class="amc-social-share">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=">
                        <img src="<?php echo site_url(); ?>/wp-content/themes/bones-master/images/share-icon.svg" alt="Share on Facebook" />
                        <h5>SHARE</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row">

                    <strong> <?php the_author(); ?> | <?php echo get_the_date('m.d.y'); ?></strong>

                    <h1><?php the_title(); ?></h1>

                    <?php the_content(); ?>
                </div>
            </div>
        </div>


    <?php endwhile; // end of the loop. 
    ?>
<?php endif ?>



<?php get_footer(); ?>
<?php

/* Template Name: Flexible Content  */

get_header(); ?>

<?php if (post_password_required()) { ?>
    <br><br><br><br><br><br><br><br><br>
    <div class="password-protected__form" style="margin: 0 auto;display: flex;justify-content: center;align-items: center;">
        <?php echo get_the_password_form(); ?>
    </div>
<?php } else { ?>
    <?php if (have_rows('flexible_content')): ?>

        <?php while (have_rows('flexible_content')): the_row(); ?>

            <?php
            if (get_row_layout()) {
                get_template_part('modules/' . get_row_layout());
            }
            ?>

        <?php endwhile; ?>
    <?php endif; ?>
<?php } ?>

<?php get_footer(); ?>
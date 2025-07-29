<?php get_header(); ?>

<div id="error-404" class="wrapper">
    <div class="hero-row">
    <div class="row">
        <div class="col-sm-12">
            <div class="hero-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/search-header.jpg)">
                <h1>404</h1>
            </div>
        </div>
    </div>
</div>
    <div class="pepi-row">
        <div class="container reduced-container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">Page not found</h1>
                    <div class="short-border"></div>
                    <p><a href="<?php echo site_url(); ?>"/>Return to the homepage.</p></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

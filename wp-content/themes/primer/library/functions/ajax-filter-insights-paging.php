<?php //functon for ajax blog filter
add_action('wp_ajax_myfilter', 'wph_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'wph_filter_function');

function wph_filter_function(){
// $CurrentPage = get_query_var('paged');
//$paged = $_POST['paged'];
//wp_reset_postdata();
if( isset( $_POST['categoryfilter'] ) ){
    $category_post = $_POST['categoryfilter'];
}

if( isset( $_POST['categoryfilter_prod'] ) ){
    $category_product = $_POST['categoryfilter_prod'];
}
if( isset( $_POST['categoryfilter_resource'] ) ){
    $category_resource = $_POST['categoryfilter_resource'];
}
//var_dump($category_post);
//var_dump($category_product);
//var_dump($category_resource);
$tax_query = array('relation' => 'AND');
    if (isset($_POST['categoryfilter']))
    {
                $tax_query[] =  array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $category_post
            );
    }
    if (isset($_POST['categoryfilter_prod']))
    {

                $tax_query[] =  array(
                'taxonomy' => 'cat_product',
                'field' => 'id',
                'terms' => $category_product
            );
    }
    if (isset($_POST['categoryfilter_resource']))
    {

                $tax_query[] =  array(
                'taxonomy' => 'resource',
                'field' => 'id',
                'terms' => $category_resource
            );
    }

   $query = new WP_Query( array(
  'post_type' => 'post',
  'posts_per_page' =>30,
  'orderby' => 'date',
  'order'   => 'DESC',
 'paged' => $CurrentPage,
  'tax_query' => $tax_query,
  )
);
    if( $query->have_posts() ) :

    ob_start();

        while( $query->have_posts() ): $query->the_post();
            ?>
            <?php if( get_field('show_login_only') ): ?>
               <div class="res-entry">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <?php
                                                if ( has_post_thumbnail()) the_post_thumbnail('resource-blog');
                                                ?>
                                            </div>
                                            <div class="col-md-8 blog-details">

                                                                    <a class="related-title" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a>
                                                                    <br>
                                                                    <div class="posted-date">
                                                                    <?php palliance_posted_on_noslash(); ?>
                                                                    </div>
                                                                    <div class="post-less">
                                                                    <?php echo excerpt(20); ?>
                                                                    </div>

                                            </div>
                                        </div>
                </div>

            <?php endif; ?>
            <?php
        endwhile;
        wp_reset_postdata();

        if (  $query->max_num_pages > 1 ) :
            echo '<div id="misha_loadmore">More posts</div>'; // you can use <a> as well
        endif;

        $content = ob_get_contents(); // we pass the posts to variable
        ob_end_clean(); // clear the buffer


        else :
        ob_start(); // start the buffer to capture the output of the template
        include (TEMPLATEPATH .  'template-parts/content', 'none' );
        $content = ob_get_contents(); // pass the output to variable
        ob_end_clean();

    endif;

     echo json_encode( array(
        'posts' => json_encode( $wp_query->query_vars ),
        'max_page' => $wp_query->max_num_pages,
        'found_posts' => $wp_query->found_posts,
        'content' => $content
     ));

    die();
}
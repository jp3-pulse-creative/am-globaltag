<?php
/**
 * Template Name: Search
 */
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
$prepage_url = $escaped_url;
$pg_loc = strpos($escaped_url,"pg=");
if($pg_loc > 0){
  $prepage_url = substr($escaped_url,0,$pg_loc);
}

if(substr($prepage_url, -1) == "/"){
  $prepage_url = $prepage_url . "?";
}

$p_page = ( int )$_GET[ 'pg' ];
$p_s = $_GET[ 's' ];
?>

<?php get_header(); ?>

<div class="hero-row">
    <div class="row">
        <div class="col-sm-12">
            <div class="hero-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/search-header.jpg)">
                <h1>Search</h1>
            </div>
        </div>
    </div>
</div>

<div id="search" class="pepi-row">
    <div class="container">
        <div class="row">
        <div class="col-12 col-md-6 px-0">
        <h3>SEARCH RESULTS FOR "<?php echo $p_s ?>"</h3>
      </div>
      <div class="col-12 col-md-6 px-0 text-right">
        <?php  get_search_form();?>
      </div>
      <div class="col-sm-12 px-0">


            	<div class="search-results">
                    <?php
                    $args_max = array(
                      'post_type' => array('thought_leadership','news', 'events', 'trends' ),
                      's' => $p_s,
                      'year' => $p_year,
                      'posts_per_page' => 999
                    );
                    $max_list = new WP_Query($args_max);
                    $max_count = ( int ) $max_list->found_posts;
                    $max_p = ceil($max_count / 6);
                    $archive_args = array(
                      'post_type' => array('thought_leadership','news', 'events', 'trends' ),
                      's' => $p_s,
                      'posts_per_page' => 6,
                      'offset' => $p_page*6,
                    );
                    $archive_query = new WP_Query( $archive_args );
                    if ( $archive_query->have_posts() ): while ( $archive_query->have_posts() ): $archive_query->the_post();
                    ?>
            		<div class="search-item">
            			<div class="si-img" style="background-image:url(<?php echo get_field('home-thumb'); ?>)">
            			</div>
            			<div class="si-ctn">
                            <div class="si-content">
                				<div class="si-title">
                                    <h3><?php echo get_the_title() ?></h3>
                				</div>
                				<div class="si-text">
                                    <p><?php echo get_the_excerpt() ?></p>
                					<a class="plain-btn" href="<?php echo get_permalink() ?>">READ MORE <i class="fas fa-caret-right"></i></a>
                				</div>
                            </div>
            			</div>
            		</div>
<?php
endwhile;
?>
<div class="col-sm-12">
  <div class="insight-pages">
    <?php if($p_page > 0){ ?>

      <a href="<?php echo $prepage_url ?>&pg=<?php echo $p_page-1 ?>" class="pg-btn"><?php echo $p_page; ?></a>

    <?php } ?>

      <a href="#" class="pg-btn active"><?php echo $p_page+1; ?></a>

    <?php if($p_page+2 <= $max_p){ ?>
      <a href="<?php echo $prepage_url ?>&pg=<?php echo $p_page+1 ?>" class="pg-btn"><?php echo $p_page+2; ?></a>
    <?php } ?>
  </div>
</div>
<?php
else: ?>
                    <div class="search-no">
                        <h2>No Results Found</h2>
                    </div>
<?php
endif;
?>
            	</div>
        	</div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
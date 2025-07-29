<?php
/* Template Name: News & Events  */
get_header(); ?>

<div class="hero-row">
    <div class="row">
        <div class="col-sm-12">
            <div class="hero-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/news-events-bg.jpg)">
                <h1>News & Events</h1>
            </div>
        </div>
    </div>
</div>

<div id="news-events" class="wrapper archive-page">
	<div class="recent-archive recent-news">
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="filter-bar">
<h3 class="text-center">NEWS</h3>

<?php
$oldY = 2018;
$currY = ( int )date( 'Y' );
$yList = array();
for ( $i = $currY; $i >= $oldY; $i-- ) {
  array_push( $yList, $i );
}
?>
<div id="news-filter" class="section-filter" >
  <div class="container">
    <div class="row">
      <div class="filter-table">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td width="123px" align="center" valign="middle">FILTER BY:</td>
              <td width="140px" align="left" valign="middle" class=""><select class="servSel" value="">
                  <option value="" selected="selected">Service</option>
                  <?php
                  $categories = get_categories( array(
                    'orderby' => 'name',
                    'parent' => 18
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class=""><select class="yearSel" value="">
                  <option value="">Year</option>
                  <?php foreach($yList as $year){ ?>
                  <option value="<?php echo $year ?>"><?php echo $year ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class=""><select class="monSel" value="">
                  <option value="">Month</option>
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select></td>
              <!--
              <td width="140px" align="left" valign="middle" class=""><select id="indSel">
                  <option value="" selected="selected">Select Industry</option>
                  <?php
                  $categories = get_categories( array(
                    'orderby' => 'name',
                    'parent' => 247
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>
            -->
              <td class="mob-line" width="105px" align="left" valign="top"><a id="" class="read-btn sel-filter" href="<?php echo get_site_url() ?>/news">Apply</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script>
$('#news-filter select').change(function(){
    var link = "<?php echo get_site_url() ?>/news/?yr=";
    link = link.concat($("#news-filter .yearSel").val());
    link = link.concat('&mon=');
    link = link.concat($("#news-filter .monSel").val());
    //link = link.concat('&industry=');
    //link = link.concat($("#indSel").val());
    link = link.concat('&serv=');
    link = link.concat($("#news-filter .servSel").val());
    $('#news-filter .sel-filter').attr('href',link);
});
</script>
  </div>
</div>

<a class="viewall-btn" href="<?php echo get_site_url() ?>/news">View All <i class="fas fa-caret-right"></i></a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
        <div class="row">
<?php

$cat_search = "";
if ( $p_serv != "" ) { // this has problems
  $cat_search = $p_serv;
}
$args_max = array(
  'post_type' => 'news',
  'category_name' => $cat_search,
  'year' => $p_year,
  'monthnum' => $p_mon,
  'posts_per_page' => 999
);
$max_list = new WP_Query($args_max);
$max_count = ( int ) $max_list->found_posts;
$max_p = ceil($max_count / 3);
$archive_args = array(
  'post_type' => 'news',
  'category_name' => $cat_search,
  'year' => $p_year,
  'monthnum' => $p_mon,
  'posts_per_page' => 3,
  'offset' => $p_page*3,
);
$archive_query = new WP_Query( $archive_args );
if ( $archive_query->have_posts() ): while ( $archive_query->have_posts() ): $archive_query->the_post();
?>
 <div class="col-sm-6 col-md-4">
    <div class="insight-block">
        <div class="insight-img" style="background-image:url(<?php echo get_the_post_thumbnail_url($insight,'post-thumbnail'); ?>)"><span role="img" aria-label="<?php echo get_the_title() ?>"> </span></div>
        <label class="date"><?php echo get_the_date('F d, Y')?></label>
        <h3><?php echo mb_strimwidth(get_the_title(), 0, 75, '...'); ?></h3>
        <div class="short-border"></div>
        <p><?php echo get_the_excerpt() ?></p>
        <a class="plain-btn" href="<?php $outbound = get_field('outbound_link'); $redirect = get_page_link(); if ($outbound) {echo $outbound;} else {echo $redirect;} ?>" target="_blank">Read More <i class="fas fa-caret-right"></i></a>
    </div>
 </div>

 <?php endwhile; ?>

 <? else : ?>
  <div class="col">
    <h1>No entries found.</h1>
  </div>
 <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<hr/>
			</div>
		</div>
	</div>
	<div class="recent-archive recent-events">
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="filter-bar">

<h3 class="text-center">EVENTS</h3>

<?php
$oldY = 2018;
$currY = ( int )date( 'Y' );
$yList = array();
for ( $i = $currY; $i >= $oldY; $i-- ) {
  array_push( $yList, $i );
}
?>
<div id="events-filter" class="section-filter" >
  <div class="container">
    <div class="row">
      <div class="filter-table">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td width="123px" align="center" valign="middle">FILTER BY:</td>
              <td width="140px" align="left" valign="middle" class=""><select class="citySel" value="">
                  <option value="" selected="selected">Location</option>
                  <?php
                  $categories = get_categories( array(
                    'orderby' => 'name',
                    'parent' => 30
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class=""><select class="yearSel" value="">
                  <option value="">Year</option>
                  <?php foreach($yList as $year){ ?>
                  <option value="<?php echo $year ?>"><?php echo $year ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class=""><select class="monSel" value="">
                  <option value="">Month</option>
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select></td>
              <td class="mob-line" width="105px" align="left" valign="top"><a id="" class="read-btn sel-filter" href="<?php echo get_site_url() ?>/events">Apply</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script>
$('#events-filter select').change(function(){
    var link = "<?php echo get_site_url() ?>/events/?yr=";
    link = link.concat($("#events-filter .yearSel").val());
    link = link.concat('&city=');
    link = link.concat($("#events-filter .citySel").val());
    link = link.concat('&mon=');
    link = link.concat($("#events-filter .monSel").val());
    $('#events-filter .sel-filter').attr('href',link);
});
</script>
  </div>
</div>


<a class="viewall-btn" href="<?php echo get_site_url() ?>/events">View All <i class="fas fa-caret-right"></i></a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
        <div class="row">
<?php

$cat_search = "";
if ( $p_city != "" ) {
  $cat_search = $p_city;
}
$args_max = array(
  'post_type' => 'event',
  'category_name' => $cat_search,
  'posts_per_page' => 999,
  'year'  => $p_year,
  'monthnum' => $p_mon,
);
$max_list = new WP_Query($args_max);
$max_count = ( int ) $max_list->found_posts;
$max_p = ceil($max_count / 3);
$archive_args = array(
  'post_type' => 'event',
  'category_name' => $cat_search,
  'year'  => $p_year,
  'monthnum' => $p_mon,
  'posts_per_page' => 3,
  'offset' => $p_page*3,
  'order' => 'DESC',
  'orderby' => 'meta_value_num',
  'meta_key' => 'date_of_event',
);
$archive_query = new WP_Query( $archive_args );
if ( $archive_query->have_posts() ): while ( $archive_query->have_posts() ): $archive_query->the_post();

$parent_term_id = 30; // term id of locations
$taxonomies = array(
    'category',
);
$parent_args = array(
    'parent'         => $parent_term_id,
    // 'child_of'      => $parent_term_id,
);
$terms = get_terms($taxonomies, $parent_args);
$term = $terms[0];
?>
 <div class="col-sm-6 col-md-4">
    <div class="insight-block">
        <div class="insight-img" style="background-image:url(<?php echo get_the_post_thumbnail_url($insight,'post-thumbnail'); ?>)"> <span role="img" aria-label="<?php echo get_the_title() ?>"> </span></div>
        <label class="date"><?php
        if(get_field('display_date')){
          echo get_field('display_date');
        }else if(get_field('date_of_event')){
          echo get_field('date_of_event');
        }else{
          echo get_the_date('F d, Y');
        }
        ?></label>
        <h3><?php echo mb_strimwidth(get_the_title(), 0, 80, '...'); ?></h3>
        <div class="short-border"></div>
        <p><?php echo get_field('location') ?></p>
        <a class="plain-btn" href="<?php $outbound = get_field('outbound_link'); $redirect = get_page_link(); if ($outbound) {echo $outbound;} else {echo $redirect;} ?>" target="_blank">See Event <i class="fas fa-caret-right"></i></a>
    </div>
 </div>

 <?php endwhile; ?>

 <? else : ?>
  <div class="col">
    <h1>No entries found.</h1>
  </div>
 <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
	</div>
</div>
<?php get_footer(); ?>
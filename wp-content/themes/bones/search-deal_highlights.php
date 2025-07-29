<?php
/*
 Template Name: Search Deal Highlights
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/

$p_year = ( int )$_GET[ 'yr' ];
$p_serv = $_GET[ 'serv' ];
$p_industry = $_GET[ 'industry' ];
$p_country = $_GET[ 'country' ];
$p_reg = $_GET[ 'region' ];
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
  height:510px;
  max-height:510px;
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
.news-block-feature h1 a{
  color:#fff;
}
.news-block-2 h4 {
	font-family: 'Helvetica Neue LT W01_41488878';
	color: #474646;
	font-size: 16px;
	padding-left: 20px !important;
	padding-right: 20px !important;
	margin-top: 0px;
	/*text-align: center;*/
	text-align: center;/*	text-transform: capitalize;*/
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

/*
h5 .sd:last-child {
  display:none;
}
*/

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
.tl-current a {
	border-top: 4px solid #00355f !important;
	background: black;
}
      .news-block-2 p {
    position: relative;
          top: auto !important;
}
.bottomMenu .tl-current a {
{
background:none;
}
}
</style>

<div id="section-0" class="home-slider">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
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
      <div class="item slides <?php if($slide_c == 0): echo 'active'; endif;?>">
        <div class="slide-news-1" style="background-image:url(<?php the_field('header-image')?>)"></div>
    
        <div class="hero-2">
          <p class="gle2"><?php echo get_the_date(); ?><br>
            <?php the_field('city'); ?>,  <?php the_field('country'); ?>,  <?php the_field('region'); ?>
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
    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-left.png" border="0" /></span></a><a class="right carousel-control" href=".carousel" role="button" data-slide="next"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.png" border="0" /></span></a></div>
</div>
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
<div id="section-filter" >
  <div class="container">
    <div class="row">
      <div class="filter-table desktop-table">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td width="123px" align="center" valign="middle">FILTER BY:</td>
              <td width="140px" align="left" valign="middle" class="mob-w50"><select id="yearSel">
                  <option value="">Select Year</option>
                  <?php foreach($yList as $year){ ?>
                  <option value="<?php echo $year ?>"><?php echo $year ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class="mob-w50"><select id="servSel">
                  <option value="" selected="selected">Select Service</option>
                  <?php
                  $categories = get_categories( array(
                    'orderby' => 'name',
                    'parent' => 244
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class="mob-w50"><select id="indSel">
                  <option value="" selected="selected">Select Industry</option>
                  <?php
                  $categories = get_categories( array(
                    'orderby' => 'name',
                    'parent' => 441
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class="mob-w50"><select id="countrySel">
                  <option value="" selected="selected">Select Country</option>
                  <?php
                  $categories = get_categories( array(
                    'orderby' => 'name',
                    'parent' => 250
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>
              <!--<td width="140px" align="left" valign="middle" class="mob-w50"><select id="regionSel">
                  <option value="" selected="selected">Select Region</option>
                  <?php
                  $categories = get_categories( array(
                    'orderby' => 'name',
                    'parent' => 311
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>-->
              <td width="105px" align="left" valign="top"><a id="sel-filter" href="<?php echo get_site_url() ?>/deal-highlights">APPLY</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="panel-group">
        <div id="news-top"></div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a class="panel-toggle collapsed" data-toggle="collapse" data-parent="#deal-highlights-top" href="#content1"> <span style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">Filter</span></a></h4>
          </div>
          <!-- /.panel-heading -->
          <div id="content1" class="panel-collapse collapse collapsed">
            <div class="panel-body">
              <div class="filter-table">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td width="123px" align="center" valign="middle">FILTER BY:</td>
                      <td width="140px" align="left" valign="middle" class="mob-w50"><select id="yearSel">
                          <option value="">Select Year</option>
                          <?php foreach($yList as $year){ ?>
                          <option value="<?php echo $year ?>"><?php echo $year ?></option>
                          <?php } ?>
                        </select></td>
                      <td width="140px" align="left" valign="middle" class="mob-w50"><select id="servSel">
                          <option value="" selected="selected">Select a Service</option>
                          <?php
                          $categories = get_categories( array(
                            'orderby' => 'name',
                            'parent' => 244
                          ) );
                          foreach ( $categories as $category ) {
                            ?>
                          <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                          <?php } ?>
                        </select></td>
                      <td width="140px" align="left" valign="middle" class="mob-w50"><select id="indSel">
                          <option value="" selected="selected">Select Industry</option>
                          <?php
                          $categories = get_categories( array(
                            'orderby' => 'name',
                            'parent' => 441
                          ) );
                          foreach ( $categories as $category ) {
                            ?>
                          <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                          <?php } ?>
                        </select></td>
                      <td width="140px" align="left" valign="middle" class="mob-w50"><select id="countrySel">
                          <option value="" selected="selected">Select Country</option>
                          <?php
                          $categories = get_categories( array(
                            'orderby' => 'name',
                            'parent' => 250
                          ) );
                          foreach ( $categories as $category ) {
                            ?>
                          <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                          <?php } ?>
                        </select></td>
                      <td width="140px" align="left" valign="middle" class="mob-w50"><select id="regionSel">
                          <option value="" selected="selected">Region</option>
                          <?php
                          $categories = get_categories( array(
                            'orderby' => 'name',
                            'parent' => 311
                          ) );
                          foreach ( $categories as $category ) {
                            ?>
                          <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                          <?php } ?>
                        </select></td>
                      <td width="105px" align="left" valign="top"><a id="sel-filter" href="<?php echo get_site_url() ?>/deal-highlights">APPLY</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="divider-blue"></div>
    </div>
    <script>
$('#section-filter select').change(function(){
	var link = "<?php echo get_site_url() ?>/search-deal-highlights?region=";
	link = link.concat($("#regionSel").val());
	link = link.concat('&country=');
	link = link.concat($("#countrySel").val());
	link = link.concat('&industry=');
    link = link.concat($("#indSel").val());
	link = link.concat('&serv=');
	link = link.concat($("#servSel").val());
	link = link.concat('&yr=');
	link = link.concat($("#yearSel").val());
	$('#sel-filter').attr('href',link);
});
$('#section-filter .panel-group select').change(function(){
	var link = "<?php echo get_site_url() ?>/search-deal-highlights?region=";
	link = link.concat($(".panel-group #regionSel").val());
	link = link.concat('&country=');
	link = link.concat($(".panel-group #countrySel").val());
	link = link.concat('&industry=');
	link = link.concat($(".panel-group #indSel").val());
	link = link.concat('&serv=');
	link = link.concat($(".panel-group #servSel").val());
	link = link.concat('&yr=');
	link = link.concat($(".panel-group #yearSel").val());
	$('.panel-group #sel-filter').attr('href',link);
});
</script> 
  </div>
</div>
<!--======================================-->
<div class="container">
<div class="section-white not-white">
  <div id="section-4" class="row">
    <h2 class="inner">Deal Highlights:</h2>
    <h5>
      <?php
      if ( $p_year != '' ) {
        echo '<span class="ry">Year:</span> ' . $p_year . '&nbsp;&nbsp;&nbsp;';
      }

      $serv_name = get_category_by_slug( $p_serv );
      $serv_name = $serv_name->name;
      if ( $serv_name != '' ) {
        echo '<span class="ry">Service:</span> ' . $serv_name . '&nbsp;&nbsp;&nbsp;';
      }

      $industry_name = get_category_by_slug( $p_industry );
      $industry_name = $industry_name->name;
      if ( $industry_name != '' ) {
        echo '<span class="ry">Industry:</span> ' . $industry_name . '&nbsp;&nbsp;&nbsp;';
      }

      $country_name = get_category_by_slug( $p_country );
      $country_name = $country_name->name;
      if ( $country_name != '' ) {
        echo '<span class="ry">Country:</span> ' . $country_name . '&nbsp;&nbsp;&nbsp;';
      }

      $reg_name = get_category_by_slug( $p_reg );
      $reg_name = $reg_name->name;
      if ( $reg_name != '' ) {
        echo '<span class="ry">Region:</span> ' . $reg_name . '&nbsp;&nbsp;&nbsp;';
      }
      ?>
    </h5>
    <p class="landing"></p>
    <!--==========================================================--> 
    
    <!--    'category_name' => $parent->slug, $term->slug--> 
    
    <!--
$p_year = ( int )$_GET[ 'yr' ];
$p_serv = $_GET[ 'serv' ];
$p_industry = $_GET[ 'industry' ];
$p_country = $_GET[ 'country' ];
$p_reg = $_GET[ 'region' ];
-->
    <?php

    $cat_search = "";
    if ( $p_reg != "" ) {
      $cat_search = $p_reg;
    } elseif ( $p_country != "" ) {
      $cat_search = $cat_search . "," . $p_country;
    }
    elseif ( $p_industry != "" ) {
      $cat_search = $cat_search . "," . $p_industry;
    }
    elseif ( $p_serv != "" ) {
      $cat_search = $cat_search . "," . $p_serv;
    }

    $archive_args = array(
      'post_type' => 'deal_highlights',
      'category_name' => $cat_search,
      'year' => $p_year,
      'posts_per_page' => 100,
    );
    $archive_query = new WP_Query( $archive_args );
    if ( $archive_query->have_posts() ): while ( $archive_query->have_posts() ): $archive_query->the_post();
    ?>
    <div class="col-sm-6 col-md-4">
      <div class="news-block-2 ms">
        <div class="news-block-feature"><a href="<?php the_field('source')?>">
          <h1>
            <?php the_field('client'); ?>
          </h1>
          <img src="<?php the_field('home-thumb'); ?>"/></a></div>
  <div class="news-block-2z">
          <div class="date"><?php echo get_the_date(); ?> /
            <?php if( get_field('city') ): ?>
            <?php the_field('city'); ?>
            <?php endif; ?>
          </div>
          <h3><?php the_field('client2'); ?></h3>
          <p><strong>Subindustries: </strong><br>
            <?php the_field('subindustries'); ?><br><br>
            <strong>Services Provided: </strong><br>
            <?php the_field('services'); ?>
            </p>
        </div>
      </div>
    </div>
    
    <!--/-->
    
    <?php endwhile; ?>
  </div>
  <!--/section-4--> 
</div>
</div>
<?php else : ?>
<article id="post-not-found" class="hentry cf">
  <header class="article-header">
    <h1>
      <?php _e( 'No Posts Found', 'bonestheme' ); ?>
    </h1>
  </header>
  <section class="entry-content">
    <p>Try searching for something else or head <a href="<?php echo get_site_url() ?>/deal-highlights">back.</a></p>
    <h5><a href="<?php echo get_site_url() ?>/deal-highlights">Back to Deal Highlights</a></h5>
  </section>
</article>
</div>
<!--/section-4-->
</div>
<?php endif; ?>

<!--set pagination anchors below carousel--> 
<script type="text/javascript">
$(document).ready(function() {
    $('.pagination li a').each(function(i,a){$(a).attr('href',$(a).attr('href')+'#deal-highlights-top')});
});
</script>
<?php get_footer(8); ?>

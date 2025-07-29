<?php
/*
 Template Name: Search In The Bunker 2020
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
$p_month = $_GET[ 'month' ];
$p_topic = $_GET[ 'topic' ];
?>
<?php get_header(2); ?>
<style>
.hero-2 {
	width: 100%;
    top: 226px;
    text-align: left !important;
/*    top: 32%;*/
}
	.hero-2 img {
        position: relative;
        display: inline-block;
        max-width: 100%;
    }
    .carousel-control {
    margin-top: 100px;
}
#section-0 .hero-2 h2 {
	width: 100%;
	max-width: 1200px;
	padding: 20px 40px;
	margin: 20px auto;
	text-align: left !important;
}
#section-filter .filter-table.news-table {
	max-width: 100%;
}
	.filter-table select {
		width: 90%;
	}
#section-4 {
	width: 100%;
	padding-bottom: 30px;
}
.news-block-2 {
	position: relative;
	display: inline-block;
	background-color: transparent;
	height: auto;
}
	.news-block-2 .date {
		text-align: initial;
		padding-left: 0;
		color: #002B49;
	}
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
.hero-2 p {
	width: 100% !important;
    line-height: 24px;
    max-width: 1200px;
    text-align: left !important;
    padding-right:40px;
    padding-left: 40px;
    font-size: 18px;
    text-transform: none;
}
p.gle2 {
	font-size: 16px;
	line-height: 18px;
	text-align: left !important;
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
	#itb-content {
      position: relative;
        display: inline-block;
        width: 80%;
        height: auto;
        text-align: center;
        margin: 0px auto;
    }
    
   #itb-content h2 {
       font-family: "Helvetica Neue LT W01_65 Md";
        text-align: left;
        color: #002B49;
        font-style: bold;
            padding-left: 0px !important;
padding-right: 0px !important;
    } 
    #itb-content p {
  text-align: left !important;
        color: #002B49;
        padding-left: 0px !important;
padding-right: 0px !important;
        line-height: 18px;
    }
/*iPad*/
   @media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
    #section-0 {
    margin-top: 28px;
}
    #itb-content {
    margin: -42px auto 0px auto;
}
    
    .hero-2 h2 {
        font-size: 30px;
    }
    .hero-2 p {
    width: 100% !important;
}
    .darkness {
        display: none;
    }
    
    }
    
/*phone*/

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
    #section-0 {
    max-height: 400px;
}
    .darkness {
    top: -10px;
}
.tl-current a {
	border-top: 4px solid #00355f !important;
	background: black;
}
    
    .hero-2 p {
    text-align: left !important;
    font-size: 12px !important;
            line-height: 18px;
        padding-right: 20px;
padding-left: 20px;
}
    p.gle2 {
margin-top: 135px;
}
    #section-0 .hero-2 h2 {
        font-size: 18px !important;
    max-width: 100%;
padding: 2px 20px;
        margin: 0px 0px 20px 0px;
}
    #itb-content h2 {
    margin-top: 0px;
}
    #itb-content p {
    padding-bottom: 20px;
}
    
.bottomMenu .tl-current a {
background:none;
}
}
</style>
<style>
<?php the_field('css');
?>
</style>
<div id="section-0" class="home-slider">
  <div class="darkness"></div>
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-news-1" style="background-image:url(<?php echo get_site_url(); ?>/wp-content/themes/bones/images/banner-inthebunker.jpg)"></div>
    
        <div class="hero-2">
          <p class="gle2">VIDEO SERIES
          </p>
          <h2>
               <img src="<?php bloginfo(template_directory) ?>/images/inthebunker-1.png" alt="">
          </h2>
          <p class="gle2-b">
        Through the “In The Bunker with A&amp;M” video series, Alvarez &amp; Marsal Global Transaction Advisory Group’s Global Practice Leader Paul Aversano, along with European Practice Leader Antonio Alvarez III, share insights on the Coronavirus crisis, giving an “inside” look at the firm and how it’s operating during this time – from the impact on the day-to-day business at A&amp;M, what the firm’s leaders are seeing across the global economies, and their real time reactions to the various shifting situations around the world.
          </p>
        </div>
     </div>
    </div>
</div>
</div>

<!--======================================-->
<?php
	  $oldY = 2020;
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
                  <option value"">Select Year</option>
                  <?php foreach($yList as $year){ ?>
                  <option value="<?php echo $year ?>"><?php echo $year ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class="mob-w50"><select id="monthSel">
                  <option value="" selected="selected">Select Month</option>
                  <?php
                  $categories = get_categories( array(
					  'orderby' => 'ID',
					  'order' => 'DESC',
					  'parent' => 325,
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>
              <td width="140px" align="left" valign="middle" class="mob-w50"><select id="topicSel">
                  <option value="" selected="selected">Select Topic</option>
                  <?php
                  $categories = get_categories( array(
                    'orderby' => 'name',
                    'parent' => 219
                  ) );
                  foreach ( $categories as $category ) {
                    ?>
                  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                  <?php } ?>
                </select></td>
              <td width="105px" align="left" valign="top"><a id="sel-filter" href="<?php echo get_site_url() ?>/search-in-the-bunker-2020?yr=<?php echo $currY ?>">APPLY</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="panel-group">
        <div id="news-top"></div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a class="panel-toggle collapsed" data-toggle="collapse" data-parent="#deal-highlights-top" href="#content1"><span style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">Filter</span></a></h4>
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
                          <?php foreach($yList as $year){ ?>
                          <option value="<?php echo $year ?>"><?php echo $year ?></option>
                          <?php } ?>
                        </select></td>
                      <td width="140px" align="left" valign="middle" class="mob-w50"><select id="monthSel">
						  <option value="" selected="selected">Select Month</option>
						  <?php
						  $categories = get_categories( array(
							  'orderby' => 'ID',
							  'order' => 'DESC',
							  'parent' => 325,
						  ) );
						  foreach ( $categories as $category ) {
							?>
						  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
						  <?php } ?>
						</select></td>
					  <td width="140px" align="left" valign="middle" class="mob-w50"><select id="topicSel">
						  <option value="" selected="selected">Select Topic</option>
						  <?php
						  $categories = get_categories( array(
							'orderby' => 'name',
							'parent' => 219
						  ) );
						  foreach ( $categories as $category ) {
							?>
						  <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
						  <?php } ?>
						</select></td>
                      <td width="105px" align="left" valign="top"><a id="sel-filter" href="<?php echo get_site_url() ?>/search-in-the-bunker-2020?yr=<?php echo $currY ?>">APPLY</a></td>
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
	var link = "<?php echo get_site_url() ?>/search-in-the-bunker-2020?yr=";
	link = link.concat($("#yearSel").val());
	link = link.concat('&month=');
	link = link.concat($("#monthSel").val());
	link = link.concat('&topic=');
    link = link.concat($("#topicSel").val());
	$('#sel-filter').attr('href',link);
});
$('#section-filter .panel-group select').change(function(){
	var link = "<?php echo get_site_url() ?>/search-in-the-bunker-2020?yr=";
	link = link.concat($("#yearSel").val());
	link = link.concat('&month=');
	link = link.concat($("#monthSel").val());
	link = link.concat('&topic=');
    link = link.concat($("#topicSel").val());
	$('.panel-group #sel-filter').attr('href',link);
});
</script>
  </div>
</div>
<!--======================================-->

<div class="col-md-12 section-white not-white">
  <div id="section-4" class="row">
    <h2 class="inner">In The Bunker:</h2>
    <h5>
      <?php
      if ( $p_year != '' ) {
        echo '<span class="ry">Year:</span> ' . $p_year . ' <span class="sd">/</span> ';
      }

      $month = get_category_by_slug( $p_month );
      $month = $month->name;
      if ( $month != '' ) {
        echo '<span class="ry">Service:</span> ' . $month . ' <span class="sd">/</span> ';
      }

      $topic_name = get_category_by_slug( $p_topic );
      $topic_name = $topic_name->name;
      if ( $topic_name != '' ) {
        echo '<span class="ry">Industry:</span> ' . $topic_name . ' <span class="sd">/</span> ';
      }
      ?>
    </h5>
    <p class="landing"></p>
    <!--==========================================================--> 
    
    <?php
    $cat_search = "";
    if ( $p_month != "" ) {
      $cat_search = $p_month;
    } 
	  elseif ( $p_topic != "" ) {
      $cat_search = $cat_search . "," . $p_topic;
    }

    $archive_args = array(
      'post_type' => 'in_the_bunker_2020',
      'category_name' => $cat_search,
      'year' => $p_year,
      'posts_per_page' => 100,
    );
    $archive_query = new WP_Query( $archive_args );
    if ( $archive_query->have_posts() ): while ( $archive_query->have_posts() ): $archive_query->the_post();
    ?>
    <div class="col-sm-6 col-md-4">
      <div class="news-block-2 ms">
		<div class="news-block-feature">
			<a href="<?php echo get_permalink() ?>"><img src="<?php the_field('home-thumb'); ?>"/></a>
		</div>
        <div class="news-block-2z">
			<a href="<?php echo get_permalink() ?>"><div class="date">
			<?php echo the_title(); ?><br>
			<?php echo get_the_date(); ?>
			</div></a>
		</div>
      </div>
    </div>
    
    <!--/-->
    
    <?php endwhile; ?>
  </div>
  <!--/section-4-->
</div>
<div class="pagination-bottom">
  <?php bones_page_navi(); ?>
</div>
<?php else : ?>
<article id="post-not-found" class="hentry cf">
  <header class="article-header">
    <h1>
      <?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?>
    </h1>
  </header>
  <section class="entry-content">
    <p>
      <?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
    </p>
  </section>
  <footer class="article-footer">
    <p>
      <?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?>
    </p>
  </footer>
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

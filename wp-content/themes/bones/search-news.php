<?php
/*
 Template Name: Search News
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: https://codex.wordpress.org/Page_Templates
*/

$p_reg = $_GET['region'];
$p_pub = $_GET['pub'];
$p_mon = $_GET['mon'];
$p_year = (int) $_GET['yr'];
?>

<?php get_header(2); ?>
	<style>
		.news-current a{border-bottom: 4px solid #00355F !important;}
.bottomMenu .news-current a{border: none !important;}
		  .archive-news-block {
/*
    position: absolute;
    left: 50%;
    transform: translate(-50%, 0);
    width: 100%;
    padding: 0px 20px;
    bottom: 50px;
*/
}
        .news-block-2 .date {
            font-size: 10px;
            padding-left: 5px;
            padding-right: 5px;
        }
		
		@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {
	
	.news-current a{border-top: 4px solid #00355f !important;background:black;}
	.bottomMenu .news-current a{{background:none;}
	
		}
		</style>
		
<div id="section-0" class="home-slider">
	<div class="darkness"></div>
	
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
      
      <div class="item slides active">
          
        <div class="slide-news-1" style="background-image:url(<?php echo get_site_url(); ?>/wp-content/uploads/2019/08/8-1-2019.jpg)"></div>
        <a href="https://www.bloomberg.com/news/audio/2019-08-01/gm-earnings-streaming-video-on-demand-war-podcast" target="_blank"> 
            <div class="hero-2">
                <h2>GM Earning, Streaming Video-on-Demand War (Podcast)</h2>
                <p>August 1, 2019  | North America</p>
            </div>
        </a>
          
      </div>
    <!---->

    <div class="item slides">

        <div class="slide-news-1" style="background-image:url(<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/5-28-2019.jpg)"></div>
        <a href="https://www.themiddlemarket.com/list/8-advisors-urge-closing-deals-while-economy-stays-strong" target="_blank"> 
            <div class="hero-2">
                <h2>8 M&A Advisors Urge Closing Deals Now, While Economy Stays Strong</h2>
                <p>May 28, 2019  | North America</p>
            </div>
        </a>

    </div>
    <!---->

    <div class="item slides">

        <div class="slide-news-1" style="background-image:url(<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/5-16-2019.jpg)"></div>
        <a href="<?php echo get_site_url(); ?>/redirection-vortex/" target="_blank"> 
            <div class="hero-2">
                <h2>The ‘Vortex of Volatility’ and the Merger Market</h2>
                <p>May 16, 2019  | North America</p>
            </div>
        </a>

    </div>
    <!---->

</div> 
  <a class="left carousel-control" href=".carousel" role="button" data-slide="prev"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-left.png" border="0" /></span>
 </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.png" border="0" /></span>
 </a>
</div>
</div>


<!--======================================-->	
<?php
$oldY = 2014;
$currY = (int) date('Y');
$yList = array();
for($i=$currY;$i>=$oldY;$i--){
	array_push($yList,$i);
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
      <td width="140px" align="left" valign="middle" class="mob-w50"> 
   <select id="regionSel">
    <option value="" selected="selected">Region</option>
	<?php 
	$categories = get_categories( array(
	'orderby' => 'name',
	'parent'  => 5
	) );
	foreach ($categories as $category){ ?>
	<option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
	<?php } ?>
</select>
     </td>
	 <td width="140px" align="left" valign="middle" class="mob-w50"> 
   <select id="pubSel">
    <option value="" selected="selected">Select a Publication</option>
	<?php 
	$categories = get_categories( array(
	'orderby' => 'name',
	'parent'  => 3
	) );
	foreach ($categories as $category){ ?>
	<option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
	<?php } ?>
</select>
     </td>
      <td width="140px" align="left" valign="middle" class="mob-w50">
      <select id="monSel">
	<option value="" selected="selected">Month</option>
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
      <td width="140px" align="left" valign="middle" class="mob-w50">
      <select id="yearSel">
	<?php foreach($yList as $year){ ?>
	<option value="<?php echo $year ?>"><?php echo $year ?></option>   
	<?php } ?>
</select></td>
		<td width="105px" align="left" valign="top">
			<a id="sel-filter" href="<?php echo get_site_url() ?>/search-news?yr=<?php echo $currY ?>">APPLY</a>
		</td>
    </tr>
  </tbody>
</table>
		</div>

<div class="panel-group">

	<div id="news-top"></div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a class="panel-toggle collapsed" data-toggle="collapse" data-parent="#news-top" href="#content1">
<span style="border-bottom: solid 3px #082F47 !important; padding-bottom: 10px !important;">Filter</span></a></h4>
</div>
<!-- /.panel-heading -->
<div id="content1" class="panel-collapse collapse collapsed">
<div class="panel-body">

<div class="filter-table">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="123px" align="center" valign="middle">FILTER BY:</td>
      <td width="140px" align="left" valign="middle" class="mob-w50"> 
   <select id="regionSel">
    <option value="" selected="selected">Region</option>
	<?php 
	$categories = get_categories( array(
	'orderby' => 'name',
	'parent'  => 5
	) );
	foreach ($categories as $category){ ?>
	<option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
	<?php } ?>
</select>
     </td>
	 <td width="140px" align="left" valign="middle" class="mob-w50"> 
   <select id="pubSel">
    <option value="" selected="selected">Select a Publication</option>
	<?php 
	$categories = get_categories( array(
	'orderby' => 'name',
	'parent'  => 3
	) );
	foreach ($categories as $category){ ?>
	<option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
	<?php } ?>
</select>
     </td>
      <td width="140px" align="left" valign="middle" class="mob-w50">
      <select id="monSel">
	<option value="" selected="selected">Month</option>
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
      <td width="140px" align="left" valign="middle" class="mob-w50">
      <select id="yearSel">
	<?php foreach($yList as $year){ ?>
	<option value="<?php echo $year ?>"><?php echo $year ?></option>   
	<?php } ?>
</select></td>
		<td width="105px" align="left" valign="top">
			<a id="sel-filter" href="<?php echo get_site_url() ?>/search-news?yr=<?php echo $currY ?>">APPLY</a>
		</td>
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
	var link = "<?php echo get_site_url() ?>/search-news?region=";
	link = link.concat($("#regionSel").val());
	link = link.concat('&pub=');
	link = link.concat($("#pubSel").val());
	link = link.concat('&mon=');
	link = link.concat($("#monSel").val());
	link = link.concat('&yr=');
	link = link.concat($("#yearSel").val());
	$('#sel-filter').attr('href',link);
});
$('#section-filter .panel-group select').change(function(){
	var link = "<?php echo get_site_url() ?>/search-news?region=";
	link = link.concat($(".panel-group #regionSel").val());
	link = link.concat('&mon=');
	link = link.concat($(".panel-group #monSel").val());
	link = link.concat('&yr=');
	link = link.concat($(".panel-group #yearSel").val());
	$('.panel-group #sel-filter').attr('href',link);
});
</script>

</div>
</div>
	<!--======================================-->	

				
	<div class="col-md-12 section-white not-white">				
<div id="section-4" class="row">
	<h2 class="inner">PRESS &amp; MEDIA:</h2>
	<h5><?php 
	$reg_name = get_category_by_slug($p_reg);
	$reg_name = $reg_name->name;
	if($reg_name != ''){
		echo '<span class="ry">Region:</span> ' . $reg_name . ' <span class="sd">/</span> '; 
	}
	
	$pub_name = get_category_by_slug($p_pub);
	$pub_name = $pub_name->name;
	if($pub_name != ''){
		echo '<span class="ry">Publication:</span> ' . $pub_name . ' <span class="sd">/</span> '; 
	}
	
	if($p_mon != ''){
		$pm_t = date('F', strtotime("2012-$p_mon-01"));
		echo '<span class="ry">Month:</span> ' . $pm_t . ' <span class="sd">/</span> '; 
	}
	
	if($p_year != ''){
		echo '<span class="ry">Year:</span> ' . $p_year;
	}?></h5>
		<p class="landing"></p>

	<?php 
	$cat_name = '';
	if($p_reg != ''){
		$cat_name.= $p_reg;
		if($p_pub != ''){
			$cat_name.= '+'.$p_pub;
		}
	}else if($p_pub != ''){
		$cat_name.= $p_pub;
	}
	$archive_args = array(
		'post_type' => 'news',
		'category_name' => $cat_name,
		'year' => $p_year,
		'monthnum'=> $p_mon,
		'posts_per_page' => 300,
	);
	$archive_query = new WP_Query($archive_args);
	if ($archive_query->have_posts()) : while ($archive_query->have_posts()) : $archive_query->the_post(); ?>

<div class="col-sm-6 col-md-4">
	<div class="news-block-2 ms">
		<a href="<?php the_field('news-post-source'); ?>" target="_blank"><div class="news-block-feature"><img src="<?php the_field('home-thumb'); ?>"/></div></a>
		<div class="date"><?php echo get_the_date(); ?> / <?php
		$postcategory = get_the_category();
		$cat_region = '';
		$cat_pub = '';
		$cat_slash = ' ';
		if ($postcategory) {
			foreach($postcategory as $category) {
				if($category->parent == 5){
					$cat_region = $category->name;
				}
				if($category->parent == 3){
					$cat_pub = $category->name;	
				}
			}
		}
		if($cat_region && $cat_pub != ''){ $cat_slash = ' / ';}
		echo $cat_region . $cat_slash . $cat_pub;
		?>
		</div>
<a href="<?php the_field('news-post-source'); ?>" target="_blank">
    
   <h3><?php //the_field('header-title'); ?>
<?php
	$post_content = get_the_title();
	if(strlen($post_content) > 70){
		echo substr($post_content,0,67) . '...';
	}else{
		echo $post_content;
	}
	?>
    </h3>
        
        </a>
		<p><?php the_field('home-excerpt'); ?>
		<br>
		<a class="excerpt" href="<?php the_field('news-post-source'); ?>" target="_blank"> Read More <i class="fas fa-caret-right"></i> </a></p>
	</div>
	</div>

<!--/-->


		<?php endwhile; ?>
</div>
<!--/section-4-->
</div>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'No Posts Found', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p>Try searching for something else or head <a href="<?php echo get_site_url() ?>/news">back.</a></p>
											<h5><a href="<?php echo get_site_url() ?>/news">Back to Press &amp; Media</a></h5>
										</section>
									</article>

</div>
<!--/section-4-->
</div>
							<?php endif; ?>

<!--set pagination anchors below carousel-->
				<script type="text/javascript">
$(document).ready(function() {
    $('.pagination li a').each(function(i,a){$(a).attr('href',$(a).attr('href')+'#news-top')});
});
</script>		


<?php get_footer(8); ?>

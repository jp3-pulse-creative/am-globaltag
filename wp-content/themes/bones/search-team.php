<?php
/*
 Template Name: Search Team
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

$p_reg = $_GET['region'];
$p_mon = $_GET['mon'];
?>

<?php get_header(2); ?>
	<style>
		.events-current a{border-bottom: 4px solid #00355F !important;}
.bottomMenu .events-current a{border: none !important;}
		
		
		@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {
	
	.events-current a{border-top: 4px solid #00355f !important;background:black;}
	.bottomMenu .events-current a{background:none}
	
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
      
            <div class="slide-events-1"></div>
        <a href="http://www.am-tag.com/events/india-annual-private-equity-dinner-11292017/"> 
      <div class="hero-2">
  <h2 style="color:#fff !important;">India Annual Private Equity Dinner</h2>
		  <p style="color:#fff !important;">November 29, 2017  |  Mumbai, India </p>
	</div>
	   </a>
    
    </div>
<!---->
 
   <div class="item slides">
      
            <div class="slide-events-2"></div>
        <a href="http://www.am-tag.com/events/stockholm-office-opening-09192017"> 
      <div class="hero-2">
  <h2 style="color:#fff !important;">Alvarez & Marsal Stockholm Office Opening</h2>
		  <p style="color:#fff !important;">September 19, 2017  |  Stockholm, Sweden</p>
	</div>
	   </a>
    
    </div>
<!---->
 
 <div class="item slides">
      <div class="slide-events-3"></div>
       <a href="http://www.am-tag.com/events/nyc-backtobusiness-09122017/"> 
      <div class="hero-2">

       <h2 style="color:#fff !important;">A&M Private Equity Services Back to Business Networking Event 2017</h2>
		  <p style="color:#fff !important;">September 12, 2017  |  New York, NY</p>
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
	'parent'  => 2
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
</td>
		<td width="105px" align="left" valign="top">
			<a id="sel-filter" href="<?php echo get_site_url() ?>/search-team?yr=<?php echo $currY ?>">APPLY</a>
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
	'parent'  => 2
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
			<a id="sel-filter" href="<?php echo get_site_url() ?>/search-team?yr=<?php echo $currY ?>">APPLY</a>
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
	var link = "<?php echo get_site_url() ?>/search-team?region=";
	link = link.concat($("#regionSel").val());
	link = link.concat('&mon=');
	link = link.concat($("#monSel").val());
	$('#sel-filter').attr('href',link);
});
$('#section-filter .panel-group select').change(function(){
	var link = "<?php echo get_site_url() ?>/search-team?region=";
	link = link.concat($(".panel-group #regionSel").val());
	link = link.concat('&mon=');
	link = link.concat($(".panel-group #monSel").val());
	$('.panel-group #sel-filter').attr('href',link);
});
</script>

</div>
</div>
	<!--======================================-->	

					
	<div class="col-md-12 section-white not-white">				
<div id="section-4" class="row">
		<h2 class="inner">Events:</h2>
	<h5><?php 
	$reg_name = get_category_by_slug($p_reg);
	$reg_name = $reg_name->name;
	if($reg_name != ''){
		echo '<span class="ry">Region:</span> ' . $reg_name . ' <span class="sd">/</span> '; 
	}
	
	if($p_mon != ''){
		$pm_t = date('F', strtotime("2012-$p_mon-01"));
		echo '<span class="ry">Month:</span> ' . $pm_t . ' <span class="sd">/</span> '; 
	}
	
	?></h5>
		<p class="landing"></p>

	<?php 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$archive_args = array(
		'post_type' => 'team',
		'paged' => $paged,
		'category_name' => $p_reg,
		'year' => $p_year,
		'monthnum'=> $p_mon,
		'posts_per_page' => 100,
	);
	$archive_query = new WP_Query($archive_args);
	if ($archive_query->have_posts()) : while ($archive_query->have_posts()) : $archive_query->the_post(); ?>


	
	
	
	<a href="<?php the_field('external_link'); ?>" target="_blank">
	<div class="col-xs-6 col-md-3 team-thumbnails" style="background-image:url('<?php the_field('thumbnail'); ?>');">
		<div id="team-tag">
		<p class="team-name"><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></p>
		<p class="team-title"><?php the_field('title'); ?></p>
		</div>
	</div>
	</a>
	
	
	
	
	

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
											<p>Try searching for something else or head <a href="<?php echo get_site_url() ?>/events">back.</a></p>
											<h5><a href="<?php echo get_site_url() ?>/events">Back to Events</a></h5>
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

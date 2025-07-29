<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
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
		.home-slider .carousel-inner{
			margin-top:-30px;
		}
		</style>
		
<div id="section-0" class="home-slider">
	<div class="container"><div class="row"><div class="col-xs-12">
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
  <div class="carousel-inner" style="margin-top:-30px">

<?php
 
// The Query
$slide_q = new WP_Query( array('post_type' => 'news','posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC') );
$slide_c = 0; 
// The Loop
if ( $slide_q->have_posts() ) {
    while ( $slide_q->have_posts() ) {
        $slide_q->the_post();
		$postcategory = get_the_category();
		$cat_region = '';
		$cat_pub = '';
		if ($postcategory) {
			foreach($postcategory as $category) {
				if($category->parent == 5){
					$cat_region = $category->name;
				}
				if($category->parent == 3){
					$cat_pub = $category->name;	
				}
			}
		}?>
  <div class="item slides <?php if($slide_c == 0): echo 'active'; endif;?>">
  
    <div class="slide-news-1" style="background-image:url(<?php the_field('header-image')?>)"></div>
    <a href="<?php the_field('news-post-source') ?>" target="_blank"> 
        <div class="hero-2">
            <h2><?php the_title() ?></h2>
            <p><?php echo get_the_date(); ?>  | <?php echo $cat_region ?></p>
        </div>
    </a>
    
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
  <a class="left carousel-control" href=".carousel" role="button" data-slide="prev"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-left.png" border="0" /></span>
 </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.png" border="0" /></span>
 </a>
</div>
</div></div></div>
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
<div class="col-xs-12">
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
    <option value="" selected="selected">Publication</option>
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
    <option value="" selected="selected">Publication</option>
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


</div>
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

					
	<div class="section-white not-white">				
		<div class="container">
<div id="section-4" class="row">
	<h2 class="inner">PRESS & MEDIA:</h2>
		<p class="landing"></p>
	<div class="pagination-top"><?php bones_page_navi(); ?></div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-sm-6 col-md-4">
	<div class="news-block ms">
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
        
        <div class="archive-news-block">
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
		<p><?php echo substr(get_field('home-excerpt'),0,130); ?>
		<br>
		<a class="excerpt" href="<?php the_field('news-post-source'); ?>" target="_blank"> Read More <i class="fas fa-caret-right"></i> </a></p>
        </div>
<!--/-->
	</div>
	</div>

<!--/-->


		<?php endwhile; ?>
</div>
<!--/section-4-->
</div>
</div>
		
<div class="pagination-bottom"><?php bones_page_navi(); ?></div>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
										</footer>
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

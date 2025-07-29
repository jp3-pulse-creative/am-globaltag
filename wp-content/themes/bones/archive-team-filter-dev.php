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
.tho-top-tl{
	background-image: url("http://www.am-tag.com/wp-content/uploads/2018/08/back-team.jpg");
	overflow: hidden;
height: 670px;
	background-position: center;
		background-attachment: scroll;
}
	.tho-in p {
		text-align: left !important;
		font-family: 'Helvetica Neue LT W01_41488878' !important;
		font-style: normal !important;
		font-size: 20px;
line-height: 24px;
		letter-spacing: 0px !important;
	width: 40%;
	}
	.tho-top .title2 h3, .tho-top-tl .title2 h3 {
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif !important;
	}
	.tho-in {
    margin: 80px 0px 0px 0px;
}
	@media only screen
and (min-width : 320px)
and (max-width : 480px) {
.tho-in p {
width: 100%;
}
	.tho-top-tl {
		background-position: -985px 152px;
	}
	#amtx-section-1 {
		background-position: -858px top;
	}
/*/*/
}
</style>
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl tl-archive"> 
  
  <div class="container title2 m-50"> 
  <div class="col-md-12">
	  <div id="amtx-section-ateamhead">
	    <div class="container">
  <div class="tho-in">
	  <h4>WHO WE ARE</h4>
    <h3>MEET OUR TEAM</h3>
	  <p>Global Transaction Advisory Group has over 350 transaction advisory professionals in 23 offices globally. Our professionals are former Big Four CPA/Chartered accountants. We have senior teams throughout US, LatAm (Brazil and Mexico), Europe (UK, Germany, Netherlands, Nordics, France), India (Mumbai) and Asia (HK, Shanghai, Beijing, Singapore)</p>

  </div>
	  </div>
	  </div>
  </div>
  </div>
  </div>  
</section>
<!--/-->

<div id="amtx-section-ateam">
<div class="container">
<div id="amtx-section-1">
	<div class="col-md-8">
	<p>“Anywhere around the world, A&M is M&A. Our Alvarez & Marsal Global Transaction Advisory Group is constantly at the forefront of cross-border deal making delivering maximum value to our clients and partners across the investment lifecycle.”</p>
		
		<p class="team-name">Paul Aversano</p>
		<p class="team-title">Global Practice Leader & Managing Director </p>
		<a href="https://www.alvarezandmarsal.com/our-people/paul-aversano" target="_blank" class="team-name-btn"><img src="<?php bloginfo('template_url'); ?>/images/btn-back2.jpg" class="amtx-liner" border="0" alt="" title=""/>Meet <strong>Paul Aversano</strong></a>
		
		
	</div>
	<div class="col-md-4"></div>
	
<!--/-->
</div>
<!--=====================================-->



<div id="amtx-section-2">
	<div class="title">
	<h4>MEET OUR TEAM </h4>
	<div class="divider"></div>
	</div>
	
	
	  <ul class="filter">
                    <li class="active">
                        <a href="#" data-filter="*">All</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".test1">Test 1</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".test2">Test 2</a>
                    </li>
                  
                </ul>
	
	
	  
	<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
'posts_per_page' => 99999,
'paged' => $paged,
'post_type' => 'team',
'taxonomy'=>'test1',
'field'=>'slug'
);
$cpt_query = new WP_Query($args);
?>
 
<?php if ($cpt_query->have_posts()) : while ($cpt_query->have_posts()) : $cpt_query->the_post();?>

<a href="<?php the_field('external_link'); ?>" target="_blank">

	<div class="col-xs-6 col-md-3 team-thumbnails" style="background-image:url('<?php the_field('thumbnail'); ?>');">
		<div id="team-tag">
		<p class="team-name"><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></p>
		<p class="team-title"><?php the_field('title'); ?></p>
		</div>
	</div>

	</a>

	<?php endwhile; endif; ?>
	<!--/-->
		 
	</div>
	

	<section class="content-block gallery-1 gallery-1-2" data-spy="scroll" data-target="nav">
            <div class="container">
                <div class="underlined-title">
                    <h1>A selection of our work</h1>
                    <hr>
                    <h2>Hand-picked just for you</h2>
                </div>
                <ul class="filter">
                    <li class="active">
                        <a href="#" data-filter="*">All</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".artwork">Artwork</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".creative">Creative</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".nature">Nature</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".outside">Outside</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".photography">Photography</a>
                    </li>
                </ul>
                <!-- /.gallery-filter -->
                <div class="row">
                    <div class="isotope-gallery-container">

                        <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        
							
							!!!!!
							
							
							
							
                        </div>

						
						
						
                        <!-- /.gallery-item-wrapper -->
                        <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="http://placehold.it/800x600" class="img-responsive" alt="2nd gallery Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="http://placehold.it/800x600" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="gallery-details">
                                    <h5>2nd gallery Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.gallery-item-wrapper -->
                        <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper photography artwork">
                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="http://placehold.it/800x600" class="img-responsive" alt="3rd gallery Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="http://placehold.it/800x600" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="gallery-details">
                                    <h5>3rd gallery Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.gallery-item-wrapper -->
                        <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper creative nature">
                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="http://placehold.it/800x600" class="img-responsive" alt="4th gallery Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="http://placehold.it/800x600" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="gallery-details">
                                    <h5>4th gallery Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.gallery-item-wrapper -->
                        <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature">
                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="http://placehold.it/800x600" class="img-responsive" alt="5th gallery Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="http://placehold.it/800x600" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="gallery-details">
                                    <h5>5th gallery Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.gallery-item-wrapper -->
                        <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                            <div class="gallery-item">
                                <div class="gallery-thumb">
                                    <img src="http://placehold.it/800x600" class="img-responsive" alt="6th gallery Thumb">
                                    <div class="image-overlay"></div>
                                    <a href="http://placehold.it/800x600" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="gallery-details">
                                    <h5>6th gallery Item</h5>
                                    <p>Nullam id dolor id nibh ultricies vehicula.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.gallery-item-wrapper -->
                    </div>
                    <!-- /.isotope-gallery-container -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

	
	
	
	


<!--/container-->
</div>
</div>
<script type="text/javascript" src="http://ana:9000/wp-content/themes/bones/library/js/plugins.js"></script> 
<script type="text/javascript" src="http://ana:9000/wp-content/themes/bones/library/js/bskit-scripts.js"></script>
<script type="text/javascript" src="http://ana:9000/wp-content/themes/bones/library/js/jquery.slicknav.js"></script>

<?php get_footer(8); ?>
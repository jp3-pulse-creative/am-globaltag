<?php get_header(2); ?>
<style>
    .bunker-current a {
    border-bottom: 4px solid #00355F !important;
}
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
#section-4 {
	width: 100%;
    padding-bottom: 30px;
}
.news-block-2 {
	position: relative;
	display: inline-block;/*    padding: 13px;*/
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
    
.embed-container { 
  position: relative; 
  padding-bottom: 56.25%; 
  height: 0; overflow: hidden; 
  max-width: 100%; 
} 

.embed-container iframe, 
.embed-container object, 
.embed-container embed { 
  position: absolute; 
  top: 0; left: 0; 
  width: 100%; 
  height: 100%; 
}
    
    #section-intel-alm {
        display: none;
    }
    .btn-btl {
        font-family: "Helvetica Neue LT W01_65 Md";
        position: relative;
        display: block;
        width: 100%;
        text-align: left;
        margin: 0px 0px 20px 0px;
        font-size: 16px;
        color: #707070 !important;
    }
.fa.fa-angle-double-left {
    font-size: 19px;
    margin-right: 10px;
      color: #707070;
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
{
background:none;
}
}
    
    
</style>
<style>
<?php the_field('css');?>
</style>
<div id="section-0" class="home-slider">
  <div class="container"><div class="row"><div class="col-xs-12">
  <div class="darkness"></div>
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides <?php if($slide_c == 0): echo 'active'; endif;?>">
        <div class="slide-news-1" style="background-image:url(<?php echo get_site_url(); ?>/wp-content/themes/bones/images/banner-inthebunker.jpg)"></div>
    
        <div class="hero-2">
          <p class="gle2">VIDEO SERIES
          </p>
          <h2>
               <img src="<?php bloginfo(template_directory) ?>/images/inthebunker-1.png" alt="">
<!--
         IN THE BUNKER WITH A&M:<br>
              COVID 2020
-->
              
          </h2>
          <p class="gle2-b">
        Through the “In The Bunker with A&M” video series, Alvarez & Marsal Global Transaction Advisory Group’s Global Practice Leader Paul Aversano, along with European Practice Leader Antonio Alvarez III, share insights on the Coronavirus crisis, giving an “inside” look at the firm and how it’s operating during this time – from the impact on the day-to-day business at A&M, what the firm’s leaders are seeing across the global economies, and their real time reactions to the various shifting situations around the world.
          </p>
        </div>
     </div>
    </div>
</div>
</div></div></div>
</div>

<!--======================================-->

<div class="section-white not-white">
  <div class="container">
  <div id="section-4" class="row">
    <div class="col-xs-12">
   <a class="btn-btl" href="<?php echo get_site_url(); ?>/in-the-bunker-2020/"><span class="fa fa-angle-double-left"></span>Back to Library</a>
 </div>
<div class="col-xs-12">
    <div id="itb-content">


    <h2><?php the_field('title');?></h2>
    
<div class='embed-container'>
<!--  <iframe src='https://player.vimeo.com/video/66140585' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>-->
    <iframe src="https://www.youtube.com/embed/<?php the_field('yt');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
    <p>
       <?php echo get_the_date(); ?><br>
        <?php the_field('excerpt');?>
        </p>
    </div>
      </div>
<!--/-->
      </div>
</div>
</div>



<!--set pagination anchors below carousel-->

<?php get_footer(8); ?>

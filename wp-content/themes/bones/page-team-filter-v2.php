<?php
/*
 Template Name: Team Filter v2
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
?>
<?php get_header(2); ?>
<style>
.tho-top-tl {
    background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-team.jpg");
    overflow: hidden;
    height: 670px;
    background-position: center;
    background-attachment: scroll;
}
#amtx-section-ateamhead {
    padding: 20px 0px 0px 0px;
}
.tho-in p {
    text-align: left !important;
    font-family: 'Helvetica Neue LT W01_41488878' !important;
    font-style: normal !important;
    font-size: 20px;
    line-height: 24px;
    letter-spacing: 0px !important;
    width: 40%;
    margin: 0px 0px 0px 0px;
}
.tho-top .title2 h3, .tho-top-tl .title2 h3 {
    font-family: 'Helvetica Neue LT W01_41488878' !important;
    margin: -24px 0px 0px 0px;
}
.tho-in {
    margin: 80px 0px 0px 0px;
}

@media (max-width : 1200px) {
.tho-top-tl {
    /*background-image: url("www.am-globaltag.com/wp-content/themes/bones/images/back-team-m.jpg");*/
    background-position: center top;
    top: 0;
    height: auto;
}
.tho-in p {
    width: 100%;
}
}

@media (max-width : 480px) {
.tho-top-tl {
    padding-bottom: 100px !important;
}
#amtx-section-1 {
    background-position: -858px top;
}
/*
	#amtx-section-ateam {
	    margin: -120px 0px 0px 0px;
	}
	*/
#amtx-section-1 {
    background-image: none;
}
#amtx-section-1 p {
    color: #002c49;
}
#amtx-section-1 {
    padding: 20px;
    text-align: center !important;
}
#amtx-section-1 p, #amtx-section-1 p.team-name, #amtx-section-1 p.team-title {
    text-align: center !important;
}
.team-name-btn, .team-name-btn:hover {
    background-color: #3399cc !important;
    float: none;
    position: relative;
    display: block;
}
#amtx-section-2 .team-thumbnails:hover {
    border: solid 4px #fff;
}
/*
	#amtx-section-2 .team-thumbnails {
		background-position: -68px top;
	}
	*/
	
/*/*/
}
</style>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/filter_style.css"/>
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl tl-archive">

<div class="container title2 m-50">
  <div class="col-md-12">
    <div id="amtx-section-ateamhead">
      <div class="container">
        <div class="tho-in">
          <h4>WHO WE ARE</h4>
          <h3>MEET OUR TEAM</h3>
          <p>Global Transaction Advisory Group has close to 590 transaction advisory professionals in 26  offices globally. Our professionals are former Big Four CPA/Chartered Accountants. We have senior teams throughout United States, Latin America (Brazil and Mexico), Europe (United Kingdom, Germany, Netherlands, Nordics, France, Sweden, Switzerland, Spain, Italy), Middle East (Dubai and Riyadh), India (Mumbai) and South East Asia (Hong Kong, Shanghai, Beijing, Singapore).</p>
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
        <p class="team-title">Managing Director and Global Practice Leader </p>
        <a href="https://www.alvarezandmarsal.com/our-people/paul-aversano" target="_blank" class="team-name-btn"><img src="<?php bloginfo('template_url'); ?>/images/btn-back2.jpg" class="amtx-liner" border="0" alt="" title=""/>Meet <strong>Paul Aversano</strong></a> </div>
      <div class="col-md-4"></div>
      
      <!--/--> 
    </div>
    <!--=====================================-->
    
    <div id="amtx-section-2">
      <div class="title">
        <h4>MEET OUR TEAM </h4>
        <!--	<div class="divider"></div>--> 
      </div>
      <div class="color-block"></div>
      <div class="filter-box">
        <div class="filter-title">
          <h5>FILTER BY:</h5>
        </div>
        <?php 
        //BE AWARE THIS ALL RELIES ON POST 2924, Alvaro Araujo BEING IN DB
        $reg_obj = get_field_object('region',2924)['choices'];
        $coun_obj = get_field_object('country',2924)['choices'];
        $city_obj = get_field_object('city',2924)['choices'];
        $ind_obj = get_field_object('industry',2924)['choices'];

        function textFlatten($msg){
            $output = strtolower($msg);
            $output = str_replace(' ', '_', $output);
            $output = str_replace('&', '_', $output);
            $output = str_replace('/', '_', $output);
            return $output;
        };
        ?>
        <div id="fdd-reg" class="fdd-box">
          <label>Region</label>
          <select id="filter-reg" class="filter-dropdown">
            <option value="" selected >All</option>
            <?php
            foreach($reg_obj as $key){
                echo '<option value="'.textFlatten($key).'">'.$key.'</option>';
            }
            ?>
          </select>
        </div>
        <div id="fdd-cntry" class="fdd-box">
          <label>Country</label>
          <select id="filter-cntry" class="filter-dropdown">
            <option value="" selected >All</option>
            <?php
            foreach($coun_obj as $key){
                echo '<option value="'.textFlatten($key).'">'.$key.'</option>';
            }
            ?>
          </select>
        </div>
        <div id="fdd-city" class="fdd-box">
          <label>City/Town</label>
          <select id="filter-city" class="filter-dropdown">
            <option value="" selected >All</option>
            <?php
            foreach($city_obj as $key){
                echo '<option value="'.textFlatten($key).'">'.$key.'</option>';
            }
            ?>
          </select>
        </div>
        <div id="fdd-ind" class="fdd-box">
          <label>Industry Expertise</label>
          <select id="filter-ind" class="filter-dropdown">
            <option value="" selected >All</option>
            <?php
            foreach($ind_obj as $key){
                echo '<option value="'.textFlatten($key).'">'.$key.'</option>';
            }
            ?>
          </select>
        </div>
        <div id="fdd-find" class="fdd-box">
          <div class="ft-wrapper">
            <input type="text" id="filter-text" placeholder="SEARCH"/>
          </div>
          <input type="button" id="search" value="APPLY"/>
        </div>
      </div>
      <?php 

$team_args = array(
  'post_type' => 'team_member',
  'posts_per_page' => 999,
  'orderby' => 'meta_value',
  'order' => 'ASC',
  'meta_key' => 'last_name',
);
$team_query = new WP_Query( $team_args );
if ( $team_query->have_posts() ): while ( $team_query->have_posts() ): $team_query->the_post();

      ?>
      <a href="<?php the_field('external_link') ?>" target="_blank">
      <?php 
        $region_f = get_field('region');
        $country_f = get_field('country');
        $city_f = get_field('city');
        $ind_f = get_field('industry');
        $ind_l = ""; $ind_b = "";
        foreach($ind_f as $ind){
            $ind_l = $ind_l . ' ' . textFlatten($ind);
            $ind_b = $ind_b . ' ' . strtolower($ind);
        }
        $city_l = ""; $city_b = "";
        foreach($city_f as $city){
            $city_l = $city_l . ' ' . textFlatten($city);
            $city_b = $city_b . ' ' . strtolower($city);
        }
        $country_l = ""; $country_b = "";
        foreach($country_f as $country){
            $country_l = $country_l . ' ' . textFlatten($country);
            $country_b = $country_b . ' ' . strtolower($country);
        }
        $region_l = ""; $region_b = "";
        foreach($region_f as $region){
            $region_l = $region_l . ' ' . textFlatten($region);
            $region_b = $region_b . ' ' . strtolower($region);
        }
      ?>
      <div class="col-xs-6 col-md-3 team-thumbnails fil-active <?php echo $region_l . ' ' . $country_l . ' ' . $city_l . ' ' . $ind_l ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url(null, 'full') ?>)">
        <div class="team-tag">
          <p class="team-name">
            <?php echo get_field('first_name'). ' ' . get_field('last_name'); ?>
          </p>
          <p class="team-title">
            <?php echo get_field('title'); ?>
            <br>
            <span style="color: #cdcdcd !important;">
            <?php the_field('city'); ?>
            </span> <span class="hidden superhidden"><?php echo $ind_b ?> <?php echo strtolower(get_field('first_name')); ?> <?php echo strtolower(get_field('last_name')); ?> <?php echo strtolower(get_field('title')); ?> <?php echo $city_b ?></span> </p>
        </div>
      </div>
      </a>
      <?php
      endwhile;

      else :
        ?>
      <?php
      endif;
      ?>
      <!--/--> 
    </div>
    
    <!--/container--> 
  </div>
</div>
<script>
	/*
	$( ".filter-button" ).click(function() {

	  var targetclass = $(this).data("filter");

	  console.log(targetclass);

	  $(".team-thumbnails").each(function(){
	  	console.log($(this));
	  	$(this).hide();
	  	if($(this).hasClass(targetclass)){
	  		console.log("hit");
	  		$(this).show();
	  	}
	  })
	});
	*/
	function search(){

		var targetReg = $("#filter-reg").val().toLowerCase();
		var targetCtry = $("#filter-cntry").val().toLowerCase();
		var targetCity = $("#filter-city").val().toLowerCase();
		var targetInd = $("#filter-ind").val().toLowerCase();
		var targetText = $("#filter-text").val().toLowerCase();

		if(targetText.indexOf(" ")>0){
			var targetText = targetText.substr(0, targetText.indexOf(" "));
		}

		$(".team-thumbnails").removeClass("fil-active");
		$(".team-thumbnails").addClass("fil-inactive");
		var classStr = '';

		if(targetReg != ''){
			classStr+='.'+targetReg;
		}
		if(targetCtry != ''){
			classStr+='.'+targetCtry;
		}
		if(targetCity != ''){
			classStr+='.'+targetCity;
		}
		if(targetInd != ''){
			classStr+='.'+targetInd;
		}

		$(".team-thumbnails"+classStr+":contains('"+targetText+"')").addClass("fil-active");
		$(".team-thumbnails"+classStr+":contains('"+targetText+"')").removeClass("fil-inactive");
		/* this is for the height animation of container, not sure if want to keep */
		var numActive = $(".fil-active").length;
		var numRow = Math.floor(numActive/4) + 1;

		$("#amtx-section-2").removeClass();
		$("#amtx-section-2").addClass("f-row"+numRow);
/*
		var baseH = 135;
		var rowH = 220;

		var minH = baseH+(rowH*numRow);

		console.log(minH);

		$("#amtx-section-2").css("min-height", minH +"px");
*/
	}

	$(document).on('keypress',function(e) {
	    if(e.which == 13) {
	        search();
	    }
	});

	$('#search').click(function(){
		search();
	  
	});
	$(document).ready(function(){
		/* $("#amtx-section-2").css("min-height",window.innerHeight+'px');*/
		/* this is for the height animation of container, not sure if want to keep */
		var numActive = $(".fil-active").length;
		var numRow = Math.floor(numActive/4) + 1;
		$("#amtx-section-2").addClass("f-row"+numRow);
	});
</script>
<?php get_footer(8); ?>

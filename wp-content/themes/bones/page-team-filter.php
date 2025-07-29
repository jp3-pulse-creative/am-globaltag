<?php
/*
 Template Name: Team New Filter
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
          <p>Global Transaction Advisory Group has close to 500 transaction advisory professionals in 24 offices globally. Our professionals are former Big Four CPA/Chartered accountants. We have senior teams throughout United States, Latin America (Brazil and Mexico), Europe (United Kingdom, Germany, Netherlands, Nordics, France, Sweden and Switzerland), India (Mumbai) and Asia (Hong Kong, Shanghai, Beijing, Singapore).</p>
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
        <div id="fdd-reg" class="fdd-box">
          <label>Region</label>
          <select id="filter-reg" class="filter-dropdown">
            <option value="" selected >All</option>
            <option value="Asia">Asia</option>
            <option value="Europe">Europe</option>
            <option value="India">India</option>
            <option value="Latin_America">Latin America</option>
            <option value="Nordics">Nordics</option>
            <option value="North_America">North America</option>
          </select>
        </div>
        <div id="fdd-cntry" class="fdd-box">
          <label>Country</label>
          <select id="filter-cntry" class="filter-dropdown">
            <option value="" selected >All</option>
            <option value="Brazil">Brazil</option>
            <option value="China">China</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Hong_Kong">Hong Kong</option>
            <option value="India">India</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Singapore">Singapore</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="UK">UK</option>
            <option value="US">US</option>
          </select>
        </div>
        <div id="fdd-city" class="fdd-box">
          <label>City/Town</label>
          <select id="filter-city" class="filter-dropdown">
            <option value="" selected >All</option>
            <option value='Amsterdam'>Amsterdam</option>
            <option value='Atlanta'>Atlanta</option>
            <option value='Birmingham'>Birmingham</option>
            <option value='Boston'>Boston</option>
            <option value='Chicago'>Chicago</option>
            <option value='Frankfurt'>Frankfurt</option>
            <option value='Hong_Kong'>Hong Kong</option>
            <option value='Houston'>Houston</option>
            <option value='London'>London</option>
            <option value='Los_Angeles'>Los Angeles</option>
            <option value='Miami'>Miami</option>
            <option value='Mumbai'>Mumbai</option>
            <option value='Munich'>Munich</option>
            <option value='Nashville'>Nashville</option>
            <option value='New_York'>New York</option>
            <option value='Paris'>Paris</option>
            <option value='San_Francisco'>San Francisco</option>
            <option value='Sao_Paulo'>Sao Paulo</option>
            <option value='Shanghai'>Shanghai</option>
            <option value='Singapore'>Singapore</option>
            <option value='Stockholm'>Stockholm</option>
            <option value='Zurich'>Zurich</option>
          </select>
        </div>
        <div id="fdd-ind" class="fdd-box">
          <label>Industry Expertise</label>
          <select id="filter-ind" class="filter-dropdown">
            <option value="" selected >All</option>
            <option value='Aerospace'>Aerospace</option>
            <option value='Aerospace_n_Defense'>Aerospace & Defense</option>
            <option value='Agro-Chemical'>Agro-Chemical</option>
            <option value='Asset_Management'>Asset Management</option>
            <option value='Automotive'>Automotive</option>
            <option value='Aviation'>Aviation</option>
            <option value='Banks'>Banks</option>
            <option value='Behavioral_Healthcare'>Behavioral Healthcare</option>
            <option value='Brokerage'>Brokerage</option>
            <option value='Building_Products_n_Materials'>Building Products/Materials</option>
            <option value='Business_Services'>Business Services</option>
            <option value='IT_Services'>IT Services</option>
            <option value='Chemicals'>Chemicals</option>
            <option value='Chemicals_n_Life_Sciences'>Chemicals and Life Sciences</option>
            <option value='Construction'>Construction</option>
            <option value='Consumer'>Consumer</option>
            <option value='Consumer_Goods'>Consumer Goods</option>
            <option value='Consumer_Goods_n_Retail'>Consumer Goods and Retail</option>
            <option value='Consumer_Products'>Consumer Products</option>
            <option value='Consumer_Retail'>Consumer Retail</option>
            <option value='Consumer_Services'>Consumer Services</option>
            <option value='Dental_Service_Organization'>Dental Service Organization</option>
            <option value='Distribution'>Distribution</option>
            <option value='Distribution_n_Logistics'>Distribution & Logistics</option>
            <option value='Diversified_Industrials'>Diversified Industrials</option>
            <option value='E-commerce'>E-commerce</option>
            <option value='Education'>Education</option>
            <option value='Energy'>Energy</option>
            <option value='Energy_n_Natural_Resources'>Energy and Natural Resources</option>
            <option value='Engineering'>Engineering</option>
            <option value='Entertainment'>Entertainment</option>
            <option value='Environmental_Services'>Environmental Services</option>
            <option value='Financial_Services'>Financial Services</option>
            <option value='Fintech'>Fintech</option>
            <option value='Food_n_Beverage'>Food & Beverage</option>
            <option value='Food_Packaging'>Food Packaging</option>
            <option value='Franchising'>Franchising</option>
            <option value='Gas'>Gas</option>
            <option value='General_Manufacturing'>General Manufacturing</option>
            <option value='Grocery'>Grocery</option>
            <option value='Healthcare'>Healthcare</option>
            <option value='Healthcare_software'>Healthcare software</option>
            <option value='Hospice_Home_Health'>Hospice Home Health</option>
            <option value='Industrials'>Industrials</option>
            <option value='Industrial_Manufacturing'>Industrial Manufacturing</option>
            <option value='Industrial_Products'>Industrial Products</option>
            <option value='Information_Services'>Information Services</option>
            <option value='Infrastructure'>Infrastructure</option>
            <option value='Insurance'>Insurance</option>
            <option value='Insurance_Brokerage'>Insurance Brokerage</option>
            <option value='Insurance_Brokers'>Insurance Brokers</option>
            <option value='Insurance_Carriers'>Insurance Carriers</option>
            <option value='Leisure'>Leisure</option>
            <option value='Life_Sciences'>Life Sciences</option>
            <option value='Logistics'>Logistics</option>
            <option value='Manufacturing'>Manufacturing</option>
            <option value='Marketing_n_Market_Research'>Marketing/Market Research</option>
            <option value='Media'>Media</option>
            <option value='Media_n_Entertainment'>Media & Entertainment</option>
            <option value='Medical_Device'>Medical Device</option>
            <option value='Metals'>Metals</option>
            <option value='Mining'>Mining</option>
            <option value='MGAS'>MGA's</option>
            <option value='Natural_Resources'>Natural Resources</option>
            <option value='Oil_n_Gas'>Oil & Gas</option>
            <option value='Outsources_Tele-Radiology'>Outsources Tele-Radiology</option>
            <option value='Payments'>Payments</option>
            <option value='Pharmaceuticals'>Pharmaceuticals</option>
            <option value='Physician_Practice_Management'>Physician Practice Management</option>
            <option value='Private_Equity'>Private Equity</option>
            <option value='Professional_Employment_Organizations'>Professional Employment Organizations</option>
            <option value='Professional_Services'>Professional Services</option>
            <option value='Publishing'>Publishing</option>
            <option value='Real_Estate'>Real Estate</option>
            <option value='Relationship_Management'>Relationship Management</option>
            <option value='Renewables'>Renewables</option>
            <option value='Residential_care'>Residential care</option>
            <option value='Restaurants'>Restaurants</option>
            <option value='Retail'>Retail</option>
            <option value='Revenue_Cycle_Management'>Revenue Cycle Management</option>
            <option value='Security_n_Cybersecurity'>Security/Cybersecurity</option>
            <option value='Senior_Living'>Senior Living</option>
            <option value='Services_n_Technology'>Services & Technology</option>
            <option value='Shipbuilding'>Shipbuilding</option>
            <option value='Software_n_Technology'>Software & Technology</option>
            <option value='Specialty_Finance'>Specialty Finance</option>
            <option value='Specialized_Services'>Specialized Services</option>
            <option value='Sports_Franchises'>Sports Franchises</option>
            <option value='Staffing'>Staffing</option>
            <option value='TMT'>TMT</option>
            <option value='Technology'>Technology</option>
            <option value='Technology_n_Media'>Technology and Media</option>
            <option value='Telecommunications'>Telecommunications</option>
            <option value='Transaction_Processing'>Transaction Processing</option>
            <option value='Transportation'>Transportation</option>
            <option value='Transportation_n_Logistics'>Transportation & Logistics</option>
            <option value='Travel_n_Leisure'>Travel & Leisure</option>
            <option value='Utilities_Services'>Utilities Services</option>
            <option value='Waste_Management'>Waste Management</option>
            <option value='Water'>Water</option>
            <option value='Wholesale_Brokers'>Wholesale Brokers</option>
            <option value='Wholesale_Distribution'>Wholesale Distribution</option>
          </select>
        </div>
        <div id="fdd-find" class="fdd-box">
          <div class="ft-wrapper">
            <input type="text" id="filter-text" placeholder="SEARCH"/>
          </div>
          <input type="button" id="search" value="APPLY"/>
        </div>
      </div>
      <?php // check if the repeater field has rows of data
      if ( have_rows( 'team' ) ):

        // loop through the rows of data
        while ( have_rows( 'team' ) ): the_row();
      ?>
      <a href="<?php the_sub_field('external_link'); ?>" target="_blank">
      <?php /* clean city name */
      $city_f = strtolower( get_sub_field( 'city' ) );
      $city_f = str_replace( " ", "_", $city_f );
      $ind_f = get_sub_field('industry');
      $ind_l = "";
      foreach($ind_f as $ind){
        $ind_l = $ind_l . ' ' . $ind;
      }
      ?>
      <div class="col-xs-6 col-md-3 team-thumbnails <?php echo strtolower(get_sub_field('class_filter')) . ' ' . $city_f . ' ' . $ind_l; ?> fil-active" style="background-image:url('<?php the_sub_field('thumbnail'); ?>');">
        <div class="team-tag">
          <p class="team-name">
            <?php the_sub_field('first_name'); ?>
            <?php the_sub_field('last_name'); ?>
          </p>
          <p class="team-title">
            <?php the_sub_field('title'); ?>
            <br>
            <span style="color: #cdcdcd !important;">
            <?php the_sub_field('city'); ?>
            </span> <span class="hidden superhidden"><?php echo strtolower(get_sub_field('class_filter')) ?> <?php echo strtolower(get_sub_field('first_name')); ?> <?php echo strtolower(get_sub_field('last_name')); ?> <?php echo strtolower(get_sub_field('title')); ?> <?php echo strtolower(get_sub_field('city')) ?></span> </p>
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

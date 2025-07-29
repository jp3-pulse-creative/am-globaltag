<?php
/*
 Template Name: Who We Serve 2
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
?>

<?php get_header(2); ?>
<style>
.tho-top-tl{
	background-image: url("http://www.am-tag.com/wp-content/uploads/2018/08/back-who-we-serve.jpg");
	overflow: hidden;
height: 670px;
	background-position: center;
		background-attachment: scroll;
}
	p {
		color: #000;
	}
	#amtx-section-4 .content-block-1.tho-lead {
    margin-bottom: 0px;
	background-position: center bottom;
		background-repeat: no-repeat;
background-size: cover;
	background-attachment: scroll;
		padding-bottom: 200px;
}
/*accordian*/
	.ef-on {text-decoration: underline !important;}
.half {
  float: left;
  width: 50%;
  padding: 0 1em;
}
/* Acordeon styles */
.tab {
  position: relative;
  margin-bottom: 1px;
  width: 100%;
  overflow: hidden;
	margin-top: -2px;
/*	border: solid 1px #e6e7e8;*/
}
.tab input {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
.tab label {
  position: relative;
  display: block;
/*  padding: 10px;*/
  cursor: pointer;
}
	
	.wws11 {
		position: relative;
		display: block;
background: url("http://www.am-tag.com/wp-content/uploads/2018/08/back-wws11.jpg") center top no-repeat;
		background-repeat: no-repeat !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	background-attachment: scroll;	
	background-position: center top;
			height: 100px;
	}
	.wws22 {
		position: relative;
		display: block;
background: url("http://www.am-tag.com/wp-content/uploads/2018/08/back-wws22.jpg") center top no-repeat;
		background-repeat: no-repeat !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	background-attachment: scroll;	
	background-position: center top;
			height: 100px;
	}
	.wws33 {
		position: relative;
		display: block;
background: url("http://www.am-tag.com/wp-content/uploads/2018/08/back-wws33.jpg") center top no-repeat;
		background-repeat: no-repeat !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	background-attachment: scroll;	
	background-position: center top;
			height: 100px;
	}
	.wws44 {
		position: relative;
		display: block;
background: url("http://www.am-tag.com/wp-content/uploads/2018/08/back-wws44.jpg") center top no-repeat;
		background-repeat: no-repeat !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	background-attachment: scroll;	
	background-position: center top;
			height: 100px;
	}
	
	.wws11 h3, .wws22 h3, .wws33 h3, .wws44 h3 {
		margin-left: 20px;
margin-right: auto;
position: relative;
top: 50%;
transform: translateY(-50%);
			font-family: 'Helvetica Neue LT W01_77 Bd Cn';
	color: #fff;
		font-size: 30px;
		text-transform: uppercase;
		-webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;           
	}
	
.blue label {
  background: #2980b9;
}
.tab-content {
  max-height: 0;
  overflow: hidden;
	color: #000;
	text-align: left;
  -webkit-transition: max-height .35s;
  -o-transition: max-height .35s;
  transition: max-height .35s;
}
	
	.atc-upper {
				margin-top: -8px;
	}
	
	.upper2 {
		padding-top: 10px;
	}
	
	.atc-white {
		background: #fff;
		border-bottom: solid 2px #959595;
	}
	.atc-white-last {
		background: #fff;
		border-bottom: none;
	}
	.atc-blue {
		background: #e3ecf5;
		border-bottom: solid 2px #959595;
	}
	
	.tab-content h4 {
font-family:'Helvetica Neue LT W01_65 Md';
	color: #4e8abe;
		font-size: 16px;
		text-transform: uppercase;
		margin-left: 15px;
	}
.blue .tab-content {
  background: #3498db;
}
.tab-content p {
margin: 0px 0px 20px 0px;
font-size: 14px;
text-align: left !important;
line-height: 22px;
font-family: 'Helvetica Neue LT W01_41488878' !important;
}
/* :checked */
input:checked ~ .tab-content {
/*  max-height: 10em;*/
	max-height: 55em;
}
/* Icon */
label::after {
  position: absolute;
  right: 0;
/*  top: 0;*/
bottom: -20px;
  display: block;
  width: 3em;
  height: 3em;
  line-height: 3;
  text-align: center;
  -webkit-transition: all .35s;
  -o-transition: all .35s;
  transition: all .35s;
}
input[type=checkbox] + label::after {
  content: "+";
	font-size: 30px;
	color: #fff;
	margin-top: -10px;
}
input[type=radio] + label::after {
  content: "\25BC";
}
input[type=checkbox]:checked + label::after {
/*  transform: rotate(315deg);*/
	content: "-";
	font-size: 30px;
	color: #fff;
/*	margin-top: -10px;*/
}
input[type=radio]:checked + label::after {
  transform: rotateX(180deg);
}
	.tab ul li {
		font-family: 'Helvetica Neue LT W01_41488878' !important;
	}
</style>

					
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<style>
.tho-top-tl{
	background-image: url('<?php echo $image[0]; ?>');
	overflow: hidden;
/*	background-position: center 352px;*/
}
</style>

</div>
<?php endif; ?>
<div id="amtx-single-header">
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl"> 
  
  <div class="container title2 m-50"> 
  <div class="col-md-12">
	    <div class="container">
  <div class="tho-in left-line">


  </div>
	  </div>
  </div>
  </div>
 
</section>
</div>

<div id="amtx-section-6">
	<div class="container">
		
<div class="amtx-back">
	<h1>Who We Serve</h1>
		</div>
	
			
<!--/-->
		</div>
<!--/amtx-section-3a-->
		</div>

<div id="amtx-section-6c">
		<div class="container">
<h2>ABOUT GLOBAL TRANSACTION ADVISORY GROUP</h2>
			</div>
</div>


<div id="amtx-section-6f">
<div class="container">
	<p>
Our Global Transaction Advisory team has extensive industry knowledge across multiple sectors including, but not limited to, dedicated industry verticals in healthcare, software & technology, energy and financial services. Our dedicated industry verticals combine our transaction advisory, operational performance improvement and tax expertise into an integrated approach to help clients gain more insights, make better decisions and execute faster throughout the deal process.  
	</p>
</div>
	</div>

<div id="amtx-section-6e2">
	<div class="container">
		
		<h2>INDUSTRIES WE SERVE</h2>
<!--accordian==========================================-->

	<div class="col-md-12">
		
    <div class="tab">
      <input id="tab-one" type="checkbox" name="tabs">
		
      <label for="tab-one"><div class="wws11"> <h3><img class="" src="<?php bloginfo('template_directory'); ?>/images/wws11-ico.png" border="0" /> Healthcare</h3></div></label>
			
      <div class="tab-content atc-blue atc-upper">
		  
		  <h4 class="upper2">Overview</h4>

       	<div class="col-md-4">
			<p>
				Combines world-class pre-acquisition financial accounting and operational diligence services with deep healthcare industry and post-acquisition advisory services 
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
			Over 150 dedicated healthcare industry professionals with deep financial, operational, and advisory experience	
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
				Dedicated healthcare vertical with over 20 professionals providing inancial accounting due diligence to private equity and corporate healthcare clients.
 

				</p>
			</div>
		  
<!--/-->
      </div>
<!--====================================================-->
		<div class="tab-content atc-white">
			
			   <h4 class="upper2">Deep Sector Expertise  </h4>

       	<div class="col-md-4">
			<p>
			Physician Practice Management <br><br>
Payors and Payor Services <br><br>
				Life Sciences<br><br>
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
		Hospital and Health Systems<br><br>
Home Health and Hospice<br><br>
Outsourcing
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
			Long Term Care<br><br>
 Behavioral Health<br><br>
 Labs and Imaging
				</p>
			</div>
			
			</div>
		<!--====================================================-->
		<div class="tab-content atc-white-last">
			
			   <h4 class="upper2">Integrated Due Diligence Approach</h4>

       	<div class="col-md-4">
			<p>
			Assists clients in validating investment thesis
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
		Monitor industry trends and translate changes in industry dynamics (reimbursement, product rollout and acceptance, cost structure, etc.) 
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
				Provides comprehensive suite of complementary services for healthcare acquirers, including:
	<ul>
	<li>- 	Guidance on complex accounting issues</li>
	
	<li>-	Transaction tax advice</li>

	<li>-	Healthcare consulting services, including (but not limited to) 
		operational improvement, interim management and strategy development and execution</li>
</ul>
 

				</p>
			</div>
			
			</div>
		<!--====================================================-->
		
		
		
		
		
<!--/tab-->
    </div>
   
		
<!--==========================================================-->

    <div class="tab">
      <input id="tab-two" type="checkbox" name="tabs">
      <label for="tab-two"><div class="wws22"> <h3><img class="" src="<?php bloginfo('template_directory'); ?>/images/wws22-ico.png" border="0" /> Software & Technology</h3></div></label>
       <div class="tab-content atc-blue atc-upper">
		  
		  <h4 class="upper2">Overview</h4>

       	<div class="col-md-4">
			<p>
			Significant sector experience working for leading technology companies

				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
		Enabled to provide our clients with the ability to quickly identify, diagnose and solve complex financial issues
				</p>
			</div>
		  
		  <div class="col-md-4">
		
			</div>
		  
<!--/-->
      </div>
<!--====================================================-->
		<div class="tab-content atc-white">
			
			   <h4 class="upper2">Deep Sector Expertise  </h4>

       	<div class="col-md-4">
			<p>
		Private Equity
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
	Corporate 
			  </p>
			</div>
		  
		  <div class="col-md-4">
		
			</div>
			
			</div>
		<!--====================================================-->
		<div class="tab-content atc-white-last">
			
			   <h4 class="upper2">Integrated Due Diligence Approach</h4>

       	<div class="col-md-4">
			<p>
		Revenue Analyses
				<ul>
	<li>-	Revenue Recognition / Customer Contract Review</li>
	<li>-	Renewal rates (ARR, Customer Count, and Up-For-Renewal)</li>
	<li>-	Cohorts</li>
	<li>-	Bookings to Revenue to Cash Conversion Analysis</li>
	<li>-	Forecast Gap Analysis</li>
 </ul>

				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
	Margin / Cost Analyses
				<ul>
	<li>-	Standardized Gross Margin</li>
	<li>-	Standardized Gross Margin</li>
						<li>-	Lifetime Value</li>
						<li>-	Cash EBITDA</li>

 </ul>
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
			Operations
					<ul>
	<li>-	Systems Review</li>
	<li>-	Carve-out / Standalone Cost Assessments</li>
	<li>-	Synergy Assessment</li>
						</ul>
				
				</p>
			</div>
			
			</div>
		<!--====================================================-->
    </div>


<!--==========================================================-->

    <div class="tab">
      <input id="tab-three" type="checkbox" name="tabs">
      <label for="tab-three"><div class="wws33"> <h3><img class="" src="<?php bloginfo('template_directory'); ?>/images/wws33-ico.png" border="0" /> Energy</h3></div></label>
  <div class="tab-content atc-blue atc-upper">
		  
		  <h4 class="upper2">Overview</h4>

       	<div class="col-md-4">
			<p>
		“Big 4” Financial Due Diligence pedigree with “Real Operators” doing Operational Due Diligence
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
	Highly experienced due diligence professionals having worked with over 100 private equity & infrastructure funds, banks and hedge funds in the last five years.
				</p>
			</div>
		  
		  <div class="col-md-4">
		<p>
			Our integrated team will rapidly assess the key issues (red flags or deal stoppers), identify areas of judgment and areas where further work is required.
			</p>
			</div>
		  
<!--/-->
      </div>
<!--====================================================-->
		<div class="tab-content atc-white">
			
			   <h4 class="upper2">Deep Sector Expertise  </h4>

       	<div class="col-md-4">
			<p>
		Upstream<br><br>
				Energy services
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
Midstream <br><br>
				Energy equipment
			  </p>
			</div>
		  
		  <div class="col-md-4">
		<p>
			Downstream <br><br>
			Mining 
			</p>
			</div>
			
			</div>
		<!--====================================================-->
		<div class="tab-content atc-white-last">
			
			   <h4 class="upper2">Integrated Due Diligence Approach</h4>

       	<div class="col-md-4">
			<p>
Pre-acquisition financial due diligence<br><br>
			Financial and potential IPO support

				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
	IPO readiness
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
		Sell-side assistance and data room preparation 
				</p>
			</div>
			
			</div>
		<!--====================================================-->
    </div>

		
<!--==========================================================-->

    <div class="tab">
      <input id="tab-four" type="checkbox" name="tabs">
      <label for="tab-four"><div class="wws44"> <h3><img class="" src="<?php bloginfo('template_directory'); ?>/images/wws44-ico.png" border="0" /> Financial Services</h3></div></label>
 <div class="tab-content atc-blue atc-upper">
		  
		  <h4 class="upper2">Overview</h4>

       	<div class="col-md-4">
			<p>
	Global team of more than 250 professionals dedicated to the financial services industry led by 50 Managing Directors located in nine countries
<br><br>
				Working across practice groups (restructuring, tax, performance improvement, valuation, transaction advisory, disputes and investigations) to leverage A&M’s specialized operational knowledge and expertise to provide actionable domestic and global solutions to our clients
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
Senior professionals have an average of 25+ years of experience
				</p>
			</div>
		  
		  <div class="col-md-4">
		<p>
Independently owned which keeps us free from audit conflict and provides flexibility on fee arrangements
			</p>
			</div>
		  
<!--/-->
      </div>
<!--====================================================-->
		<div class="tab-content atc-white">
			
			   <h4 class="upper2">Deep Sector Expertise  </h4>

       	<div class="col-md-4">
			<p>
		Banking and specialty finance
				<ul>
	<li>- 	In-depth assessment of credit lifecycle – impairment risks, deep accounting review, asset quality, regulatory examination/ enforcement impact</li>
</ul>

				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
Asset Management
				<ul>
	<li>- 	In-depth analysis of AUM to identify key trends, concentrations and changes driven by investment performance / asset flows</li>
</ul>
			  </p>
			</div>
		  
		  <div class="col-md-4">
	
			</div>
			
			</div>
		<!--====================================================-->
		<div class="tab-content atc-white-last">
			
			   <h4 class="upper2">Integrated Due Diligence Approach</h4>

       	<div class="col-md-4">
			<p>
<strong>Due Diligence Acquisition Support</strong><br><br>
				
				•	Acquisition Identification and Sourcing<br><br>
				•	Merger Integration / Carve-out Planning
				<ul>
					<li>- 	Day One / 100-Day Plan Development</li>
	<li>-	Carve-Out Planning and Execution</li>
	<li>-	Post-Merger Integration Execution</li>
	<li>-	PMO Planning</li>
					</ul>
				</p>
			<p>
	•	Buy Side Due Diligence
		<ul>
			
<li>-	Financial Due Diligence</li>
<li>-	Tax Due Diligence</li>
<li>-	Tax Structuring</li>
<li>-	Operational Due Diligence</li>
<li>-	IT Due Diligence</li>
<li>-	Pre-PPA Valuation Analysis</li>
<li>-	Human Capital Due Diligence</li>
<li>-	Regulatory Due Diligence</li>
			
			</ul>
			</p>
<p>
			•	Post Transaction Accounting Support
			</p>
			
			
			
			
			
			
			
			</div>
		  
		  <div class="col-md-4">
				<p>
<strong>Divestiture Support</strong><br><br>
				
				•	Private Sale: Sell-side Due Diligence
				<ul>
					<li>- 	Day One / 100-Day Plan Development</li>
<li>-	Transaction value enhancement</li>
<li>-	Process and risk management</li>
<li>-	Operational disruption mitigation</li>
					</ul>
				</p>
			<p>
	•	Public Offering: IPO Readiness
		<ul>
			
<li>-	IPO Readiness Assessment</li>
<li>-	Staff Education</li>
<li>-	IPO Preparation and Support</li>
<li>-	Accounting and Reporting Considerations Throughout Process</li>
			
			</ul>
			</p>
			</div>
		  
		  <div class="col-md-4">
			
			</div>
			
			</div>
		<!--====================================================-->
    </div>

		
<!--==========================================================-->
		
<!--/-->
					</div>
				
		
	
<!--/accordian==========================================-->	
	</div>
	</div>




<?php endwhile; else : ?>


<?php endif; ?>

<?php get_footer(8); ?>

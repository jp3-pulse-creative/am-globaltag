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
 * For more info: https://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(2); ?>
<style>
.who-we-serve-current a{border-bottom: 4px solid #00355F !important;}	
	.amgt-spacer {
		margin: 25px 0px 0px 0px;
	}
	#amtx-section-6e2{
		padding-top:0;
	}
.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-who-we-serve.jpg");
	overflow: hidden;
height: 556px;
	background-position: center;
		background-attachment: scroll;
	background-size: cover !important;
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
background: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-wws11.jpg") center top no-repeat;
		background-repeat: no-repeat !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	background-attachment: scroll;	
	background-position: center top;
			height: 80px;
	}
	.wws22 {
		position: relative;
		display: block;
background: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-wws22.jpg") center top no-repeat;
		background-repeat: no-repeat !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	background-attachment: scroll;	
	background-position: center top;
			height: 80px;
	}
	.wws33 {
		position: relative;
		display: block;
background: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-wws33.jpg") center top no-repeat;
		background-repeat: no-repeat !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	background-attachment: scroll;	
	background-position: center top;
			height: 80px;
	}
	.wws44 {
		position: relative;
		display: block;
background: url("<?php echo get_site_url(); ?>/wp-content/uploads/2018/08/back-wws44.jpg") center top no-repeat;
		background-repeat: no-repeat !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	background-attachment: scroll;	
	background-position: center top;
			height: 80px;
	}
	
	.wws11 h3, .wws22 h3, .wws33 h3, .wws44 h3 {
		margin-left: 20px;
margin-right: auto;
position: relative;
top: 50%;
transform: translateY(-50%);
font-family: 'Helvetica Neue LT W01_41488878';
	color: #fff;
		font-size: 25px;
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
font-family:'Helvetica Neue LT W01_41488878';
	color: #002b49;
		font-size: 25px;
		text-transform: uppercase;
		margin-left: 15px;
		margin-bottom: 20px;
	}
.blue .tab-content {
  background: #3498db;
}
.tab-content p {
/*margin: 0px 0px 20px 0px;*/
	margin: 0px 0px 20px 0px;
font-size: 14px;
text-align: left !important;
line-height: 1.3;
font-family: 'Helvetica Neue LT W01_65 Md';
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
top:50%;
transform:translateY(-50%);
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
		font-family: 'Helvetica Neue LT W01_65 Md';
		line-height:1.3;
		font-size:14px;
	}
	
	.tab-content ul {
		position: relative;
		display: block;
	margin: 0px 20px 20px 20px;
	}
	
	.tab-content ul.tabblockquote {
		margin: -10px 20px 0px 60px;
	}
	.tab-content ul li {
		list-style: disc !important;
		margin: 0px 0px 5px 0px;
	}
		
.amtx-6f-offset {
		padding: 0px !important;
	}
</style>
<style>
	@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px)
{
	
	#amtx-section-6f {
	margin-top: 15px;
	}
	
	#amtx-section-6c {
		display: none;
	}
	
	.wws11 h3, .wws22 h3, .wws33 h3, .wws44 h3 {
		font-size: 16px;
margin-left: auto;
margin-right: auto;
	}
	#amtx-single-header .tho-top-tl {
background-position: center 0px;
	background-size: cover !important;
		height: 364px !important;
	}
	label::after {
    bottom: 8px;
}
	.wws11 h3, .wws22 h3, .wws33 h3, .wws44 h3 {
		text-align: left;
padding-left: 8px;
	}
		#amtx-section-6 {
		/* height: 246px; */
	}
	#amtx-section-6f {
ppadding: 20px 20px 30px 20px !important;
	}	
	.amtx-back h1 {
		margin: 130px 0px 240px 0px;
		font-size: 35px;
	}
/*/*/
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
	<div class="container"><div class="row"><div class="col-xs-12">
<section id="promo-rsvp" class="content-block promo-rsvp tho-top-tl"> 
 
</section>
</div></div></div>
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


<div id="amtx-section-6f" class="amtx-6f-offset">
<div class="container">
	<p>
Our Global Transaction Advisory Group's integrated due diligence approach goes beyond traditional quality of earnings analyses and focuses on key value drivers for sponsors and lenders. Our global team has extensive industry knowledge across multiple sectors including, but not limited to, dedicated industry verticals in healthcare, software & technology, energy and financial services. Our dedicated industry verticals combine our transaction advisory, operational performance improvement and tax expertise into an integrated approach to help clients gain more insights, make better decisions and execute faster throughout the deal process.
	</p>
</div>
	</div>

<div id="amtx-section-6e2">
	<div class="container">
		
		<h2 class="amgt-spacer">Dedicated Industries We Serve</h2>
<!--accordian==========================================-->

	<div class="col-md-12">
		
    <div class="tab">
      <input id="tab-one" type="checkbox" name="tabs">
		
      <label for="tab-one"><div class="wws11"> <h3><img class="" src="<?php bloginfo('template_directory'); ?>/images/wws11-ico.png" border="0" /> Healthcare</h3></div></label>
			
      <div class="tab-content atc-blue atc-upper">
		  
		  <h4 class="upper2">Overview</h4>

       	<div class="col-md-6">
		
		<ul>
				
	<li>A&M's Integrated Healthcare practice combines world-class pre-acquisition financial accounting and operational diligence services with deep healthcare industry and post-acquisition advisory services.</li>
			
		<li>Our dedicated healthcare Transaction Advisory vertical has 	over 20 professionals providing financial accounting due diligence to private equity and corporate healthcare clients. </li>
				
				</ul>
			
			</div>
		  
		  <div class="col-md-6">
			
		<ul>
			<li>
		A&M's Healthcare Industry Group has over 150 dedicated healthcare industry professionals with deep operational, advisory and financial experience.
				</li>
			
			</ul>
			
			</div>
		  
	
		  
<!--/-->
      </div>
<!--====================================================-->
		<div class="tab-content atc-white">
			
			   <h4 class="upper2">Deep Sector Expertise  </h4>

       	<div class="col-md-4">
			<p><strong>
			Physician Practice Management <br><br>
Payors and Payor Services <br><br>
				Life Sciences<br><br>
				</strong>
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
				<strong>
		Hospital and Health Systems<br><br>
Home Health and Hospice<br><br>
Outsourcing
					</strong>
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p><strong>
			Long Term Care<br><br>
 Behavioral Health<br><br>
 Labs and Imaging
			</strong>
				</p>
			</div>
			
			</div>
		<!--====================================================-->
		<div class="tab-content atc-white-last">
			
			   <h4 class="upper2">Integrated Due Diligence Approach</h4>

       	<div class="col-md-6">
		
			<ul>
				<li>Assists clients in validating investment thesis.</li>
				<li>Provides comprehensive suite of complementary services for healthcare acquirers, including:</li>
			</ul>
			<ul class="tabblockquote">
	<li>Guidance on complex accounting issues.</li>
	<li>Transaction tax advice.</li>
	<li>Healthcare consulting services, including (but not limited to) operational improvement, interim management and strategy development and execution.</li>

 


				
				</ul>
		
			</div>
		  
		  <div class="col-md-6">
		
	<ul>
	<li>Monitor industry trends and translate changes in industry dynamics (reimbursement, product rollout and acceptance, 
	cost structure, etc.) </li>

				</ul>
			
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

       	<div class="col-md-6">
		
		<ul>
			<li>Dedicated Software & Technology Transaction Advisory vertical with deep sector experience working for private equity 
	and corporates investing in leading technology companies across a variety of industries including communications, logistics, ecommerce, fin tech, education, security, systems 	management, web-based services and more. </li>
			
			</ul>
			
			</div>
		  
		  <div class="col-md-6">
		
		<ul>
			<li>Enabled to provide our clients with the ability to quickly identify, diagnose and solve complex financial issues. </li>
			
			</ul>
				
			</div>
		  
	
		  
<!--/-->
      </div>
<!--====================================================-->
		<div class="tab-content atc-white">
			
			   <h4 class="upper2">Deep Sector Expertise  </h4>

       	<div class="col-md-4">
			<p>
				<strong>
	Data Processing & Outsourced Services <br><br>
Application Software<br><br>
Healthcare IT<br><br>
Security
					</strong>
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p>
				<strong>
					Systems Software<br><br>
Financial Technology<br><br>
Internet Software & Services<br><br>
Telecommunications Software
					</strong>
			  </p>
			</div>
		  
		  <div class="col-md-4">
			  <p>
				<strong>
		IT Consulting<br><br>
Payment Processing<br><br>
Learning Management Software (LMS)<br><br>
Home Entertainment Software
					</strong>
				  </p>
			</div>
			
			</div>
		<!--====================================================-->
		<div class="tab-content atc-white-last">
			
			   <h4 class="upper2">Integrated Due Diligence Approach</h4>

       	<div class="col-md-6">
		
		<ul>
			<li> Revenue Analyses</li>
			</ul>
			<ul class="tabblockquote">
				<li>Revenue Recognition/Customer Contract Review</li>
<li>Renewal rates (ARR, Customer Count, and Up-For-Renewal)</li>
<li>Cohorts</li>
<li>Bookings to Revenue to Cash Conversion Analysis</li>
<li>Forecast Gap Analysis</li>
				</ul>
<!--/-->
				<ul>
			<li> Operations</li>
			</ul>
			<ul class="tabblockquote">
				<li> Systems Review</li>
					<li>Carve-out / Standalone Cost Assessments</li>
					<li>Synergy Assessment</li>

				</ul>


			
			</div>
		  
		  <div class="col-md-6">
		
		<ul>
			<li>Margin / Cost Analyses </li>
			</ul>
			<ul class="tabblockquote">
			
<li> Standardized Gross Margin</li>
<li> Customer Acquisition Costs/Magic Number</li>
<li> Lifetime Value</li>
<li> Cash EBITDA</li>
				</ul>
			
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

       	<div class="col-md-6">
			
		<ul>
<li>Dedicated Transaction Advisory Energy vertical providing financial accounting due diligence to private equity and corporate energy clients across all significant sectors including upstream, midstream, downstream, energy services, equipment, and mining. </li>
			
			<li>
		Integrated approach combines world-class pre-acquisition financial accounting and operational diligence services with deep energy industry and post-acquisition advisory services. 
				</li>
			
			</ul>
				
			</div>
		  
		  <div class="col-md-6">
			
		<ul>
<li>Transaction Advisory Energy team also has extensive experience in Infrastructure serving both private equity and corporates investing power generation, utilities, rail, ports, shipping operations and more.</li>
			
			<li>
				Our integrated team of financial, operational, and advisory professionals rapidly assess the key issues (red flags or deal stoppers), identify areas of judgment and areas where further work is required.
				</li>
			</ul>
			
			</div>
		  

		  
<!--/-->
      </div>
<!--====================================================-->
		<div class="tab-content atc-white">
			
			   <h4 class="upper2">Deep Sector Expertise  </h4>

       	<div class="col-md-4">
			<p><strong>
		Upstream<br><br>
				Energy services<br><br>
				Power Generation<br><br>
				Rail<br><br>
				Vessel Operations
				</strong>
				</p>
			</div>
		  
		  <div class="col-md-4">
			<p><strong>
Midstream <br><br>
				Energy equipment<br><br>
				Alternative Power Producers<br><br>
				Ports 
				</strong>
			  </p>
			</div>
		  
		  <div class="col-md-4">
		<p><strong>
			Downstream <br><br>
			Mining <br><br>
			Utilities<br><br>
			Shipping Container 
			</strong>
			</p>
			</div>
			
			</div>
		<!--====================================================-->
		<div class="tab-content atc-white-last">
			
			   <h4 class="upper2">Integrated Due Diligence Approach</h4>

       	<div class="col-md-6">
		
<ul>
	<li>Pre-acquisition financial due diligence</li>
<li>Financial and potential IPO support</li>

	
	</ul>
			
			</div>
		  
		  <div class="col-md-6">
			
<ul>
	<li>IPO readiness</li>
	<li>Sell-side assistance and data room preparation </li>

	</ul>
			
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

       	<div class="col-md-6">
		
		<ul>
	<li>A&M's Global team of more than 250 professionals dedicated to the financial services industry led by 50 Managing Directors located in nine countries.</li>
			
		<li>Working across practice groups (restructuring, tax, performance improvement, valuation, transaction advisory, disputes and investigations) to leverage A&M’s specialized operational knowledge and expertise to provide actionable domestic and global solutions to our clients.</li>
			</ul>
				
			</div>
		  
		  <div class="col-md-6">
			
<ul>
		<li>Our dedicated Transaction Advisory Financial Industry Group provides financial accounting due diligence to private equity and corporate energy clients across all significant sectors including asset management, banking, specialty finance, fintech and insurance. </li>
	</ul>
			
			</div>
		  
		  
<!--/-->
      </div>
<!--====================================================-->
		<div class="tab-content atc-white">
			
			   <h4 class="upper2">Deep Sector Expertise  </h4>

       	<div class="col-md-4">
	<p>		
	<strong>Banking and Specialty Finance</strong>
		</p>
				<ul>
<li>Banks</li>
<li>Thrifts</li>
<li>Industrial Loan Companies</li>
<li>Credit Cards</li>
<li>Consumer Finance</li>
<li>Mortgage Banking</li>
<li>Commercial Finance Companies</li>
<li>Factoring</li>
<li>Leasing</li>
<li>Debt Collections</li>
		</ul>		
	
		  
			 
	<p>		
	<strong>Investment Management</strong>
		</p>
				<ul>
<li>Private Banking & Wealth Management</li>
<li>Mutual Fund Managers</li>
<li>Institutional Managers</li>
<li>Hedge Funds</li>
<li>Private Equity Funds</li>
<li>Real Estate Funds</li>
<li>Fund Administrators</li>
		</ul>		
			
			
			</div>
			
			
			
			
			  <div class="col-md-4">
			<p>		
	<strong>Brokerage & Exchanges</strong>
		</p>
				<ul>
<li>Investment Banks</li>
<li>Broker / Dealers</li>
<li>Stock Exchanges</li>
<li>ECNs</li>
<li>Trading Support</li>
<li>Clearing and Settlement Services</li>
		</ul>	
				  
				  	<p>		
<strong>Insurance</strong>
	</p>			
				<ul>
<li>Life, Health & Annuity</li>
<li>Property & Casualty</li>
<li>Reinsurance</li>
<li>Financial Guaranty (“Monolines”)</li>
<li>Excess & Surplus Lines</li>
<li>Insurance Brokerage</li>
<li>Specialty Insurers</li>
<li>Life Settlements</li>
<li>Captives</li>

		</ul>	
			
			</div>
<!--=====================-->
		  <div class="col-md-4">	
			
		
			
	<p>		
<strong>Financial Technology</strong>
	</p>			
				<ul>
<li>Payment Processing</li>
<li>Financial Software & Infrastructure</li>
<li>Securities Processing</li>
<li>Market Data Services</li>

		</ul>		
			
			</div>
<!--/--> 


 

			
			</div>
		<!--====================================================-->
		<div class="tab-content atc-white-last">
			
			   <h4 class="upper2">Integrated Due Diligence Approach</h4>

       	<div class="col-md-6">
			
<ul>
	<li>Pre-acquisition financial due diligence</li>
	<li>Financial and potential IPO support</li>
	</ul>
			

			</div>
		  
		  <div class="col-md-6">
				
<ul>
	<li>IPO readiness</li>
	<li>Sell-side assistance and data room preparation</li>
	</ul>
		
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

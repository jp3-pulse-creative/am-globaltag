<?php
/*
 Template Name: Corporate-M&A-Advisory-Services
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
    .what-we-do-current	a{border-bottom: 4px solid #00355F !important;}		
	.sub-menu li a:link, .sub-menu li a {border-bottom: 0px !important;}
	#amtx-section-comingsoon {
		position: relative;
		display: inline-block;
		width: 100%;
		margin: 0px auto 0px auto;
		padding: 100px 100px 100px 100px;
	}

.tho-top-tl{
	background-image: url("<?php echo get_site_url(); ?>/wp-content/uploads/2019/01/back-cta.jpg");
	overflow: hidden;
height: 670px;
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
    
	
	@media only screen
and (min-width : 320px)
and (max-width : 480px) {
	.tho-top-tl {
background-position: center;
	background-size: cover !important;
			height: 364px !important;
	}
.amtx-back h1 {
		margin: 118px 0px 240px 0px;
font-size: 35px;
line-height: 38px;
	}
	#amtx-section-6f {
padding: 60px 20px 30px 20px;
	}
	#amtx-section-6 {
		height: auto;
	}
	#amtx-section-6a {
    margin: -190px auto 0px auto !important;
}
	#amtx-section-6d {
margin: 330px 0px 0px 0px !important;
	padding: 60px 20px 30px 20px;
}
		#amtx-section-comingsoon {
		padding: 50px 20px 100px 20px;
	}
	
/*/*/
	}
    
    
   @media only screen  and (min-width : 1500px) and (max-width : 2400px) { 
    .container {
width: 1170px;
	padding:0 30px;
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

<div id="amtx-section-6" class="amgt-gta-height">
	<div class="container">
		
<div class="amtx-back">
	<h1>	<center>Corporate M&A Services</center></h1>
		</div>
	
		</div>
<!--/amtx-section-3a-->
		</div>

<div id="amgt-gm-5bb">
       <div class="container">
           
       <div class="col-md-4 amgt-no-pad">

              <div class="amgt-gm-5-head-team">
                
                   <!--<div class="col-md-12">
                       <div class="amgt-gm-5-ht-wrapper">
                        <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-barry.jpg" border="0" alt="" title=""/>

                      <h2>Paul Barry</h2>
<p>Managing Director & Co-Head North America Corporate M&A</p>
                       
                           </div>
                     </div>-->
                  <!--/end-->
                  
                    <!--<div class="col-md-12">
                           <div class="amgt-gm-5-ht-wrapper">
                          <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/team-huss.jpg" border="0" alt="" title=""/>

                      <h2>Faisel Hussein</h2>
<p>Managing Director & Co-Head North America Corporate M&A</p>
                               </div>
                       </div>-->
<!--/end-->
                        <div class="col-md-12">
                           <div class="amgt-gm-5-ht-wrapper">
                          <img class="amgt-team-pic" src="<?php bloginfo('template_url'); ?>/images/P_Aversano.jpg" border="0" alt="" title=""/>

                      <h2>Paul Aversano</h2>
<p>Managing Director & Global Practice Leader</p>
                               </div>
                       </div>
<!--/end-->
                  </div>
<!--/-->
           
           </div>    
           
             <div class="col-md-8">
                 <div class="amgt-gm-5bb2-content">
                 <p>
             A&M combines deep Financial, Tax and Operations services necessary for every type of M&A transaction (buy-side, sell-side, carve-out, cross-border, etc.). <br><br>
Our hands-on approach provides client with independent support for strategy, finance, tax, operations, HR, and IT. In addition, A&M works closely with external teams including investment banks, counsel, auditors, and others to maximize M&A transaction success.

                     </p>
                     </div>
           </div>    
           
           </div>
    </div>
<!--/-->

<div id="amgt-gta-2">
      <div class="container">
    <h4>SERVICE CAPABILITIES</h4>
    
    <p>A&M provides a flexible support model that allows clients to adjust services according to specific needs. Our robust service model combines operational, functional and industry expertise with financial accounting and tax services to maximize the value of every transaction.
</p>
        
        
    </div>
    </div>
<!--/-->

<div id="amgt-gta-3">
      <div class="container">
          
           <div class="amgt-gta-3-block amgt-blue1">
        
            <div class="col-md-5">
                    <div id="amgt-outer-9">
               <div class="amgt-gta-3-content">
                   
     <p>FLEXIBLE M&A SUPPORT MODEL</p><br>
                <p>
                    <strong>Being the Arms & Legs:</strong> Providing “extra bodies,” Predetermined Tasks, Largely “Client”-Directed, Weighted towards Junior Staff
<br><br>
<strong>Project Management:</strong> Workstream Coordination, Communication, Status-tracking & Reporting and Synergy Validation
<br><br>
<strong>Expert Advisory:</strong> Filling gaps with experience-based input, problem-solving with a functional/geographic focus
<br><br>
<strong>Leadership:</strong> Planning & Execution, Decision-making Authority, Accountability for Success

                    </p>
                </div>
               </div>
                 </div>
               
                 <div class="col-md-7 amgt-b13">
           
              </div>
          
          
          </div>
          
<!--==========-->
             <div class="amgt-gta-3-block amgt-blue2">
        
             <div class="col-md-7 amgt-b14">
              
                 </div>
                 
            <div class="col-md-5">
                <div id="amgt-outer-10">
                   <div class="amgt-gta-3-content">
                <p>OUR DIFFERENTIATORS</p>
                 <ul>
<li>More Insights; Better Decisions; Faster Execution</li>
<li>Increased Efficiency & Competitiveness</li>
<li>Improved Risk Identification &  Mitigation</li>
<li>Maximum Synergy Capture</li>
<li>Drive Value Creation  Throughout Transaction </li>

</ul>
                 </div>
                 </div>
                 </div>
                 
                  
                 
          </div>

          </div>
    </div>
<!--/-->

<div id="amgt-gta-6cc">
     <div class="container">
           <h4>THE Transaction Lifecycle</h4>
    
       <p>
             <img class="logo-ma-sm" src="<?php bloginfo('template_url'); ?>/images/logo-ma-sm.jpg" border="0" alt="" title=""/>
           A&M provides exceptional M&A support throughout the transaction lifecycle and works closely with external teams including investment banks, counsel, auditors, and others to maximize M&A transaction success.</p>
         
            
<!--=======================-->
         <div class="desktop-only">
     <div id="amgt-gta-6cc-b">
         
          <div id="gta6cc-table1">
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="31%" align="center" valign="middle" bgcolor="#002b49" class="gta6cc-leader1"><div class="gta6cc-title gtatt-1"><strong>Strategy +<br>
 Supporting Analysis</strong>
</div></td>
      <td width="16%" align="center" valign="middle" bgcolor="#002b49" class="gta6cc-leader2"><div class="gta6cc-title gtatt-2"><strong>Offer + Negotiation
</strong></div></td>
      <td width="16%" align="center" valign="middle" bgcolor="#002b49" class="gta6cc-leader3"><div class="gta6cc-title gtatt-3"><strong>Structuring +<br>
 Financing
</strong></div></td>
      <td width="17%" align="center" valign="middle" bgcolor="#002b49" class="gta6cc-leader4"><div class="gta6cc-title gtatt-4"><strong>Transaction Close
</strong></div></td>
      <td width="15%" align="center" valign="middle" bgcolor="#fff" class="gta6cc-leader5"><div class="gta6cc-title gtatt-5"><strong>Post-Close</strong></div></td>
    </tr>
  </tbody>
</table>
       </div>
         
         <hr class="gta6cc-hr">
         
          <div id="gta6cc-table2">
         <table width="92%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td width="12%" align="center" valign="middle" bgcolor="#4e8abe" class="gta6cc-cell"><div class="gta6cc-title"><strong>Financial</strong></div></td>
       <td width="16%" align="left" valign="top" bgcolor="#ccd4da" class="gta6cc-cell">
      <li class="gta6cc-list">Situation Analysis</li>
<li class="gta6cc-list">Due Diligence</li>
<li class="gta6cc-list">Quality of Earnings</li>

        </td>
        <td width="16%" align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
         <li class="gta6cc-list">Buy-Side Support</li>
<li class="gta6cc-list">Sell-Side Preparedness</li>
<li class="gta6cc-list">Pro Forma Support</li>
        </td>
      <td width="16%" align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
      <li class="gta6cc-list">Detailed Pro Forma</li>
<li class="gta6cc-list">Credit Metrics</li>
<li class="gta6cc-list">Equity Impacts</li>
        </td>
        <td width="16%" align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
        <li class="gta6cc-list">Purchase Allocation</li>
<li class="gta6cc-list">Accounting Entries</li>
<li class="gta6cc-list">Financial Metrics</li>
        </td>
       <td width="16%" align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
      <li class="gta6cc-list">Accounting</li>
<li class="gta6cc-list">W/C Adjustment</li>
<li class="gta6cc-list">Earn-out</li>
        </td>
    </tr>
    <tr>
      <td align="center" valign="middle" bgcolor="#4e8abe" class="gta6cc-cell"><div class="gta6cc-title"><strong>Tax</strong></div></td>
      <td align="left" valign="top" bgcolor="#e5e9ec" class="gta6cc-cell">
          <li class="gta6cc-list">Due Diligence</li>
<li class="gta6cc-list">Tax Modeling</li>

        </td>
      <td align="center" valign="middle" bgcolor="#e5e9ec" class="gta6cc-cell">
        <li class="gta6cc-list">Deal Value Planning</li>
<li class="gta6cc-list">LOI/SPA Assistance</li>
        </td>
      <td align="center" valign="middle" bgcolor="#e5e9ec" class="gta6cc-cell">
          <li class="gta6cc-list">Tax Optimization</li>
<li class="gta6cc-list">Structuring</li>
        </td>
      <td align="center" valign="middle" bgcolor="#e5e9ec" class="gta6cc-cell">
         <li class="gta6cc-list">Execution Advisory</li>
<li class="gta6cc-list">Purchase Allocation</li>
        </td>
      <td align="center" valign="middle" bgcolor="#e5e9ec" class="gta6cc-cell">
          <li class="gta6cc-list">Return Prep/Review</li>
<li class="gta6cc-list">Documentation</li>
        </td>
    </tr>
    <tr>
      <td align="center" valign="middle" bgcolor="#4e8abe" class="gta6cc-cell"><div class="gta6cc-title"><strong>Operations</strong></div></td>
      <td align="left" valign="top" bgcolor="#ccd4da" class="gta6cc-cell">
        <li class="gta6cc-list">Due Diligence</li>
<li class="gta6cc-list">Data Analytics</li>
<li class="gta6cc-list">Synergies</li>

        </td>
      <td align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
        <li class="gta6cc-list">TSA Support</li>
        </td>
      <td align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
       <li class="gta6cc-list">Define KPIs</li>
<li class="gta6cc-list">Milestones</li>
<li class="gta6cc-list">Day 1 Readiness</li>
        </td>
      <td align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
        <li class="gta6cc-list">Interim Leadership</li>
<li class="gta6cc-list">Integration/Separation  (e.g. PMI)</li>

        </td>
      <td align="center" valign="middle" bgcolor="#ccd4da" class="gta6cc-cell">
       <li class="gta6cc-list">Implementation</li>
        </td>
    </tr>
  </tbody>
</table>
         </div>
         
       </div>
             </div>
<!--=======================-->
<div class="mobile-only"> 
         
      <div id="amgt-gta-6cc-b">   
 <div class="container">
         
      <div class="col-md-12">
               <img class="ma-ico" src="<?php bloginfo('template_url'); ?>/images/ma-ico-1.svg" border="0" alt="" title=""/>
          <h5>Strategy + Supporting Analysis</h5>
 <span class="ma-mobile">We provide situation analysis, comprehensive due diligence, tax modeling, data analytics and synergy analysis.
</span>
          </div>
     
         <div class="col-md-12">
              <img class="ma-ico" src="<?php bloginfo('template_url'); ?>/images/ma-ico-2.svg" border="0" alt="" title=""/>
             <h5>Offer & Negotiation Support </h5>
        <span class="ma-mobile">We assist clients with buy-side support and sell-side preparedness ranging from pro forma financials to LOI/SPA assistance to TSA support. </span>
             
          </div>
     
       <div class="col-md-12">
              <img class="ma-ico" src="<?php bloginfo('template_url'); ?>/images/ma-ico-3.svg" border="0" alt="" title=""/>
             <h5> Structuring & Financing Support</h5>
 <span class="ma-mobile">We work closely with clients to establish detailed financial and operational considerations necessary to ensure seamless transition and Day 1 readiness planning. </span>
           
          </div>
     
       <div class="col-md-12">
              <img class="ma-ico" src="<?php bloginfo('template_url'); ?>/images/ma-ico-4.svg" border="0" alt="" title=""/>
             <h5>Transaction Close</h5>
             <span class="ma-mobile">We conduct purchase price allocation along with supporting tax/accounting assistance; in addition, we provide hands-on leadership to effect post-merger integration or carve-out support.</span>
           
          </div>
     
       <div class="col-md-12">
              <img class="ma-ico" src="<?php bloginfo('template_url'); ?>/images/ma-ico-5.svg" border="0" alt="" title=""/>
             <h5>Post-Close</h5>
              <span class="ma-mobile">We provide comprehensive post-close services including financial accounting, working capital adjustments, help with earn-outs, tax return preparation & review, tax documentation, and complete hands-on operations implementation.</span>
           
          </div>
     
     
     
     
     
         </div>
         </div>
         </div>
         
 </div>
    </div>
<!--=======================-->

<?php endwhile; else : ?>

<?php endif; ?>

<?php get_footer(8); ?>

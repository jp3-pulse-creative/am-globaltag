<?php
/* Template Name: CTG

*/
get_header(); ?>
<style>
    .ctg__leadership .headshot {
        width: 100%;
    }

    @media (min-width: 768px) {
        .ctg__leadership .headshot {
            max-width: 73% !important;
        }

        .col-border {
            position: relative;
        }

        .col-border::after {
            position: absolute;
            content: '';
            top: 0;
            left: 87.5%;
            height: 444px;
            width: 1px;
            background-color: #e5e5e5;
        }

    }

    @media (max-width: 600px) {
        .ctg .hero-row .hero-image {
            background-position: 71% top !important;
        }

    }
</style>
<div id="ctg" class="wrapper ctg">

    <div class="hero-row">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/ctg/ctg-hero.jpg);">
                    <h1><?php echo wp_kses_post(get_the_title()); ?><h1>
                </div>
            </div>
        </div>
    </div>

    <div id="ctg__intro" class="ctg__intro pepi-row">
        <div class="container">
            <div class="row">
                <div class="col-12 px-lg-0">
                    <h2 class="section-title">About CTG</h2>
                    <div class="short-border"></div>

                </div>
                <div class="col-12 col-lg-6 mb-3 mb-lg-0 pl-lg-0 pr-lg-3">
                    <p class="mb-0 pr-lg-5">
                        Alvarez and Marsal’s Corporate Transactions Group (CTG) is poised to disrupt the Mergers and Acquisitions (M&A) professional services landscape. By harnessing a worldwide network of data-driven, proactive, and operationally savvy experts, CTG is committed to elevating M&A value creation to new heights.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <p class="mb-0 pr-lg-5">
                        CTG delivers a full suite of M&A services including integrated due diligence and comprehensive integration and separation services to deliver value across the entire deal lifecycle. CTG is backed by the broader A&M organization that can uniquely offer interim management support and value realization post-close.
                    </p>
                </div>

            </div>
        </div>

    </div>

    <?php include(get_template_directory() . '/includes/ctg/why.php'); ?>
    <?php include(get_template_directory() . '/includes/ctg/value-capabilities.php'); ?>

    <?php include(get_template_directory() . '/includes/ctg/serice-tabs-4.php'); ?>





    <div id="ctg__leadership" class="ctg__leadership pepi-row">
        <div class="container h-100">
            <div class="row">
                <div class="col-12 px-lg-0">
                    <h2 class="section-title">Meet Our Leader</h2>
                    <div class="short-border"></div>

                </div>
            </div>
            <div class="row h-100">
                <div class="col-12 col-md-4 px-md-0 mb-3 mb-lg-0 col-border pt-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/ctg/AMTAG_Preston_Parker_headshot.jpg" alt="Preston Parker headshot" class="headshot img-fluid d-block mb-4">
                    <h3 class="name font-size-30 line-height-30">Preston Parker<span class="d-block position font-size-22 font-rom">Managing Director & <br>CTG Practice Leader</span></h3>


                </div>
                <div class="col-12 col-md-8 px-md-0 pt-5">
                    <p class="bio font-65-med font-size-22 line-height-26">
                        Preston Parker Is A Managing Director And U.S. Practice Leader Of Alvarez And Marsal’s Corporate Transactions Group In Washington, D.C.
                    </p>
                    <p class="bio font-size-18 line-height-26">
                        Mr. Parker Specializes In Advising Corporate Clients Through The Transaction Lifecycle, And Has Worked On Deals From $100 Million To $60 Billion In Size. His Primary Area Of Concentration Is Leading Complex Transactions And Transformations, Helping Clients Identify And Maximize Short- And Long-Term Value From Their Deals.
                    </p>
                    <p class="bio font-size-18 line-height-26">
                        With More Than 25 Years Of Deal Advisory And Strategy Experience, Mr. Parker Brings Expertise In Integration, Buy- And Sell-Side Carve-Out Transactions, Tax-Free Spins, Bankruptcy, Gaap To Ifrs Transitions, Sarbanes-Oxley Act (Sox) Compliance, Shared Services Implementation And Enterprise Software Implementations. He Has Worked With Clients Across Various Industries, Including Financial Services, Consumer Products, Life Sciences And Healthcare, Hospitality, Gaming And Diversified Industrial Markets.
                    </p>
                    <p class="bio font-size-18 line-height-26">
                        Prior To Joining A&M, Mr. Parker Spent 10 Years With Kpmg In Tysons Corner, Virginia, Where He Most Recently Served As Global Head Of The Deal Advisory And Strategy Integration & Separation Practice And Transactions To Transformations Leader In The U.S. During His Tenure, He Served Hundreds Of Clients Through Complex Transactions. 
                    </p>
                    <p class="bio font-size-18 line-height-26">
                        Notably, Mr. Parker Advised On The Global Separation Efforts Of A $16 Billion U.S. Multinational In The Divestiture Of Its Pharmaceutical Business Via A Tax-Free Spin; Led The Carve-Out Of A $5 Billion Multinational Manufacturing Business; Advised On The Acquisition Of A $4.5 Billion Utility; And Provided Transition Planning For A Buy-Side Carve-Out Of A $1 Billion Division Of A Large Healthcare Provider.
                    </p>
                    <p class="bio font-size-18 line-height-26">
                        Mr. Parker Earned A Bachelor’s Degree In Management Science And Information Technology From Virginia Tech And An Mba From Georgetown University’s Mcdonough School Of Business. He Has Served On Numerous Academic And Philanthropic Boards, Including Georgetown University Mcdonough School Of Business Advisory Board, Virginia Tech’s Pamplin College Of Business Finance Board And Wolf Trap Foundation’s Club 66 Board. He Is Also A Regular Speaker At Industry And M&A Forum Events.
                    </p>
                </div>

            </div>
        </div>

    </div>
    <?php include(get_template_directory() . '/includes/general/cta-banner-intelligence.php'); ?>

</div>


<?php get_footer(); ?>
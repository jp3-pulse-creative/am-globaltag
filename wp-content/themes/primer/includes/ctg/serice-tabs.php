<?php
// service tabs partial
// fully custom functionality - no using bootstrap tabs
?>
<style>
    #ctg__service-tabs {
        margin-top: -281px;
        position: relative;
        z-index: 1;
    }

    @media (min-width: 992px) {
        #ctg__service-tabs {
            margin-top: -239px;
            position: relative;
            z-index: 1;
        }
    }
</style>

<div id="ctg__service-tabs" class="service-tabs pepi-row">
    <div class="container">
        <div class="row">
            <div class="col-12 px-lg-0 d-flex flex-column align-items-center">
                <h2 class="section-title text-white text-center mb-4">Our Full Suite Of M&A Service Offerings</h2>
                <div class="short-border mx-auto bg-white mb-5"></div>

            </div>



        </div>
    </div>
    <div class="container-fluid container-md px-lg-0 px-md-3">
        <div class="row">

            <div class="service-tabs col-12 px-0">
                <div class="tabs">
                    <ul class="list-style-none m-0 p-0 d-flex flex-column flex-md-row align-items-center justify-content-center w-100">
                        <li id="buy-side-integration-services" class="tab tab__bright-blue text-uppercase font-bold-cd text-center mx-2 bg-bright-blue">
                            buy-side & integration services
                            <span class="caret-down">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.716" height="12.049" viewBox="0 0 19.716 12.049">
                                    <path id="Path_48038" data-name="Path 48038" d="M21.128,24.106l7.666-7.666,2.192,2.192-9.858,9.858L11.27,18.632l2.192-2.192Z" transform="translate(-11.27 -16.44)" fill="#fff" />
                                </svg>

                            </span>
                        </li>
                        <li id="sell-side-separation-services" class="tab tab__midnight-blue text-uppercase font-bold-cd text-center mx-2">
                            sell-side & separation services
                            <span class="caret-down">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.716" height="12.049" viewBox="0 0 19.716 12.049">
                                    <path id="Path_48038" data-name="Path 48038" d="M21.128,24.106l7.666-7.666,2.192,2.192-9.858,9.858L11.27,18.632l2.192-2.192Z" transform="translate(-11.27 -16.44)" fill="#fff" />
                                </svg>

                            </span>
                        </li>
                        <li id="value-realization" class="tab tab__purple text-uppercase font-bold-cd text-center mx-2">
                            value realization
                            <span class="caret-down">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.716" height="12.049" viewBox="0 0 19.716 12.049">
                                    <path id="Path_48038" data-name="Path 48038" d="M21.128,24.106l7.666-7.666,2.192,2.192-9.858,9.858L11.27,18.632l2.192-2.192Z" transform="translate(-11.27 -16.44)" fill="#fff" />
                                </svg>

                            </span>
                        </li>
                    </ul>
                </div>


            </div>



        </div>
    </div>
    <div class="tab-content">

        <div id="buy-side" class="tab-panel bg-bright-blue" data-tab-panel="buy-side-integration-services">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 left">
                        <ul class="list-style-none m-0 py-0 px-0 px-md-5">
                            <li>Acquisition Accounting</li>
                            <li>Deal Modeling & Evaluation</li>
                            <li>M&A Strategy Integration</li>
                            <li>Cost Analysis</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 right">
                        <ul class="list-style-none m-0 p-0">
                            <li>Integrated Due Diligence (Financial, Tax, Operations, Human Capital, Information Technology, etc.)</li>
                            <li>Transaction Analytics
                            </li>
                            <li>ISPA Assistance and Closing Working Capital review</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <div id="sell-side" class="tab-panel bg-midnight-blue" data-tab-panel="sell-side-separation-services">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 left">
                        <ul class="list-style-none m-0 py-0 px-0 px-md-5">
                            <li>Divestment Accounting</li>
                            <li>⁠Transaction Opinions</li>
                            <li>Separation Cost Analysis</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 right">
                        <ul class="list-style-none m-0 p-0">
                            <li>IPO Readiness</li>
                            <li>Managing Shareholder Activism</li>
                            <li>Integrated Due Diligence (Financial, Tax, Operations, Human Capital, Information Technology, etc.)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="value" class="tab-panel bg-purple" data-tab-panel="value-realization">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 left">
                        <ul class="list-style-none m-0 py-0 px-0 px-md-5">
                            <li>Deal Value Realization & Business Optimization
                            </li>
                            <li>Corporate Transformation
                            </li>
                            <li>Interim Leadership
                            </li>
                            <li>Financial Reporting
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 right">
                        <ul class="list-style-none m-0 p-0">
                            <li>Integration Management and PMO services
                            </li>
                            <li>M&A Lifecycle Performance Improvement
                            </li>
                            <li>Restructuring Enterprise Portfolios
                            </li>
                            <li>Outside-In Evaluations
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function() {
        $('.tab').click(function() {
            var id = $(this).attr('id');
            // Remove 'open' class from all panels
            $('.tab-panel').not('[data-tab-panel="' + id + '"]').removeClass('open');
            // Toggle 'open' class on the matching panel
            $('[data-tab-panel="' + id + '"]').toggleClass('open');
        });
    });
</script>
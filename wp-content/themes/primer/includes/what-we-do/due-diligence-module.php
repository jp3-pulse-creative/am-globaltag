<div id="what-we-do-due-diligence" class="what-we-do__due-diligence pepi-row pepi-row__mt">
    <div class="container">
        <div class="row">
            <div class="col-12 px-0 px-0">
                <div class="service-title">
                    <h1 class="section-title">DUE DILIGENCE</h1>
                    <div class="short-border"></div>
                </div>
            </div>
        </div>
        <div class="row bg-amblue align-items-center">
            <div id="buySide" class="col-md-6 d-flex flex-column flex-md-row align-items-center px-0">
                <div id="buySideImg" class="hover-image w-100 d-flex flex-column p-5">
                    <img class="mt-auto"
                        src="<?php echo get_template_directory_uri();?>/library/images/reboot/what-we-do/icon-cart.svg"
                        alt="icon shopping cart" width="51" heigth="52">
                    <h3>Buy-Side<br>Due Diligence</h3>
                </div>
                <ul class="hover-list hover-list__buy-side d-flex flex-column justify-content-center bg-amblue d-md-none w-100 p-5">

                <li>Financial Due Diligence </li>
                    <li>Tax Due Diligence</li>
                    <li>Tax Structuring</li>
                    <li>Commercial Due Diligence</li>
                    <li>Operational Due Diligence</li>
                    <li>IT Due Diligence</li>
                    <li>Pre PPA Analysis</li>
                    <li>Pricing Advisory</li>

                </ul>
                <ul id="sellSideList" class="d-none d-md-flex hover-list hover-list__sell-side flex-column justify-content-center bg-amblue pl-5">
                <li class="text-capitalize">vendor due diligence</li>
                    <li class="text-capitalize">capital markets & accounting advisory</li>
                    <li class="text-capitalize">ipo readiness</li>
                    <li class="text-capitalize">synergy assessment</li>
                    <li class="text-capitalize">cost take out planning</li>

                </ul>


            </div>
            <div id="sellSide" class="col-md-6 d-flex flex-column flex-md-row align-items-center px-0">
                <div id="sellSideImg" class="hover-image w-100 d-flex flex-column p-5">

                    <img class="mt-auto"
                        src="<?php echo get_template_directory_uri();?>/library/images/reboot/what-we-do/icon-price-tag.svg"
                        alt="icon price tag" width="54" heigth="54">
                    <h3>Sell-Side<br>Due Diligence</h3>

                </div>
                <ul class="d-md-none hover-list hover-list__sell-side d-flex flex-column justify-content-center bg-amblue p-5">
                <li>vendor due diligence</li>
                    <li>capital markets & accounting advisory</li>
                    <li>ipo readiness</li>
                    <li>synergy assessment</li>
                    <li>cost take out planning</li>

                </ul>
                <ul id="buySideList" class="d-none d-md-flex hover-list hover-list__buy-side flex-column justify-content-center bg-amblue pl-5">

                <li>Financial Due Diligence </li>
                    <li>Tax Due Diligence</li>
                    <li>Tax Structuring</li>
                    <li>Commercial Due Diligence</li>
                    <li>Operational Due Diligence</li>
                    <li>IT Due Diligence</li>
                    <li>Pre PPA Analysis</li>
                    <li>Pricing Advisory</li>

                </ul>

            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        $("#buySide").hover(function () {

 $("#buySideList").toggleClass('active');
 console.log('buySide is active');
        });

        $("#sellSide").hover(function () {

$("#sellSideList").toggleClass('active');
       });

    });
</script>
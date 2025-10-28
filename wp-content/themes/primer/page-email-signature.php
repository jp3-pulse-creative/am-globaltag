<?php /* Template Name: Email Signature */ ?>

<?php
/*
 * default page
 */
get_header(); ?>
<div class="w-100 d-flex justify-content-center align-items-center text-white mb-5" style="background: #00244A; padding: 150px 0; color: #ffffff;"><h1 class="text-white"><?php the_title(); ?></h1></div>
<div class="wrapper">
    <section class="content-module email-signature py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-black">Add your Name, Position, Phone numbers and Email.
                        <br>To avoid inconsistencies, capitalization must be entered correctly.
                        <br>Name and Title should be first letter capitalized.
                        <br>Email should be all lowercase.
                        <br>You can continue to make edits and click the "Update Signature" button to see the changes.
                        <br>Once the signature looks correct use the "Copy Signature" button to paste into your Outlook signature panel.
                        <br>You may need to adjust any link colors or underlines before you send within the signature panel.
                        <br>
                        <br>FOR MOBILE: on iPhone, after copy/paste shake your phone to "Undo change attributes", this will restore the coded formatting. You may have to delete space/line right below the address as well.
                    </p>
                </div>

                        <!-- <div class="lower"> -->
                            
                <div class="col-12 col-md-6 mt-5">
                    <!-- <div class="row align-items-center mt-5">
                        <div class="col-12 col-md-5 me-md-auto"> -->
                            <?php echo do_shortcode('[gravityform id="1" title="false"]') ?>
                            <button id="update-signature-button" class="submit">Update Signature</button>
                        <!-- </div>
                    </div> -->
                </div>

                <div class="col-12 col-md-6 pl-md-5 mt-5 mb-0 align-self-end table">
                    <div>
                        <table id="signature" border="0" cellspacing="0" cellpadding="0" style="font-family: Arial, sans-serif; color: #000000; font-size: 9pt; line-height: 12px; border-collapse: collapse; border-spacing: 0; width: 500px;" width="500">
                            <tbody>
                                <tr>
                                    <td style="padding: 0 20px 0 0; vertical-align: middle; border-collapse: collapse; border-spacing: 0; border-top: none; border-right: 2px solid #0084C7; border-bottom: none; border-left: none; width: 200px;" width="200" align="left">
                                        <img width="179" height="173" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/email-signature/am-tag-20thanniversary.png" alt="A&M Tag Logo" style="display: block; border: none; outline: none; text-decoration: none; max-width: 179px; height: auto;">
                                    </td>

                                    <td style="padding: 0 0 0 20px; border: none; width: 300px;" width="300" align="left">
                                        <table border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border-spacing: 0; width: 280px;" width="280">
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 0; font-family: Arial, sans-serif; font-size: 9pt; font-weight: 700; line-height: 12px; color: #00244A; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="margin: 0; font-family: Arial, sans-serif; font-size: 9pt; font-weight: 700; line-height: 12px; color: #00244A;" id="signature-name">Firstname Lastname</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 5px 0 0; font-family:  Arial, sans-serif; font-size: 9pt; line-height: 12px; font-weight: 700; color:#00244A; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="margin: 0; font-family: Arial, sans-serif; font-size: 9pt; line-height: 12px; font-weight: 700; color:#00244A;" id="signature-title">Position/Title</span>
                                                    </td>
                                                </tr>

                                               <tr>
                                                    <td style="padding: 20px 0 0; font-size: 9pt; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="margin: 0; font-family:  Arial, sans-serif; font-size: 9pt; line-height: 16px; font-weight: 700; color: #00244A;">Transaction Advisory</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 0; font-size: 9pt; font-weight: 400; line-height: 12px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                            <span style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">Direct (HK): </span>
                                                            <a id="signature-phone-one-link" href="tel:000-000-0000" style="text-decoration: underline !important; color: #558290 !important;"><span id="signature-phone-one" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #558290 !important;">000-000-0000</span></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 0; font-size: 9pt; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">Mobile (HK): </span>
                                                        <a id="signature-phone-two-link" href="tel:000-000-0000" style="text-decoration: underline !important; color: #558290 !important;"><span id="signature-phone-two" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #558290 !important;">000-000-0000</span></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 0; font-size: 9pt; font-weight: 400; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family:  Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">Mobile (PRC): </span>
                                                        <a id="signature-phone-three-link" href="tel:000-000-0000" style="text-decoration: underline !important; color: #558290 !important;"><span id="signature-phone-three" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #558290 !important;">000-000-0000</span></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 0; font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">email: </span> 
                                                        <a id="signature-email-link" href="mailto:person@domain.com.com" style="text-decoration: underline !important; color: #0084C7 !important;"><span id="signature-email" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #0084C7 !important;">person@domain.com</span></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 20px 0 0; font-family:  Arial, sans-serif; font-size: 9pt; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family: Arial, sans-serif; font-size: 9pt; line-height: 16px; font-weight: 700; color: #00244A;">Alvarez & Marsal</span>
                                                        <br>
                                                        <address style="margin: 0; font-family: Arial, sans-serif; font-size: 9pt; line-height: 16px; font-weight: 400; font-style: normal !important; color: #000000;">
                                                            14/F, St. George's Building <br>
                                                            2 Ice House Street <br>
                                                            Central, Hong Kong 
                                                        </address>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 0; font-family:  Arial, sans-serif; font-size: 11pt; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="margin: 0; font-family:  Arial, sans-serif; font-size: 11pt; line-height: 16px; "><a style="text-decoration: underline !important; color: #0084C7; !important;" href="https://alvarezandmarsal.com/" target="_blank" rel="noopener"><span style="font-family:  Arial, sans-serif; font-size: 11pt; line-height: 16px; color: #0084C7 !important;">www.alvarezandmarsal.com</span></a></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button class="copy-button" onclick="copySignature()">Copy Signature</button>  
                </div>
                    
            </div> <!-- /.row -->
        </div>
    </section>
</div>
<?php get_footer(); ?>


<script>
    function isValidURL(string) {
        try {
            new URL(string);
            return true;
        } catch (_) {
            return false;
        }
    }

    function stripURLParameters(url) {
        try {
            const parsedURL = new URL(url);
            return `${parsedURL.origin}${parsedURL.pathname}`;
        } catch (_) {
            return url;
        }
    }

    function stripEmailParameters(email) {
        try {
            const parsedEmail = new URL(`mailto:${email}`);
            return parsedEmail.pathname;
        } catch (_) {
            return email;
        }
    }

    function sanitizeInput(input, pattern) {
        return input ? input.replace(pattern, '') : '';
    }

    function updateSignature() {
        const namePattern = /[^a-zA-Z\s'-]/g;
        const titlePattern = /[^a-zA-Z\s,'&-]/g;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        let firstNameElement = document.getElementById('input_1_1_3'); // First Name
        let lastNameElement = document.getElementById('input_1_1_6'); // Last Name
        let titleElement = document.getElementById('input_1_3'); // Title
        let phoneOneElement = document.getElementById('input_1_5'); // Phone
        let phoneTwoElement = document.getElementById('input_1_6'); // Phone
        let phoneThreeElement = document.getElementById('input_1_7'); // Phone
        let emailElement = document.getElementById('input_1_8'); // Email
        // let linkedinElement = document.getElementById('input_3_5'); // LinkedIn

        if (!firstNameElement || !lastNameElement || !titleElement || !phoneOneElement || !phoneTwoElement || !phoneThreeElement || !emailElement) {
            alert('One or more form fields are missing.');
            return;
        }

        let firstName = firstNameElement.value;
        let lastName = lastNameElement.value;
        let name = `${firstName} ${lastName}`;
        let title = titleElement.value;
        let phoneOne = phoneOneElement.value;
        let phoneTwo = phoneTwoElement.value;
        let phoneThree = phoneThreeElement.value;
        let email = emailElement.value;

        name = sanitizeInput(name, namePattern);
        title = sanitizeInput(title, titlePattern);

        if (!emailPattern.test(email)) {
            alert('Invalid email address');
            return;
        }

        // if (isValidURL(linkedin)) {
        //     linkedin = stripURLParameters(linkedin);
        //     document.getElementById('signature-linkedin-url').href = linkedin;
        // } else {
        //     alert('Invalid LinkedIn URL');
        //     return;
        // }

        email = stripEmailParameters(email);

        document.getElementById('signature-name').textContent = name;
        document.getElementById('signature-title').textContent = title;
        document.getElementById('signature-phone-one').textContent = phoneOne;
        document.getElementById('signature-phone-one-link').href = `tel:${phoneOne}`;
        document.getElementById('signature-phone-two').textContent = phoneTwo;
        document.getElementById('signature-phone-two-link').href = `tel:${phoneTwo}`;
        document.getElementById('signature-phone-three').textContent = phoneThree;
        document.getElementById('signature-phone-three-link').href = `tel:${phoneThree}`;
        document.getElementById('signature-email').textContent = email;
        document.getElementById('signature-email-link').href = `mailto:${email}`;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const updateButton = document.getElementById('update-signature-button');
        updateButton.addEventListener('click', updateSignature);
    });

    function copySignature() {
        const signature = document.getElementById('signature');
        const range = document.createRange();
        range.selectNode(signature);
        window.getSelection().removeAllRanges(); // Clear any existing selections
        window.getSelection().addRange(range);
        try {
            document.execCommand('copy');
            alert('Signature copied to clipboard!');
        } catch (err) {
            alert('Failed to copy signature. Please try again.');
        }
        window.getSelection().removeAllRanges(); // Clear the selection
    }
</script>
<?php get_footer(); ?>
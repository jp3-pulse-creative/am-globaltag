<?php /* Template Name: Email Signature Stacked Region */ ?>

<?php
/*
 * default page
 */
get_header();

//if url includes /staging/ id = 3 else id = 2
if (strpos($_SERVER['REQUEST_URI'], '/staging/') !== false) {
    $form_id = 3;
} else {
    $form_id = 2;
}
?>
<div class="w-100 d-flex justify-content-center align-items-center text-white mb-5" style="background: #00244A; padding: 150px 0; color: #ffffff;">
    <h1 class="text-white"><?php the_title(); ?></h1>
</div>

<div class="wrapper">
    <section class="content-module email-signature py-5 mb-5">
        <div class="container">
            <div class="row">

                <?php /* if (post_password_required()) { ?>
                <div class="col-12 password-input"><?php echo get_the_password_form(); ?></div>
            <?php } else { */ ?>
                <div class="col-12">
                    <p class="text-black">Add your Name, Position, Phone numbers and Email.
                        <br>To avoid inconsistencies, capitalization must be entered correctly.
                        <br>Name and Title should be first letter capitalized.
                        <br>Email should be all lowercase.
                        <br>
                        <br>You can continue to make edits and click the "Update Signature" button to see the changes.
                        <br>Once the signature looks correct use the "Copy Signature" button to paste into your Outlook signature panel.
                        <br>You may need to adjust any link colors or underlines before you send within the signature panel.
                        <br>
                        <br>FOR MOBILE: <br><strong>on iOS Mail app,</strong> after copy/paste shake your phone to "Undo change attributes", this will restore the coded formatting. You may have to delete space/line right below the address as well.
                        <br><strong>on Android,</strong> long press to get the paste command

                    </p>
                </div>

                <!-- <div class="lower"> -->

                <div class="col-12 col-md-6 mt-5">
                    <!-- <div class="row align-items-center mt-5">
                        <div class="col-12 col-md-5 me-md-auto"> -->
                    <?php


                    echo do_shortcode('[gravityform id="' . $form_id . '" title="false"]')

                    ?>
                    <button id="update-signature-button" class="submit">Update Signature</button>
                    <!-- </div>
                    </div> -->
                </div>

                <div class="col-12 col-md-6 pl-md-5 mt-5 mb-0 align-self-end table">
                    <div>
                        <table id="signature" border="0" cellspacing="0" cellpadding="0" style="font-family: Arial, sans-serif; color: #000000; font-size: 9pt; line-height: 12px; border-collapse: collapse; border-spacing: 0;">
                            <tbody>
                                <tr>


                                    <td style="padding: 0; border: none;" align="left">
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



                                                <tr id="phone-one">
                                                    <td style="padding: 0; font-size: 9pt; font-weight: 400; line-height: 12px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">Direct: </span>
                                                        <a id="signature-phone-one-link" href="tel:000-000-0000" style="text-decoration: underline !important; color: #558290 !important;"><span id="signature-phone-one" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #558290 !important;">000-000-0000</span></a>
                                                    </td>
                                                </tr>

                                                <tr id="phone-two">
                                                    <td style="padding: 0; font-size: 9pt; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">Mobile: </span>
                                                        <a id="signature-phone-two-link" href="tel:000-000-0000" style="text-decoration: underline !important; color: #558290 !important;"><span id="signature-phone-two" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #558290 !important;">000-000-0000</span></a>
                                                    </td>
                                                </tr>

                                                <tr id="phone-three">
                                                    <td style="padding: 0; font-size: 9pt; font-weight: 400; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family:  Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">Mobile: </span>
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
                                                    <td style="padding: 0; font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">website: </span>
                                                        <a id="signature-website-link" href="http://am-globaltag.com" target="_blank" style="text-decoration: underline !important; color: #0084C7 !important;"><span id="signature-website" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #0084C7 !important;">am-globaltag.com</span></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td style="padding: 20px 0 0; font-family:  Arial, sans-serif; font-size: 9pt; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                                                        <span style="font-family: Arial, sans-serif; font-size: 9pt; line-height: 16px; font-weight: 700; color: #00244A;">Alvarez & Marsal</span>
                                                        <address style="margin: 0; font-family: Arial, sans-serif; font-size: 9pt; line-height: 16px; font-weight: 400; font-style: normal !important; color: #000000;">
                                                            <span id="signature-address-line-one" style="margin: 0; font-family: Arial, sans-serif; font-size: 9pt; line-height: 16px; font-weight: 400; font-style: normal !important; color: #000000;">14/F, St. George's Building</span> <br>
                                                            <span id="signature-address-line-two" style="margin: 0; font-family: Arial, sans-serif; font-size: 9pt; line-height: 16px; font-weight: 400; font-style: normal !important; color: #000000;">2 Ice House Street</span> <br>
                                                            <span id="signature-address-line-three" style="margin: 0; font-family: Arial, sans-serif; font-size: 9pt; line-height: 16px; font-weight: 400; font-style: normal !important; color: #000000;">Central, Hong Kong</span>
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
                                <tr>
                                    <td style="padding:0; vertical-align: middle; border-collapse: collapse; border-spacing: 0; border-top: none; border: none; border-bottom: none; border-left: none;" align="left">
                                        <br><br><br><br><img width="168" height="auto" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/email-signature/am-tag-20thanniversary.png" alt="A&M Tag Logo" style="display: block; border: none; outline: none; text-decoration: none; width: 168px; max-width: 168px; height: auto;">
                                    </td>


                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button class="copy-button" onclick="copySignature()">Copy Signature</button>
                </div>
                <?php /* } */ ?>
            </div> <!-- /.row -->
        </div>
    </section>
</div>

<!-- Password Protection Overlay (no loader) -->
<div class="pw-protect-overlay position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-white" id="pw-protect-overlay" style="z-index:99999;background-color: rgba(0, 0, 0, 0.9);">
    <form id="pw-form" class="text-center bg-transparent position-relative z-3">
        <p class="text-white mb-4">Please present the password for entry:</p>
        <input type="password" id="pw-input" style="color: #000000;padding:0.5rem;font-size:1.2rem;border-radius:0px;border:none;" placeholder="password" autocomplete="off" />
        <br>
        <button type="submit" class="btn btn-xl mt-4 rounded-0 text-lightest">Submit</button>
        <div id="pw-error" class="mt-3 d-none text-12" style="color: red !important;">Incorrect password. Try again.</div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var pwOverlay = document.getElementById('pw-protect-overlay');
        var pwForm = document.getElementById('pw-form');
        var validated = false;

        document.body.classList.add('overflow-hidden');

        // Password validation (3 days)
        var timeoutHours = 72;
        var now = Date.now();
        var validTimestamp = localStorage.getItem('amglobaltag_pw_valid_time');
        var isValid = localStorage.getItem('amglobaltag_pw_valid') === '1' && validTimestamp && (now - parseInt(validTimestamp, 10)) < timeoutHours * 60 * 60 * 1000;

        if (isValid) {
            pwOverlay.classList.add('hide');
            document.body.classList.remove('overflow-hidden');
            return;
        } else {
            localStorage.removeItem('amglobaltag_pw_valid');
            localStorage.removeItem('amglobaltag_pw_valid_time');
        }

        if (pwForm) {
            pwForm.addEventListener('submit', function(e) {
                e.preventDefault();
                var pwInput = document.getElementById('pw-input');
                var pwError = document.getElementById('pw-error');
                var password = pwInput.value.trim();
                if (password === 'pulsepowered') {
                    pwOverlay.classList.add('hide');
                    if (!validated) {
                        validated = true;
                        localStorage.setItem('amglobaltag_pw_valid', '1');
                        localStorage.setItem('amglobaltag_pw_valid_time', Date.now().toString());
                        document.body.classList.remove('overflow-hidden');
                    }
                } else {
                    pwError.classList.remove('d-none');
                    pwInput.value = '';
                    pwInput.focus();
                }
            });
        }
    });
</script>

<style>
    .pw-protect-overlay {
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto;
        transition: none !important;
        top: 0;
    }

    .pw-protect-overlay.hide {
        opacity: 0 !important;
        visibility: hidden !important;
        pointer-events: none;
    }

    .pw-protect-overlay button {
        text-align: center;
        margin-top: 30px;
        font-size: 17px;
        font-weight: 900;
        text-transform: uppercase;
        transition: .15s linear;
        color: white;
        background: #002549;
        padding: 5px 19px;
        border: 1px solid #002549;

    }

    .pw-protect-overlay button:hover {
        opacity: 0.8;
        color: #ffffff;
    }

    .pw-protect-overlay input::placeholder {
        color: #000000;
    }
</style>


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

        // need to adjust per form field IDs



        let firstNameElement = document.getElementById('input_<?php echo $form_id; ?>_1_3'); // First Name
        let lastNameElement = document.getElementById('input_<?php echo $form_id; ?>_1_6'); // Last Name
        let titleElement = document.getElementById('input_<?php echo $form_id; ?>_3'); // Title
        let phoneOneElement = document.getElementById('input_<?php echo $form_id; ?>_5'); // Phone 1
        let phoneTwoElement = document.getElementById('input_<?php echo $form_id; ?>_6'); // Phone 2
        let phoneThreeElement = document.getElementById('input_<?php echo $form_id; ?>_7'); // Phone 3
        let emailElement = document.getElementById('input_<?php echo $form_id; ?>_8'); // Email
        let addressLineOneElement = document.getElementById('input_<?php echo $form_id; ?>_10'); // Address
        let addressLineTwoElement = document.getElementById('input_<?php echo $form_id; ?>_11'); // Address Line 2
        let addressLineThreeElement = document.getElementById('input_<?php echo $form_id; ?>_12'); // Address Line 3

        if (!firstNameElement || !lastNameElement || !titleElement || !phoneOneElement || !emailElement || !addressLineOneElement || !addressLineTwoElement || !addressLineThreeElement) {
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
        let addressLineOne = addressLineOneElement.value;
        let addressLineTwo = addressLineTwoElement.value;
        let addressLineThree = addressLineThreeElement.value;

        name = sanitizeInput(name, namePattern);
        title = sanitizeInput(title, titlePattern);

        if (!emailPattern.test(email)) {
            alert('Invalid email address');
            return;
        }

        email = stripEmailParameters(email);

        document.getElementById('signature-name').textContent = name;
        document.getElementById('signature-title').textContent = title;

        // Get the table body to insert rows
        const tableBody = document.querySelector('#signature tbody table tbody');

        // Handle phone one with region
        let phoneOneRegionElement = document.getElementById('input_3_13'); // Phone 1 Region
        let phoneOneRegion = phoneOneRegionElement ? phoneOneRegionElement.value : '';
        if (phoneOne && phoneOne.trim() !== '') {
            let phoneOneRow = document.getElementById('phone-one');
            let label = 'Direct';
            if (phoneOneRegion && phoneOneRegion.trim() !== '') {
                label += ` (${phoneOneRegion})`;
            }
            if (!phoneOneRow) {
                // Create the row if it doesn't exist
                phoneOneRow = document.createElement('tr');
                phoneOneRow.id = 'phone-one';
                phoneOneRow.innerHTML = `
                    <td style="padding: 0; font-size: 9pt; font-weight: 400; line-height: 12px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                        <span style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">${label}: </span>
                        <a id="signature-phone-one-link" href="tel:${phoneOne}" style="text-decoration: underline !important; color: #558290 !important;"><span id="signature-phone-one" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #558290 !important;">${phoneOne}</span></a>
                    </td>
                `;
                // Insert after the Transaction Advisory row (3rd row)
                const transactionRow = tableBody.children[2];
                tableBody.insertBefore(phoneOneRow, transactionRow.nextSibling);
            } else {
                document.getElementById('signature-phone-one').textContent = phoneOne;
                document.getElementById('signature-phone-one-link').href = `tel:${phoneOne}`;
                // Update label
                phoneOneRow.querySelector('span').textContent = `${label}: `;
            }
        } else {
            const phoneOneRow = document.getElementById('phone-one');
            if (phoneOneRow) {
                phoneOneRow.remove();
            }
        }

        // Handle phone two with region
        let phoneTwoRegionElement = document.getElementById('input_3_14'); // Phone 2 Region
        let phoneTwoRegion = phoneTwoRegionElement ? phoneTwoRegionElement.value : '';
        if (phoneTwo && phoneTwo.trim() !== '') {
            let phoneTwoRow = document.getElementById('phone-two');
            let label = 'Mobile';
            if (phoneTwoRegion && phoneTwoRegion.trim() !== '') {
                label += ` (${phoneTwoRegion})`;
            }
            if (!phoneTwoRow) {
                // Create the row if it doesn't exist
                phoneTwoRow = document.createElement('tr');
                phoneTwoRow.id = 'phone-two';
                phoneTwoRow.innerHTML = `
                    <td style="padding: 0; font-size: 9pt; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                        <span style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">${label}: </span>
                        <a id="signature-phone-two-link" href="tel:${phoneTwo}" style="text-decoration: underline !important; color: #558290 !important;"><span id="signature-phone-two" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #558290 !important;">${phoneTwo}</span></a>
                    </td>
                `;
                // Insert after phone-one if it exists, otherwise after Transaction Advisory row
                const phoneOneRow = document.getElementById('phone-one');
                const insertAfter = phoneOneRow || tableBody.children[2];
                tableBody.insertBefore(phoneTwoRow, insertAfter.nextSibling);
            } else {
                document.getElementById('signature-phone-two').textContent = phoneTwo;
                document.getElementById('signature-phone-two-link').href = `tel:${phoneTwo}`;
                // Update label
                phoneTwoRow.querySelector('span').textContent = `${label}: `;
            }
        } else {
            const phoneTwoRow = document.getElementById('phone-two');
            if (phoneTwoRow) {
                phoneTwoRow.remove();
            }
        }

        // Handle phone three with region
        let phoneThreeRegionElement = document.getElementById('input_3_15'); // Phone 3 Region
        let phoneThreeRegion = phoneThreeRegionElement ? phoneThreeRegionElement.value : '';
        if (phoneThree && phoneThree.trim() !== '') {
            let phoneThreeRow = document.getElementById('phone-three');
            let label = 'Mobile';
            if (phoneThreeRegion && phoneThreeRegion.trim() !== '') {
                label += ` (${phoneThreeRegion})`;
            }
            if (!phoneThreeRow) {
                // Create the row if it doesn't exist
                phoneThreeRow = document.createElement('tr');
                phoneThreeRow.id = 'phone-three';
                phoneThreeRow.innerHTML = `
                    <td style="padding: 0; font-size: 9pt; font-weight: 400; line-height: 16px; border: none !important; border-collapse: collapse; border-spacing: 0; height: auto; width: 280px;" width="280" align="left">
                        <span style="font-family:  Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; color: #000000 !important;">${label}: </span>
                        <a id="signature-phone-three-link" href="tel:${phoneThree}" style="text-decoration: underline !important; color: #558290 !important;"><span id="signature-phone-three" style="font-family: Arial, sans-serif; font-size: 9pt; font-weight: 400; line-height: 16px; text-decoration: underline !important; color: #558290 !important;">${phoneThree}</span></a>
                    </td>
                `;
                // Insert after phone-two if it exists, otherwise after phone-one, otherwise after Transaction Advisory row
                const phoneTwoRow = document.getElementById('phone-two');
                const phoneOneRow = document.getElementById('phone-one');
                const insertAfter = phoneTwoRow || phoneOneRow || tableBody.children[2];
                tableBody.insertBefore(phoneThreeRow, insertAfter.nextSibling);
            } else {
                document.getElementById('signature-phone-three').textContent = phoneThree;
                document.getElementById('signature-phone-three-link').href = `tel:${phoneThree}`;
                // Update label
                phoneThreeRow.querySelector('span').textContent = `${label}: `;
            }
        } else {
            const phoneThreeRow = document.getElementById('phone-three');
            if (phoneThreeRow) {
                phoneThreeRow.remove();
            }
        }

        document.getElementById('signature-email').textContent = email;
        document.getElementById('signature-email-link').href = `mailto:${email}`;
        document.getElementById('signature-address-line-one').textContent = addressLineOne;
        document.getElementById('signature-address-line-two').textContent = addressLineTwo;
        document.getElementById('signature-address-line-three').textContent = addressLineThree;
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
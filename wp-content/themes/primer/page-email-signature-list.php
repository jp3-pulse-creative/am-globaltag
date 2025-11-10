<?php /* Template Name: Email Signature List */ ?>

<?php
/*
 * default page
 */
get_header();


$form_id = 3;


// Force hard refresh and prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<?php
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
                        <br>FOR MOBILE: <br>Copy/Paste with device in <strong>Landscape orientation</strong> to maintain formatting/sizing consistency<br><strong>on iOS Mail app,</strong> after copy/paste shake your phone to "Undo change attributes", this will restore the coded formatting. You may have to delete space/line right below the address as well.
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
                        <span>
                            <table id="signature" border="0" cellspacing="0" cellpadding="0" style="font-family: Arial, sans-serif; color: #000000; font-size: 12px; line-height: 14px; border-collapse: collapse; border-spacing: 0; width: 768px;">
                                <tbody>
                                    <tr>
                                        <!-- Added class logo-cell for reliable width control across email clients -->
                                        <td class="logo-cell" style="padding: 0; vertical-align: middle; border-collapse: collapse; border-spacing: 0; border-top: none; border-bottom: none; border-left: none; width: 190px;">
                                            <table border="0" cellspacing="0" cellpadding="0" width="168" style="border-collapse: collapse; border-spacing: 0; width:168px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 0;  border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                            <img width="168" height="auto" src="https://pulsecreative-clients.com/staging/amglobaltag/wp-content/themes/primer/library/images/email-signature/am-tag-20thanniversary.png" alt="A&amp;M Tag Logo" style="display:block; border:none; outline:none; text-decoration:none; width:168px; height:auto;">
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </td>
                                        <td style="vertical-align: middle;padding: 0; border: none; width: 578px;" align="left">
                                            <table border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border-spacing: 0; width: 100%; border-left:2px solid #0084C7;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 100%; padding: 0 0 0 20px; font-family: Arial, sans-serif; font-size: 12px; font-weight: 700; line-height: 14px; color: #00244A; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                            <table border="0" cellspacing="0" cellpadding="0" style="width: 100%; border-collapse: collapse; border-spacing: 0;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 100%; padding: 0; font-family: Arial, sans-serif; font-size: 12px; font-weight: 700; line-height: 14px; color: #00244A; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="margin: 0; font-family: Arial, sans-serif; font-size: 12px; font-weight: 700; line-height: 14px; color: #00244A;" id="signature-name">John Jacob Jingleheimer Schmidt<br>你好</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 100%; padding: 0 0 16px; font-family:  Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: 700; color:#00244A; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="margin: 0; font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: 700; color:#00244A;" id="signature-title">Managing Director and Global Head of Web Operations</span>
                                                                        </td>
                                                                    </tr>




                                                                    <!-- Example phone rows (placeholders) will be shown initially; real rows will replace them on Update -->
                                                                    <tr class="phone-placeholder">
                                                                        <td style="width: 100%; padding: 0; font-size: 12px; font-weight: 400; line-height: 12px; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important;">Mobile (UK): </span>
                                                                            <a href="tel:+442079460958" style="text-decoration: underline !important; color: #0084C7 !important;"><span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">+44 20 7946 0958</span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="phone-placeholder">
                                                                        <td style="width: 100%; padding: 0; font-size: 12px; font-weight: 400; line-height: 12px; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important;">Office (HK): </span>
                                                                            <a href="tel:+85212345678" style="text-decoration: underline !important; color: #0084C7 !important;"><span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">+852 1234 5678</span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="phone-placeholder">
                                                                        <td style="width: 100%; padding: 0; font-size: 12px; font-weight: 400; line-height: 12px; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important;">eFax (US): </span>
                                                                            <a href="tel:+12125551234" style="text-decoration: underline !important; color: #0084C7 !important;"><span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">+1 212-555-1234</span></a>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 100%; padding: 0; font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important;">Email: </span>
                                                                            <a id="signature-email-link" href="mailto:person@domain.com.com" style="text-decoration: underline !important; color: #0084C7 !important;"><span id="signature-email" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">person@domain.com</span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 100%; padding: 0; font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important;">Website: </span>
                                                                            <a id="signature-website-link" href="http://am-globaltag.com" target="_blank" style="text-decoration: underline !important; color: #0084C7 !important;"><span id="signature-website" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">am-globaltag.com</span></a>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 100%; padding: 20px 0 0; font-family:  Arial, sans-serif; font-size: 12px; line-height: 14px; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: 700; color: #00244A;">Alvarez & Marsal</span>
                                                                            <address id="signature-address-container" style="margin: 0; font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: 400; font-style: normal !important; color: #000000;">
                                                                                <span id="signature-address-block" style="margin:0; font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight:400; font-style:normal !important; color:#000000;">14/F, St. George's Building<br>2 Ice House Street<br>Central, Hong Kong</span>
                                                                            </address>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 100%; padding: 0; font-family:  Arial, sans-serif; font-size: 11pt; line-height: 14px; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="margin: 0; font-family:  Arial, sans-serif; font-size: 11pt; line-height: 14px; "><a style="text-decoration: underline !important; color: #0084C7 !important;" href="https://alvarezandmarsal.com/" target="_blank" rel="noopener"><span style="font-family:  Arial, sans-serif; font-size: 11pt; line-height: 14px; color: #0084C7 !important;">www.alvarezandmarsal.com</span></a></span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </span>

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

        // Force password entry every time - no localStorage caching
        // Clear any existing localStorage values
        localStorage.removeItem('amglobaltag_pw_valid');
        localStorage.removeItem('amglobaltag_pw_valid_time');

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
                        // No localStorage storage - password required every visit
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

    // Normalize a phone number for tel: link usage
    function normalizePhoneForTel(number) {
        if (!number) return '';
        let n = number.trim();
        if (n.startsWith('00')) {
            n = '+' + n.slice(2);
        }
        n = n.replace(/[^+\d]/g, '');
        return n;
    }

    function updateSignature() {
        console.log('updateSignature function called');

        const namePattern = /[^a-zA-Z\s'-]/g;
        const titlePattern = /[^a-zA-Z\s,'&-]/g;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Name input: prefer a multiline textarea (GF field id 22), fallback to legacy First/Last subfields
        const nameFieldId = 22; // UPDATE if your Name textarea uses a different ID
        let nameElement = document.getElementById(`input_<?php echo $form_id; ?>_${nameFieldId}`); // Name - Textarea
        let firstNameElement = document.getElementById('input_<?php echo $form_id; ?>_1_3'); // First Name (legacy)
        let lastNameElement = document.getElementById('input_<?php echo $form_id; ?>_1_6'); // Last Name (legacy)
        // let titleElement = document.getElementById('input_<?php echo $form_id; ?>_3'); // Title - Text Input
        let titleElement = document.getElementById('input_<?php echo $form_id; ?>_19'); // Title - Textarea

        // Auto-detect Gravity Forms List field rows directly from DOM (columns expected: Label, Region, Number)
        const formId = <?php echo $form_id; ?>;
        const listFieldId = 20; // UPDATE if your List field uses a different ID
        const listFieldWrapper = document.getElementById(`field_${formId}_${listFieldId}`);
        let emailElement = document.getElementById('input_<?php echo $form_id; ?>_8'); // Email
        let addressElement = document.getElementById('input_<?php echo $form_id; ?>_21'); // Address textarea (multi-line)

        if (!titleElement || !emailElement || !addressElement) {
            alert('One or more form fields are missing.');
            return;
        }

        // Resolve name from textarea or legacy first/last
        let name = '';
        if (nameElement && nameElement.tagName && nameElement.tagName.toLowerCase() === 'textarea') {
            name = nameElement.value || '';
        } else if (firstNameElement && lastNameElement) {
            let firstName = firstNameElement.value || '';
            let lastName = lastNameElement.value || '';
            name = `${firstName} ${lastName}`.trim();
        }
        let title = titleElement.value;
        // Collect additional phones from GF List field markup (auto-detect rows/columns)
        const additionalPhones = [];
        if (listFieldWrapper) {
            const rows = listFieldWrapper.querySelectorAll('table.gfield_list tbody tr, .gfield_list_groups .gfield_list_group');
            rows.forEach(row => {
                let label = '';
                let region = '';
                let number = '';

                const labelInput = row.querySelector('.gfield_list_cell[data-label*="Phone Label"] input, input[aria-label^="Phone Label"], input[placeholder*="Label"]');
                const regionInput = row.querySelector('.gfield_list_cell[data-label*="Phone Region"] input, input[aria-label^="Phone Region"], input[placeholder*="Region"]');
                const numberInput = row.querySelector('.gfield_list_cell[data-label*="Phone Number"] input, input[aria-label^="Phone Number"], input[placeholder*="Phone"], input[placeholder*="Number"]');

                if (labelInput) label = (labelInput.value || '').trim();
                if (regionInput) region = (regionInput.value || '').trim();
                if (numberInput) number = (numberInput.value || '').trim();

                if (!number) {
                    const inputs = Array.from(row.querySelectorAll('input, textarea'));
                    if (inputs.length) {
                        label = label || (inputs[0]?.value || '').trim();
                        region = region || (inputs[1]?.value || '').trim();
                        number = number || (inputs[2]?.value || inputs[inputs.length - 1]?.value || '').trim();
                    }
                }

                if (!label && !region && !number) return;
                if (number) {
                    if (!label) label = 'Phone';
                    additionalPhones.push({
                        label,
                        region,
                        number
                    });
                }
            });
        }
        let email = emailElement.value;
        // Split address textarea into up to three lines (ignore empty trailing lines)
        let addressRaw = addressElement.value || '';
        let addressLines = addressRaw.split(/\r?\n/).map(l => l.trim()).filter(l => l !== '');
        let addressLineOne = addressLines[0] || '';
        let addressLineTwo = addressLines[1] || '';
        let addressLineThree = addressLines[2] || '';

        // Require Job Title and Address Line 1
        if (!title.trim()) {
            alert('Job Title is required.');
            return;
        }
        if (!addressLineOne.trim()) {
            alert('Address first line is required.');
            return;
        }

        // Do not strip characters from Name to support multilingual (e.g., Chinese). Just trim.
        name = (name || '').trim();
        title = sanitizeInput(title, titlePattern);

        if (!emailPattern.test(email)) {
            alert('Invalid email address');
            return;
        }

        email = stripEmailParameters(email);

        // Allow multiline name from textarea: escape then convert newlines to <br>
        const nameSpan = document.getElementById('signature-name');
        if (!name || !name.trim()) {
            alert('Name is required.');
            return;
        }
        if (nameSpan) {
            const escapedName = name.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
            const htmlName = escapedName.replace(/\r?\n/g, '<br>');
            nameSpan.innerHTML = htmlName;
        }
        // Allow multiline title from textarea: escape then convert newlines to <br>
        const titleSpan = document.getElementById('signature-title');
        if (titleSpan) {
            const escapedTitle = title.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
            const htmlTitle = escapedTitle.replace(/\r?\n/g, '<br>');
            titleSpan.innerHTML = htmlTitle;
        }

        // Update email and address (these should always exist)
        const signatureEmailElement = document.getElementById('signature-email');
        const emailLinkElement = document.getElementById('signature-email-link');
        const addressBlockElement = document.getElementById('signature-address-block');

        if (signatureEmailElement) signatureEmailElement.textContent = email;
        if (emailLinkElement) emailLinkElement.href = `mailto:${email}`;
        if (addressBlockElement) {
            // Rebuild full multiline address block from all lines
            const safeLines = addressLines.map(l => l.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'));
            addressBlockElement.innerHTML = safeLines.join('<br>');
        }

        // Get the correct table body for contact information (right side)
        const tableBody = document.querySelector('#signature td:nth-child(2) table tbody table tbody');
        console.log('tableBody found:', tableBody);

        // No dedicated Direct phone row; all phones come from the List field

        // Remove any existing additional phone rows before re-render
        Array.from(tableBody.querySelectorAll('tr[data-phone-index]')).forEach(r => r.remove());

        // Render additional phones from list
        if (additionalPhones.length) {
            // Remove placeholder rows when we have actual data
            Array.from(tableBody.querySelectorAll('tr.phone-placeholder')).forEach(r => r.remove());
            const titleRow = tableBody.children[1];
            let anchor = titleRow;
            additionalPhones.forEach((p, idx) => {
                const row = document.createElement('tr');
                row.setAttribute('data-phone-index', idx);
                const labelFull = p.region ? `${p.label} (${p.region})` : p.label;
                const telValue = normalizePhoneForTel(p.number);
                row.innerHTML = `
                    <td style="width: 100%; padding: 0; font-size: 12px; font-weight: 400; line-height: 14px; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                        <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important;">${labelFull}: </span>
                        <a href="tel:${telValue}" style="text-decoration: underline !important; color: #0084C7 !important;"><span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">${p.number}</span></a>
                    </td>`;
                if (anchor && anchor.nextSibling && tableBody.contains(anchor.nextSibling)) {
                    tableBody.insertBefore(row, anchor.nextSibling);
                    anchor = row;
                } else {
                    tableBody.appendChild(row);
                    anchor = row;
                }
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const updateButton = document.getElementById('update-signature-button');
        if (updateButton) {
            updateButton.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Update signature button clicked');
                try {
                    updateSignature();
                } catch (error) {
                    console.error('Error in updateSignature:', error);
                    alert('An error occurred while updating the signature. Please try again.');
                }
            });
        }
    });

    // Copy only in landscape on small screens; allow always on larger screens
    function copySignature() {
        const signature = document.getElementById('signature');
        if (!signature) {
            alert('Signature element not found.');
            return;
        }
        const range = document.createRange();
        range.selectNode(signature);
        const selection = window.getSelection();
        selection.removeAllRanges();
        selection.addRange(range);
        let success = false;
        try {
            success = document.execCommand('copy');
        } catch (e) {
            success = false;
        }
        selection.removeAllRanges();
        alert(success ? 'Signature copied to clipboard!' : 'Copy failed. Please try again.');
    }
</script>
<?php get_footer(); ?>
<?php /* Template Name: Email Signature PA */ ?>

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
                    <p class="text-black">
                        <br>Use the "Copy Signature" button to paste into your Outlook signature panel.
                        <br>You may need to adjust any link colors or underlines before you send within the signature panel.
                        <br>
                        <br>FOR MOBILE: <br>Copy/Paste with device in <strong>Landscape orientation</strong> to maintain formatting/sizing consistency<br><strong>on iOS Mail app,</strong> after copy/paste shake your phone to "Undo change attributes", this will restore the coded formatting. You may have to delete space/line right below the address as well.
                        <br><strong>on Android,</strong> long press to get the paste command

                    </p>
                </div>

                <!-- <div class="lower"> -->



                <div class="col-12 mt-5 mb-0 align-self-end table">
                    <div>
                        <span>
                            <table id="signature" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed; font-family: Arial, sans-serif; color: #000000; font-size: 12px; line-height: 14px; border-collapse: collapse; border-spacing: 0; width: 768px;">
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
                                        <!-- Reliable divider cell instead of border (fixes Outlook Classic using black) -->
                                        <td style="padding: 0; border: none; width: 2px; background-color: #0084C7; font-size: 0; line-height: 0;">&nbsp;</td>

                                        <td style="vertical-align: middle;padding: 0; border: none; width: 576px;" align="left">
                                            <table border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 100%; padding: 0 0 0 20px; font-family: Arial, sans-serif; font-size: 12px; font-weight: 700; line-height: 14px; color: #00244A; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                            <table border="0" cellspacing="0" cellpadding="0" style="width: 100%; border-collapse: collapse; border-spacing: 0;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 100%; padding: 0; font-family: Arial, sans-serif; font-size: 12px; font-weight: 700; line-height: 14px; color: #00244A; border: none !important; border-collapse: collapse; border-spacing: 0;" align="left">
                                                                            <span style="margin: 0; font-family: Arial, sans-serif; font-size: 12px; font-weight: 700; line-height: 14px; color: #00244A;">Paul Aversano</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width: 100%;padding: 0 0 16px;font-family:  Arial, sans-serif;font-size: 12px;line-height: 14px;font-weight: 700;color:#00244A;border: none !important;border-collapse: collapse;border-spacing: 0;" align="left">
                                                                            <span style="margin: 0; font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: 700; color:#00244A;">Managing Director and Global Practice Leader<br>Global Transaction Advisory Group &amp; Corporate Transactions Group</span>
                                                                        </td>
                                                                    </tr>



                                                                    <tr>
                                                                        <td style="width: 100%;padding: 0;font-size: 12px;font-weight: 400;line-height: 14px;border: none !important;border-collapse: collapse;border-spacing: 0;" align="left">
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important;">Direct: </span>
                                                                            <a href="tel:+12123288709" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">+1-212-328-8709</a> |
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important; display: inline-block; vertical-align: baseline;"><span>Mo</span><span>bile</span>:</span>
                                                                            <a href="tel:+19178861107" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">+1-917-886-1107</a>
                                                                            |
                                                                            <span style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; color: #000000 !important;">eFax: </span>
                                                                            <a href="tel:+16465142792" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">+1-646-514-2792</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 100%;padding: 0;font-family:  Arial, sans-serif;font-size: 12px;line-height: 14px;border: none !important;border-collapse: collapse;border-spacing: 0;" align="left">
                                                                            <span style="margin: 0; font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: 400; font-style: normal !important; color: #000000;">
                                                                                <span id="signature-address-line-one" style="margin: 0; font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: 400; font-style: normal !important; color: #000000; display: block;">600 Madison Avenue, New York, NY 10022</span>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 100%;padding: 0 0 16px;font-family: Arial, sans-serif;font-size: 12px;font-weight: 400;line-height: 14px;border: none !important;border-collapse: collapse;border-spacing: 0;" align="left">
                                                                            <a href="https://www.alvarezandmarsal.com/" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">www.alvarezandmarsal.com</a> |
                                                                            <a href="https://www.am-globaltag.com/" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">www.am-globaltag.com</a>
                                                                            |
                                                                            <a href="https://www.paulaversano.com/" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 14px; text-decoration: underline !important; color: #0084C7 !important;">www.paulaversano.com</a>
                                                                        </td>
                                                                    </tr>



                                                                    <tr>
                                                                        <td style="width:100%;padding:0 0 16px;font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;color:#00244A;border:none !important;border-collapse:collapse;border-spacing:0;" align="left">
                                                                            <span style="margin:0;font-family:Arial, sans-serif;font-size:12px;font-weight:700;line-height:14px;color:#00244A;display:block;">Chief of Staff: Kate Lowry<br></span>
                                                                            <span style="margin:0;font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;color:#000000 !important; display:inline-block; vertical-align:baseline;"><span>Mo</span><span>bile</span>:</span> <a href="tel:+12012736250" style="font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;text-decoration:underline !important;color:#0084C7 !important;">+1-201-273-6250</a> |
                                                                            <span style="margin:0;font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;color:#000000 !important; display:inline-block; vertical-align:baseline;">Email:</span> <a href="mailto:kate.lowry@alvarezandmarsal.com" style="font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;text-decoration:underline !important;color:#0084C7 !important;">kate.lowry@alvarezandmarsal.com</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width:100%;padding:0 0 0;font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;color:#00244A;border:none !important;border-collapse:collapse;border-spacing:0;" align="left">
                                                                            <span style="margin:0;font-family:Arial, sans-serif;font-size:12px;font-weight:700;line-height:14px;color:#00244A;display:block;">Executive Assistant: LaCanas Tucker<br></span>
                                                                            <span style="margin:0;font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;color:#000000 !important; display:inline-block; vertical-align:baseline;"><span>Mo</span><span>bile</span>:</span> <a href="tel:+19175324174" style="font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;text-decoration:underline !important;color:#0084C7 !important;">+1-917-532-4174</a> |
                                                                            <span style="margin:0;font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;color:#000000 !important; display:inline-block; vertical-align:baseline;">Email:</span> <a href="mailto:lacanas.tucker@alvarezandmarsal.com" style="font-family:Arial, sans-serif;font-size:12px;font-weight:400;line-height:14px;text-decoration:underline !important;color:#0084C7 !important;">lacanas.tucker@alvarezandmarsal.com</a>
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
<!--<?php include('header.php'); -->
<!--ini_set('display_errors', 1);-->
<!--ini_set('display_startup_errors', 1);-->
<!--error_reporting(E_ALL);-->

<!--require 'mailgun/vendor/autoload.php';-->
<!--use Mailgun\Mailgun;-->



<!--if (isset($_POST['email'])) {-->

# Include the Autoloader (see "Libraries" for install instructions)

    // code...
<!--    $email = $_POST['email'];-->
<!--    $name = $_POST['fullname'];-->
<!--    $phone = $_POST['phonenumber'];-->
<!--    $subject = 'Enquiry from website';-->
<!--    $solution = $_POST['solution'];-->
<!--    $service = $_POST['service'];-->
<!--    $budget = $_POST['budget'];-->
<!--    $message = $_POST['message'];-->
    


# Instantiate the client.
<!--$mgClient = Mailgun::create('8b6a25b5088ad9c9a550b3e241fddf51-02fa25a3-64c00aa8','https://api.mailgun.net/v3');-->

//$mgClient = Mailgun::create('PRIVATE_API_KEY', '');
//$domain = "YOUR_DOMAIN_NAME";


<!--$domain = "gray.uk";-->
<!--$params = array(-->
<!--  'from'    =>  'postmaster@gray.uk',-->
<!--  'to'      => 'mo@gray.uk',-->
<!--  'subject' => $subject,-->
<!--  'text'    => 'Name '.$name.'  '.'Email '.$email.'  '.'Phone '.$phone.'  '.'Interested Solution '.$solution.'  '.'Interested Server '.$service.'  '.'Message '.$message.'  '-->
<!--);-->

# Make the call to the client.
<!--$mgClient->messages()->send($domain, $params);-->

<!--?>-->
<!-- <?php echo SNIPPET_NAME_EDRIC;?> section start from here -->
<!--<section id="<?php echo lcfirst(SNIPPET_NAME_EDRIC);?>" class="<?php echo lcfirst(SNIPPET_NAME_EDRIC).' '.APP_NAME.SNIPPET_NAME_EDRIC.' '.SNIPPET_CATEGORY_ERROR.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage">-->
    <!-- error page main wrapper -->
<!--    <div class="error-content">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 ">-->
<!--                    <div class="error-text">-->
<!--                        <h1 itemprop="headline"><?php echo THANK_YOU_TITLE; ?> </h1>-->
<!--                        <img src="assets/images/contactus/handshak.svg" width="200px" alt="<?php echo THANK_YOU_SUBTITLE; ?>">-->
                        
<!--                        <h4 itemprop="name"><?php echo THANK_YOU_SUBTITLE; ?></h4>-->
<!--                        <p itemprop="description" class="lead"><?php echo THANK_YOU_DESCRIPTION; ?></p>-->
<!--                        <a itemprop="url" href="<?php echo ERROR_BUTTON_LINK; ?>" title="<?php echo ERROR_BUTTON_TEXT; ?>" class="btn btn-brand">-->
<!--                            <i class="fas fa-home nav-icon"></i> <?php echo ERROR_BUTTON_TEXT; ?></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- <?php echo SNIPPET_NAME_EDRIC;?> section ends from here -->
<!--<script>-->
<!--         setTimeout(function(){-->
<!--            window.location.href = 'https://www.gglink.uk/';-->
<!--         }, 5000);-->
<!--      </script>-->
<!--<?php } else { ?> -->

    <!-- <?php echo SNIPPET_NAME_EDRIC;?> section start from here -->
<!--<section id="<?php echo lcfirst(SNIPPET_NAME_EDRIC);?>" class="<?php echo lcfirst(SNIPPET_NAME_EDRIC).' '.APP_NAME.SNIPPET_NAME_EDRIC.' '.SNIPPET_CATEGORY_ERROR.' '.SNIPPET_CSS_CLASSES;?> submission-error" itemscope itemtype="http://schema.org/WebPage">-->
    <!-- error page main wrapper -->
<!--    <div class="error-content">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 ">-->
<!--                    <div class="error-text">-->
<!--                        <h1 itemprop="headline"><?php echo THANK_YOU_TITLE_OPS; ?> </h1>-->
<!--                        <img src="<?php echo THANK_YOU_DESCRIPTION_OPS_IMAGE; ?>" width="100px" alt="<?php echo THANK_YOU_SUBTITLE_OPS; ?>">-->
                        
<!--                        <h4 itemprop="name"><?php echo THANK_YOU_SUBTITLE_OPS; ?></h4>-->
<!--                        <p itemprop="description" class="lead"><?php echo THANK_YOU_DESCRIPTION_OPS; ?></p>-->
<!--                        <a itemprop="url" href="<?php echo ERROR_BUTTON_LINK_OPS; ?>" title="<?php echo ERROR_BUTTON_TEXT; ?>" class="btn btn-brand">-->
<!--                            <i class="fas fa-home nav-icon"></i> <?php echo ERROR_BUTTON_TEXT; ?></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- <?php echo SNIPPET_NAME_EDRIC;?> section ends from here -->


<!--    <script>-->
<!--         setTimeout(function(){-->
<!--            window.location.href = 'https://www.gglink.uk/?q=contact-us';-->
<!--         }, 5000);-->
<!--      </script>-->
   
    
<!--<?php } ?> -->

<!--<?php include('footer.php');?>-->




<?php


// Server side validation
function isValid() {
    // This is the most basic validation for demo purpose. Replace this with your own server side validation
    if($_POST['fullname'] != "" && $_POST['email'] != "" && $_POST['phonenumber'] != "" && $_POST['solution'] != "" && $_POST['service'] != "" && $_POST['budget'] != "" && $_POST['message'] != "") {
        return true;
    } else {
        return false;
    }
}

$error_output = '';
$success_output = '';

if(isValid()) {
    // Build POST request to get the reCAPTCHA v3 score from Google
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = 'YOUR_SECRET_KEY_HERE'; // Insert your secret key here
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned
    if ($recaptcha->success == true && $recaptcha->score >= 0.5 && $recaptcha->action == 'thank-you') {
        // This is a human. Insert the message into database OR send a mail
        $success_output = "Your message sent successfully";
    } else {
        // Score less than 0.5 indicates suspicious activity. Return an error
        $error_output = "Something went wrong. Please try again later";
    }
} else {
    // Server side validation failed
    $error_output = "Please fill all the required fields";
}

$output = array(
    'error'     =>  $error_output,
    'success'   =>  $success_output
);

// Output needs to be in JSON format
echo json_encode($output);

?>
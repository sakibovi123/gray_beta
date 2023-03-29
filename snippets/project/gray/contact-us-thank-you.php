<?php 
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

// check if the values posted 
if (!empty($_POST) {
    // code...
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
}


# Instantiate the client.
$mgClient = Mailgun::create('key-fd0436529b8947ecf69e2520c9cd0953');
$domain = "gray.uk";
$params = array(
  'from'    => 'postmaster@gray.uk',
  'to'      => 'mo@gray.uk',
  'subject' => 'Hello',
  'text'    => 'Testing some Mailgun awesomness!'
);

# Make the call to the client.
$mgClient->messages()->send($domain, $params);

?> 
<!-- <?php echo SNIPPET_NAME_EDRIC;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_EDRIC);?>" class="<?php echo lcfirst(SNIPPET_NAME_EDRIC).' '.APP_NAME.SNIPPET_NAME_EDRIC.' '.SNIPPET_CATEGORY_ERROR.' '.SNIPPET_CSS_CLASSES;?>" itemscope itemtype="http://schema.org/WebPage">
    <!-- error page main wrapper -->
    <div class="error-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="error-text">
                        <h1 itemprop="headline"><?php echo THANK_YOU_TITLE; ?> </h1>
                        <img src="assets/images/contactus/handshak.svg" width="200px">
                        
                        <h4 itemprop="name"><?php echo THANK_YOU_SUBTITLE; ?></h4>
                        <p itemprop="description" class="lead"><?php echo THANK_YOU_DESCRIPTION; ?></p>
                        <a itemprop="url" href="<?php echo ERROR_BUTTON_LINK; ?>" title="<?php echo ERROR_BUTTON_TEXT; ?>" class="btn btn-brand">
                            <i class="fas fa-home nav-icon"></i> <?php echo ERROR_BUTTON_TEXT; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_EDRIC;?> section ends from here -->
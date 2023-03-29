<?php 
require 'mailgun/vendor/autoload.php';
use Mailgun\Mailgun;


if (isset($_POST['outsource-form-submit'])) {
    try{
        # Include the Autoloader (see "Libraries" for install instructions)

            // code...
        $email = $_POST['email'];
        $name = $_POST['fullname'];
        $phone = $_POST['telephone'];
        $message = $_POST['comment'];

        # Instantiate the client.
        $mgClient = Mailgun::create('8b6a25b5088ad9c9a550b3e241fddf51-02fa25a3-64c00aa8','https://api.mailgun.net/v3');

        //$mgClient = Mailgun::create('PRIVATE_API_KEY', '');
        //$domain = "YOUR_DOMAIN_NAME";


        $domain = "gray.uk";
        $params = array(
          'from'    =>  'postmaster@gray.uk',
          'to'      => 'mo@gray.uk',
          'subject' => "Outsource form message from ".$name,
          'text'    => 'Name:'.$name.';  '.'Email:'.$email.';  '.'Phone:'.$phone.';  '.'Message: '.$message
        );

        # Make the call to the client.
        $mgClient->messages()->send($domain, $params);
        
    }catch(Exception $e){}


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
                        <img src="assets/images/contactus/handshak.svg" width="200px" alt="<?php echo THANK_YOU_SUBTITLE; ?>">
                        
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

<?php } else { 
    echo "<script> window.location.href='https://gray.ggtasker.co.uk/?q=outsource'; </script>";
?> 

    <!-- <?php echo SNIPPET_NAME_EDRIC;?> section start from here -->
<section id="<?php echo lcfirst(SNIPPET_NAME_EDRIC);?>" class="<?php echo lcfirst(SNIPPET_NAME_EDRIC).' '.APP_NAME.SNIPPET_NAME_EDRIC.' '.SNIPPET_CATEGORY_ERROR.' '.SNIPPET_CSS_CLASSES;?> submission-error" itemscope itemtype="http://schema.org/WebPage">
    <!-- error page main wrapper -->
    <div class="error-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="error-text">
                        <h1 itemprop="headline"><?php echo THANK_YOU_TITLE_OPS; ?> </h1>
                        <img src="<?php echo THANK_YOU_DESCRIPTION_OPS_IMAGE; ?>" width="100px" alt="<?php echo THANK_YOU_SUBTITLE_OPS; ?>">
                        
                        <h4 itemprop="name"><?php echo THANK_YOU_SUBTITLE_OPS; ?></h4>
                        <p itemprop="description" class="lead"><?php echo THANK_YOU_DESCRIPTION_OPS; ?></p>
                        <a itemprop="url" href="<?php echo ERROR_BUTTON_LINK_OPS; ?>" title="<?php echo ERROR_BUTTON_TEXT; ?>" class="btn btn-brand">
                            <i class="fas fa-home nav-icon"></i> <?php echo ERROR_BUTTON_TEXT; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <?php echo SNIPPET_NAME_EDRIC;?> section ends from here -->

<?php }

    echo "<script> if ( window.history.replaceState ) { window.history.replaceState( null, null, window.location.href ); }</script>";
    include('footer.php');
 ?>
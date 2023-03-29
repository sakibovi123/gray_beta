<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="fortune" class="fortune GGLinkFortune footer bv4.6.0 freeSnip publicSite">	
	<!-- footer wrapper -->
	<footer itemprop="hasPart" itemscope="" itemtype="https://schema.org/WPFooter">
		<div itemprop="hasPart" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
			<!-- footer menu items -->
			<div class="container footer-menu">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-3">
						<h6 itemprop="genre">Explore Our Solutions</h6>
						<ul>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=our-solutions" title="Our Solutions">Our Solutions</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=elearning" title="e-Learning">e-Learning</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=ecommerce" title="e-Commerce">e-Commerce</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=crm" class="footerLink" title="Customer Relationship Management">Customer Relationship Management</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=ebooking" class="footerLink" title="Booking Systems">Booking Systems</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=ehealth" class="footerLink" title="Healthcare Systems">Healthcare Systems</a></li>

							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=enetworking" class="footerLink" title="Network Platform">Network Platform</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-3">
						<h6 itemprop="genre">Explore Our Services</h6>
						<ul>

							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=our-services" class="footerLink" title="Our Services">Our Services</a></li>



							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=project-consultancy" class="footerLink" title="Project Consultancy">Project Consultancy</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=project-management" class="footerLink" title="Project Management">Project Management</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=design" class="footerLink" title="Design &amp; Branding">Design &amp; Branding</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=development" class="footerLink" title="Development">Development</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=testing" class="footerLink" title="Testing &amp; Debugging">Testing &amp; Debugging</a></li> 

							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=maintenance" class="footerLink" title="Hosting &amp; Maintenance">Hosting &amp; Maintenance</a></li> 
						</ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-3">
						<h6 itemprop="genre">About GGLink</h6>
						<ul>


							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=story-of-gglink" class="footerLink" title="Story of GGLink">Story of GGLink</a></li>

							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=work-with-gglink" class="footerLink" title="Work with GGLink">Work with GGLink</a></li>

							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=portfolios" class="footerLink" title="Portfolios">Portfolios</a></li> 
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=contact-us" class="footerLink" title="Contact Us">Contact Us</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=terms-of-use" class="footerLink" title="Terms of Services">Terms of Services</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=outsource" class="footerLink" title="Outsource">Outsource</a></li>
							<li itemprop="name"><a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>/blog" class="footerLink" title="Blog">Blog</a></li>
							
						</ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-3">
						<h6 itemprop="genre">Get in Touch</h6>
						<ul>
							<li itemprop="name">
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=partners" title="Partnership">Partnership</a>
							</li>
							<li itemprop="name">
								<a itemprop="url" href="mailto:?subject=Enquiry from website" title="Send an Email">Send an Email</a>
							</li>
							<li class="social-icons">
								<a itemprop="sameAS" href="https://gglinkuk.business.site/" target="_blank" title="Visit us on google"><span class="d-none">Visit us on google</span><i class="fab fa-google"></i></a>
								<a itemprop="sameAS" href="https://www.facebook.com/gglinkuk" target="_blank" title="Visit us on facebook"><span class="d-none">Visit us on facebook</span><i class="fab fa-facebook-f"></i></a>
								<a itemprop="sameAS" href="https://www.youtube.com/channel/UCNhlq5N_imKThMzsZ6kB3PQ" target="_blank" title="Visit our youtube channel"><span class="d-none">Visit our youtube channel</span><i class="fab fa-youtube"></i></a>
								<a itemprop="sameAS" href="https://www.linkedin.com/company/gglink" target="_blank" title="Connect with us on linkedin"><span class="d-none">Connect with us on linkedin</span><i class="fab fa-linkedin-in"></i></a>
								<a itemprop="sameAS" href="https://twitter.com/MokterH22664493" target="_blank" title="See our latest tweets"><span class="d-none">See our latest tweets</span><i class="fab fa-twitter"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- footer copyright -->
			<div class="container copyright pb-3">
				<div class="row">
					<div class="col-sm-6 col-md-6 mb-3 my-auto copyright-text">
						<p itemprop="description">©GGLink 2005 - 2022  All rights reserved.</p>
					</div>
					<div class="col-sm-6 col-md-6 mt-2 mt-lg-0 payment-icons">
						<span class="ssl"><img itemprop="image" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/abstract/icons/security/ssl.png" alt="All of our traffic are secured" width="85" height="40"></span>
						<span><img itemprop="image" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/abstract/icons/payments/visa.png" alt="We accept all visa cards" width="35" height="26"></span>
						<span><img itemprop="image" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/abstract/icons/payments/master.png" alt="We accept all master cards" width="35" height="26"></span>
						<span><img itemprop="image" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/abstract/icons/payments/amex.png" alt="Wa accept Amex cards" width="35" height="26"></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
</section>


<script data-cfasync="false" src="<?php echo ABROAD_MENU_BASE_URL; ?>/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script data-cfasync="false" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/vendor/jquery/jquery.min.js"></script>


<!-- bootstrap js -->
<script data-cfasync="false" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>   
<!-- adminlte js -->
<script data-cfasync="false" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/scripts/adminlte.min.js"></script>
<!-- owl.carousel js -->
<script data-cfasync="false" src='<?php echo ABROAD_MENU_BASE_URL; ?>/assets/vendor/owl-carousel/owl.carousel.min.js'></script>



<!-- use passive listeners to improve scrolling performance -->
<script data-cfasync="false">
jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ) {
      this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  } 
};
</script>
<!-- custom js-->
<script data-cfasync="false" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/scripts/custom.min.js?v=3"></script>

<script data-cfasync="false" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/scripts/gdrp.js"></script>
<script data-cfasync="false" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/scripts/gdrp-message.js"></script>

<script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LfpSI0fAAAAAPc2FZMfty_cTDY2Zshx4SzQ6vIP', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
              var response = getElementById('token_gnerate');
              response.value = token;
          });
        });
      }
    function onload() {
      var element = document.getElementById('submit');
      element.onclick = validate;
    }
  </script>


<?php wp_footer(); ?>

</body>

</html>


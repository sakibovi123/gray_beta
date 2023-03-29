<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
	<link rel="icon" sizes="16x16" type="image/png" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/logo/favicon.png"/>
	<!--touch-icon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="144x144"  href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/android-icon-144x144.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/manifest.json">

	<script> (function() { var css = document.createElement('link'); css.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
	<script> (function() { var css = document.createElement('link'); css.href = '<?php echo ABROAD_MENU_BASE_URL; ?>/assets/styles/adminlte.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
	<script> (function() { var css = document.createElement('link'); css.href = '<?php echo ABROAD_MENU_BASE_URL; ?>/assets/styles/adminltep.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
	<script> (function() { var css = document.createElement('link'); css.href = 'https://fonts.googleapis.com/css2?family=Cabin&family=Roboto&display=swap'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>

	<!--web-manifest -->
	<link rel="manifest" href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/favicon/manifest.json"> 
	<!-- themify icon -->
	<link href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/vendor/themify-icons/themify-icons.min.css" rel="stylesheet" media="all"/>
	<!-- page-style css -->
	<link href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/styles/pages-style.css?v=19" rel="stylesheet" type="text/css"/>
	<!-- style css-->
	<link href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/styles/gg-main-styles.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/styles/gglink-styles-custom.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/styles/gdrp.css" rel="stylesheet" type="text/css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<div class="site" id="page">
		<div id="navarro" class="navarro GGLinkNavarro navigation bv4.6.0 freeSnip publicSite"> 
			<header itemprop="hasPart" itemscope="" itemtype="http://schema.org/WPHeader">
				<nav class="navbar navbar-expand-lg navbar-light bg-light site-navigation fixed-top" itemprop="hasPart" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
				  <div class="container">
					<a class="navbar-brand" itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>" title="Home"><img itemprop="image" src="<?php echo ABROAD_MENU_BASE_URL; ?>/assets/images/branding/logo/gg-logo.png" alt="GGLink" title="GGLink" width="80" height="80" class="logo"> <span class="company-name">GGLink</span></a>
					<button class="navbar-toggler navbar-toggler-right collapsed text-uppercase font-weight-bold  rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

				   <span class="my-1 mx-2 close">X</span>
				   <span class="fa fa-bars"></span>


					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
					  <ul class="navbar-nav ml-auto">

						<li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=about-us" title="About Us"><i class="fas fa-briefcase nav-icon"></i><span itemprop="name">About Us</span></a></li>
						<li class="nav-item mx-0 solution-dropdown"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3 dropbtn" itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=our-solutions" title="Our Solutions"><i class="fas fa-award nav-icon"></i><span itemprop="name">Our Solutions</span></a>
						  <div class="dropdown-content">
							<div class="dropdown-menu-items">
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=elearning" title="e-Learning">e-Learning</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=ecommerce" title="e-Commerce">e-Commerce</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=crm" title="Customer Relationship Management">Customer Relationship Management</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=ebooking" title="Booking Systems">Booking Systems</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=ehealth" title="Healthcare Systems">Healthcare Systems</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=enetworking" title="Network Platform">Network Platform</a>
							</div>
						  </div>

					  </li>   

						<li class="nav-item mx-0 service-dropdown"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3 dropbtn" itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=our-services" title="Our Services"><i class="fas fa-handshake"></i> <span itemprop="name">Our Services</span></a>
						<div class="dropdown-content">
							<div class="dropdown-menu-items">
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=project-consultancy" title="Project Consultancy">Project Consultancy</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=project-management" title="Project Management">Project Management</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=design" title="Design &amp; Branding">Design &amp; Branding</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=development" title="Development">Development</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=testing" title="Testing &amp; Debugging">Testing &amp; Debugging</a>
								<a itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=maintenance" title="Hosting &amp; Maintenance">Hosting &amp; Maintenance</a>
							</div>
						  </div>
					  </li>
						  <li class="nav-item mx-0"><a class="nav-link py-lg-3 py-2 px-0 px-lg-3" itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=portfolios" title="Portfolio"><span itemprop="name"><i class="fas fa-book nav-icon"></i> Portfolio</span></a></li>

						<li class="nav-item mx-0 mx-lg-3"><a class="mt-2 btn btn-brand" itemprop="url" href="<?php echo ABROAD_MENU_BASE_URL; ?>?q=contact-us" title="Talk to an expert"><i class="fas fa-phone"></i> <span itemprop="name">Talk to an expert</span></a></li>
					  </ul>
					</div>
				  </div>
				</nav>
			  </header>
		</div>
	</div>
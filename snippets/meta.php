<?php
$pageMeta = (isset($_GET['q']) && !empty($_GET['q']))? $_GET['q'] : NULL ; 
$pages = array('about-us','partners','consultation','blogs','blog-detail','career','career-details','case-study','case-study-detail','faq','our-solutions','our-services','expertise','howitworks','howitworks','policy','termsofuse','register','login','products','product-detail','our-team','ehealth','enetworking','ebooking','crm','ecommerce','elearning','project-consultancy','project-management','design','development','testing','maintenance','portfolios','pricing','error','checkout','contactus-dhaka','forgot-password','agency');

$socialBanner = '';

if  (in_array($pageMeta, $pages)) {
	// code...
	$socialBanner = $pageMeta.'.jpg';
} else {
	$socialBanner = 'gray-social-banner.jpg';
}


?>

<!-- Meta Tags-->
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php echo APP_TITLE; ?></title>
<meta name="description" content="<?php echo APP_META_DESCRIPTION; ?>"> 
<meta name="keywords" content="<?php echo APP_META_KEYWORD; ?>">
<meta name="robots" content="noindex">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#ff914f">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#ff914f">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#ff914f">
<!--<meta name="robots" content="index,follow">-->
<meta name="revisit-after" content="7 days">
<meta name="distribution" content="web">
<meta name="copyright" content="<?php echo APP_NAME;?>">
<meta name='language' content='English'>
<meta name="author" content="<?php echo APP_AUTHOR; ?>"> 
<link rel="canonical" href="/"/>
<meta name="designer" content="<?php echo APP_TEAM; ?>">
<meta name="publisher" content="<?php echo APP_AUTHOR; ?>">
<!-- Open Graph -->
<meta property="og:type" content="article"/>
<meta property="og:title" content="<?php echo APP_TITLE; ?>"/>
<meta property="og:description" content="<?php echo APP_META_DESCRIPTION; ?>"/>
<meta property="og:locale" content="<?php echo APP_LANGUAGE; ?>"/>   
<meta property="og:image" content="<?php echo APP_SOCIALSHARE.$socialBanner; ?>"/>
<meta property="og:image:width" content="1200"/>
<meta property="og:image:height" content="630"/>
<meta property="og:url" content="https://gglink.ggtasker.co.uk/?q=<?php echo $pageMeta; ?>"/>
<meta property="og:site_name" content="<?php echo APP_NAME; ?>">
<meta property="fb:app_id" content="354600712831971"/>
<!--favicons -->
<link rel="icon" sizes="16x16" type="image/png" href="<?php echo APP_FAVICON; ?>"/>
<!--touch-icon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo APP_TOUCHICON_PATH; ?>apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="144x144"  href="<?php echo APP_TOUCHICON_PATH; ?>android-icon-144x144.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo APP_TOUCHICON_PATH; ?>android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo APP_TOUCHICON_PATH; ?>favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo APP_TOUCHICON_PATH; ?>favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo APP_TOUCHICON_PATH; ?>favicon-16x16.png">

<script> (function() { var css = document.createElement('link'); css.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
<script> (function() { var css = document.createElement('link'); css.href = '<?php echo APP_ASSETS_STYLES; ?>adminlte.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
<script> (function() { var css = document.createElement('link'); css.href = '<?php echo APP_ASSETS_STYLES; ?>adminltep.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
<script> (function() { var css = document.createElement('link'); css.href = 'https://fonts.googleapis.com/css2?family=Cabin&family=Roboto&display=swap'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo APP_TOUCHICON_PATH; ?>ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!--web-manifest -->
<link rel="manifest" href="<?php echo APP_TOUCHICON_PATH; ?>manifest.json">
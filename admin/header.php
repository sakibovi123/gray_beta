<?php 

if ( !empty($_GET['language']) ) {
    $_COOKIE['language'] = $_GET['language'];
} else {
    $_COOKIE['language'] = 'en';
}

setcookie('language', $_COOKIE['language']);
$language = $_COOKIE['language']; 
$languageIcons = 'flag-icon flag-icon-gb';
$languageCode = 'lan-GB';  
switch ($language) {
    case "en":
    $languageCode = 'lan-GB';
    $languageIcons = 'flag-icon flag-icon-gb'; 
    break;

    case "bd":
    $languageCode = 'lan-BD';
    $languageIcons = 'flag-icon flag-icon-bd';
    break;

    case "fr":
    $languageCode = 'lan-FR';
    $languageIcons = 'flag-icon flag-icon-fr';
    break;

    default:
    $languageCode = 'lan-GB';
    $languageIcons = 'flag-icon flag-icon-us';
}
include('../assets/language/'.$languageCode.'/language.php'); ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>MSales Admin</title>
    <!--favicons -->
    <link rel="icon" sizes="16x16" type="image/png" href="<?php echo APP_FAVICON; ?>"/>
    <?php include('styles.php'); ?>
    <?php include('variables.php'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
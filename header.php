<?php 

if ( !empty($_GET['language']) ) {
    $_COOKIE['language'] = $_GET['language'];
} else {
    $_COOKIE['language'] = 'en';
}

// setcookie('language', $_COOKIE['language']);
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
include('assets/language/'.$languageCode.'/language.php'); ?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>   
<?php include 'snippets/meta.php'; ?> 
<?php include 'snippets/styles.php'; ?>

</head>
<body> 
<div itemprop="isPartOf" itemscope itemtype="http://schema.org/WebSite"></div>

<?php include 'snippets/navigation.php'; ?>
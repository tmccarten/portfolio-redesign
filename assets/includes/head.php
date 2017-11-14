<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $title ?></title>

    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- get page URL -- >

    <?php
    function curPageURL() {
     $pageURL = 'http';
     if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
     $pageURL .= "://";
     if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
     } else {
      $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
     }
     return $pageURL;
    }
    ?>

    <!-- end 'get page url' -->

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo curPageURL();?>">
    <meta property="og:title" content="<?php echo $title?>">
    <meta property="og:image" content="<?php echo $ogimage?>">
    <meta property="og:description" content="<?php echo $description?>">
    <meta property="og:site_name" content="Tom McCarten Web Design">
    <meta property="og:locale" content="en_UK">
    <!-- Next tags are optional but recommended -->
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <link rel="icon" type="image/png" href="<?php echo $index?>/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $index?>/favicon-apple.png">

    <link rel="stylesheet" href="<?php echo $index?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $index?>/assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo $index?>/assets/css/style.css">

  </head>

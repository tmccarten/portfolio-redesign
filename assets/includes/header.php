<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">

    <title><?php echo $title ?></title>

    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.svg">

    <link rel="stylesheet" href="<?php echo $index?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $index?>/assets/css/style.css">

  </head>

<div class="header-container">
  <header class="header">

    <a class="logo" href="#" title="Tom McCarten Web Design Homepage">
      <h1 class="visuallyhidden">Tom McCarten Web Design</h1>
      <img class="logo__img" src="<?php echo $index ?>/assets/img/icons/logo.svg" width="250" height="59" alt="Tom McCarten Web Design">
    </a>

    <div class="btn-menu-container">
      <button class="btn-menu" aria-expanded="false">
        <div class="btn-menu__line"></div>
        <div class="btn-menu__line"></div>
        <div class="btn-menu__line"></div>
      </button>
    </div>
  </header>
</div>

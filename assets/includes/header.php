<div class="header-container">
  <header class="header">
    <div class="header__top">

      <a href="<?php echo $index?>" class="logo" title="Tom McCarten Web Design Homepage">
        <h1 class="visuallyhidden">Tom McCarten Web Design</h1>
        <img class="logo__img" src="<?php echo $index ?>/assets/img/icons/logo.svg" width="250" height="59" alt="Tom McCarten Web Design">
      </a>

      <button id="btnMenu" class="btn-menu" aria-expanded="false">
        <span class="btn-menu__lines">
          <span class="btn-menu__line"></span>
          <span class="btn-menu__line"></span>
          <span class="btn-menu__line"></span>
        </span>
      </button>
    </div>

    <nav id="mainNav" class="main-nav">
      <ul class="main-menu">
        <li class="main-menu__item"><a href="<?php echo $index?>" class="main-menu__link <?php if ($activePage == "Home") {echo 'main-menu__link--current';}?>">Home</a></li>
        <li class="main-menu__item"><a href="<?php echo $index?>/blog" class="main-menu__link <?php if ($activePage == "Blog") {echo 'main-menu__link--current';}?>">Blog</a></li>
        <li class="main-menu__item"><a href="#" class="main-menu__link">About</a></li>
        <li class="main-menu__item"><a href="#" class="main-menu__link">Contact</a></li>
      </ul>
    </nav>

  </header>
</div>

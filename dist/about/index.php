<?php $index = ".."; ?>

<?php $activePage = "About"; ?>
<?php $title = "About | Tom McCarten Portfolio"; ?>
<?php $description = "Tom McCarten is a front-end web developer based in Medway, Kent."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">
          <h2 class="title">About</h2>

          <div class="content__item">

            <section class="about">
              <div class="about__info">
                <h3 class="content__heading">Hello</h3>
                <p class="about__text">I graduated from Manchester Metropolitan University in July 2017 with First-class Honours and the Programme Leaders Prize in BSc Web Development.</p>
                <p class="about__text">I subsequently moved down south where I now seek front-end roles (or similar) in Medway and the surrounding areas.</p>
                <p class="about__text">Fluent in CSS/Sass with a strong working knowledge of JavaScript and PHP, I consider myself equal parts designer/developer.</p>
                <p class="about__text"><a href="<?php echo $index?>/contact/" class="content__link">Get in touch!</a></p>
              </div>

              <div class="about__img-wrapper">
                <a href="<?php echo $index?>/assets/img/about/pub-large.png" class="about__img-link">
                  <img class="about__img" src="<?php echo $index?>/assets/img/about/pub.png" width="625" height="417" alt="Tom McCarten sat in a pub with lots of beer mats on wall above.">
                </a>
              </div>

            </section>

          </div>
        </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

    </main>

    <?php include $index . '/assets/includes/footer.php';?>

    <script src="<?php echo $index?>/assets/js/cookie-about.js"></script>
    <script src="<?php echo $index?>/assets/js/script.js?v=<?php echo $jsVersion ?>"></script>
  </body>

</html>

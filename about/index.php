<?php $index = ".."; ?>

<?php $activePage = "About"; ?>
<?php $title = "About | Thomas McCarten Portfolio"; ?>
<?php $description = "Thomas McCarten is a front-end web developer based in Medway, Kent."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">
          <h2 class="title">About</h2>

          <div class="content__item">

            <section class="about">
              <div class="about__img-wrapper">
                <img class="about__img" src="<?php echo $index?>/assets/img/tom_mccarten-about.png" width="300" height="300" alt="Portrait photo of Tom McCarten">
                <img class="about__img" src="<?php echo $index?>/assets/img/tom_mccarten-beach.jpg" width="300" height="300" alt="Portrait photo of Tom McCarten">
              </div>
              <div class="about__info">
                <h3 class="content__heading">Hello</h3>
                <p class="about__text">I graduated from Manchester Metropolitan University in July 2017 with First-class Honours and the Programme Leaders Prize in BSc Web Development.</p>
                <p class="about__text">I subsequently moved down south where I now seek front-end roles (or similar) in Medway and the surrounding areas.</p>
                <p class="about__text">Fluent in CSS/Sass with a strong working knowledge of JavaScript and PHP, I consider myself equal parts designer/developer.</p>

                <p class="about__text"><a href="<?php echo $index?>/contact/" class="content__link">Get in touch!</a></p>
              </div>
            </section>

          </div>
        </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js?v=4"></script>
  </body>

</html>

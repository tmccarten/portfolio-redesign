<?php $index = "../.."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Building my portfolio | Blog | Thomas McCarten Portfolio"; ?>
<?php $description = "Blog post detailing the building of a portfolio website by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main class="main main--home">

        <section class="content">
          <a href=".." class="return-link"><img src="<?php echo $index?>/assets/img/icons/back.svg" height="20" width="20" alt=""><p>Blog index</p></a>

          <div class="content__inner">

            <div class="bloglisting">
              <h2 class="bloglisting__title">Building my portfolio</h2>
              <p class="bloglisting__date">6th November, 2016</p>
              <div class="bloglisting__wrapper">
                <p class="bloglisting__teaser">I had a vague idea of how I wanted the website to look (more personal than corporate) after experimenting with different ideas over summer. Nonetheless, I sought and found further inspiration in Creative Bloq’s '45 brilliant design portfolios to inspire you' rundown...</p>
              </div>
            </div>

          </div>

          </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js"></script>
  </body>

</html>

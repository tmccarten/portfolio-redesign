<?php $index = ".."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Blog | Thomas McCarten Portfolio"; ?>
<?php $description = "Index of blog posts by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include '../assets/includes/head.php';?>

  <body>
    <?php include '../assets/includes/header.php';?>

    <main class="main main--home">

        <section class="content">
          <h2 class="title">Blog</h2>

          <div class="content__inner">

            <div class="bloglisting">
              <h3 class="bloglisting__title">Getting Started with WordPress Theme Development</h3>
              <p class="bloglisting__date">15th March, 2017</p>
              <div class="bloglisting__wrapper">
                <p class="bloglisting__teaser">What are WordPress Themes? Those new to the term may be forgiven for thinking they’re nothing but a ‘skin’ - a superficial alteration of typefaces and colour palettes. The reality is that themes are responsible for not only the style of the WordPress site but the structure, the functionality and the degree of customisation available to the user...</p>
                <a href="#" class="bloglisting__btn-read">Read post</a>
              </div>
            </div>

          </div>

          <div class="content__inner">

            <div class="bloglisting">
              <h3 class="bloglisting__title">Getting to grips with Grid</h3>
              <p class="bloglisting__date">9th March, 2017</p>
            </div>

          </div>

          </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include '../assets/includes/sidebar.php';?>
        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js"></script>
  </body>

</html>

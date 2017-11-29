<?php $index = ".."; ?>

<?php $activePage = "Contact"; ?>
<?php $title = "Contact | Thomas McCarten Portfolio"; ?>
<?php $description = "Contact details for Thomas McCarten Web Developer."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">
          <h2 class="title">Contact</h2>

          <div class="content__item">

            <section class="contact">
              <h3 class="content__heading">Thanks!</h3>

              <p class="about__text">I look forward to reading your email.</p>

            </section>

          </div>
        </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

    </main>

    <?php include $index . '/assets/includes/footer.php';?>

    <script src="<?php echo $index?>/assets/js/script.js?v=4"></script>
  </body>

</html>

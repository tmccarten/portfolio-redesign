<?php $index = "."; ?>

<?php $activePage = "Work"; ?>
<?php $title = "Work | Thomas McCarten Portfolio"; ?>
<?php $description = "Thomas McCarten is a Front End Developer/Designer based in Medway, Kent."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include 'assets/includes/head.php';?>

  <body>
    <?php include 'assets/includes/header.php';?>

    <main id="main" class="main main--home">
        <section class="tiles">

          <div class="tile tile--intro">
            <div class="tile-inner">
              <p class="tile-inner__sub">Hello!</p>
              <h2 class="tile-inner__main">I'm a front-end developer/designer based in Medway, Kent.</h2>
            </div>
          </div>

          <div class="tile tile--image">
            <img class="tile-inner tile-inner--mob" src="<?php echo $index?>/assets/img/home/portrait-mobile.png" alt="Tom McCarten" width="391" height="391">
            <img class="tile-inner tile-inner--desktop" src="<?php echo $index?>/assets/img/home/portrait-desktop.png" alt="Tom McCarten" width="267" height="267">
          </div>

          <a href="projects/" class="tile tile--projects tile--interact">
            <div class="tile-inner">
              <h3 class="tile-inner__main">Projects</h3>
            </div>
          </a>

          <a href="graphics/" class="tile tile--graphics tile--interact">
            <div class="tile-inner">
              <h3 class="tile-inner__main">Graphics</h3>
            </div>
          </a>

          <div class="tile tile--contact">
            <a href="#" class="tile-inner">
              <h3 class="tile-inner__main">Get in touch</h3>
              <img src="<?php echo $index?>/assets/img/icons/contact.svg" alt="Email icon" width="22" height="22">
            </a>
          </div>

          <div class="tile tile--icons">
            <div class="tile-inner">
              <a href="http://twitter.com/thomasmccarten" class="tile-inner__icon">
                <img src="<?php echo $index?>/assets/img/icons/twitter.svg" alt="Twitter logo" width="44" height="44">
              </a>
              <a href="http://github.com/tmccarten" class="tile-inner__icon">
                <img src="<?php echo $index?>/assets/img/icons/github.svg" alt="GitHub logo" width="44" height="44">
              </a>
              <a href="http://facebook.com/thomasmccarten" class="tile-inner__icon">
                <img src="<?php echo $index?>/assets/img/icons/facebook.svg" alt="Facebook logo" width="44" height="44">
              </a>
            </div>
          </div>

        </section><!-- end tiles -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>

          <?php include 'assets/includes/sidebar.php';?>

        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js?v=4"></script>
    <script src="<?php echo $index?>/assets/js/cookie-home.js"></script>
  </body>

</html>

<?php $index = "."; ?>

<?php $activePage = "Work"; ?>
<?php $title = "Home | Thomas McCarten Portfolio"; ?>
<?php $description = "Thomas McCarten is a Front End Developer/Designer based in Medway, Kent."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include 'assets/includes/head.php';?>

  <body>
    <?php include 'assets/includes/header.php';?>

    <main class="main">
      <section class="tiles">

        <div class="tile tile--alternate">
          <div class="tile-inner tile-inner--intro">
            <p class="tile-inner__sub">Hello!</p>
            <h2 class="tile-inner__main tile-inner__main--intro">I'm a front-end developer/designer based in Medway, Kent.</h2>
          </div>
        </div>

        <div class="tile">
          <div class="tile-inner">
            <p class="tile-inner__sub">Get in touch.</p>
          </div>
        </div>

        <div class="tile">
          <div class="tile-inner">
            <h3 class="tile-inner__main">Projects</h3>
          </div>
        </div>

        <div class="tile">
          <div class="tile-inner">
            <h3 class="tile-inner__main">Graphic Design</h3>
          </div>
        </div>

        <div class="tile tile--alternate">
          <div class="tile-inner">
            <a href="http://twitter.com/thomasmccarten" class="tile-inner__icon">
              <img src="<?php echo $index?>/assets/img/icons/twitter.svg" alt="Twitter logo" width="54" height="54">
            </a>
            <a href="http://github.com/tmccarten" class="tile-inner__icon">
              <img src="<?php echo $index?>/assets/img/icons/github.svg" alt="GitHub logo" width="54" height="54">
            </a>
            <a href="http://facebook.com/thomasmccarten" class="tile-inner__icon">
              <img src="<?php echo $index?>/assets/img/icons/facebook.svg" alt="Facebook logo" width="54" height="54">
            </a>
          </div>
        </div>

      </section>
    </main>


    <script src="<?php echo $index?>/assets/js/script.js"></script>
  </body>

</html>

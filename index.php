<?php $index = "."; ?>

<?php $activePage = "Work"; ?>
<?php $title = "Home | Thomas McCarten Portfolio"; ?>
<?php $description = "Thomas McCarten is a Front End Developer/Designer based in Medway, Kent."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include 'assets/includes/head.php';?>

  <body>
    <?php include 'assets/includes/header.php';?>

    <main>
      <section class="tiles">

        <div class="tile">
          <div class="tile-inner tile-inner--intro">
            <p class="tile-inner__sub">Hello.</p>
            <h2 class="tile-inner__main">I'm a front end developer/designer based in Medway, Kent.</h2>
          </div>
        </div>

        <div class="tile">
          <div class="tile-inner">
            <p class="tile-inner__sub">Hello.</p>
          </div>
        </div>

      </section>
    </main>


    <script src="<?php echo $index?>/assets/js/script.js"></script>
  </body>

</html>

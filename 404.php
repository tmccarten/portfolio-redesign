<?php $index = "."; ?>

<?php $activePage = "Work"; ?>
<?php $title = "Work | Tom McCarten Portfolio"; ?>
<?php $description = "Tom McCarten is a Front End Developer/Designer based in Medway, Kent."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include 'assets/includes/head.php';?>

  <body>
    <?php include 'assets/includes/header.php';?>

    <main id="main" class="main main--404">

      <div>
        <h2>Oops! Sorry, that page doesn't exist.</h2>
        <a href="<?php echo $index?>">Go home</a>
      </div>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js?v=<?php echo $jsVersion ?>"></script>
  </body>

</html>

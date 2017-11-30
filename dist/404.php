<?php $index = 'http://tommccarten.co.uk';?>

<?php $activePage = "Work"; ?>
<?php $title = "Work | Thomas McCarten Portfolio"; ?>
<?php $description = "Thomas McCarten is a Front End Developer/Designer based in Medway, Kent."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = "/assets/img/meta/ogimage.jpg"; ?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/assets/includes/head.php";
   include_once($path);
?>

  <body>
    <?php
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/assets/includes/header.php";
       include_once($path);
    ?>

    <main id="main" class="main main--404">

      <div>
        <h2>Oops! Sorry, that page doesn't exist.</h2>
        <a href="/">Go home</a>
      </div>

    </main>


    <script src="/assets/js/script.js?v=<?php echo $jsVersion ?>"></script>
  </body>

</html>

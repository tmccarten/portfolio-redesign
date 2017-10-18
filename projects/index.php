<?php $index = "../"; ?>

<?php $activePage = ""; ?>
<?php $title = "Projects | Thomas McCarten Portfolio"; ?>
<?php $description = "Some projects and case studies Thomas McCarten has worked on as a web developer."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include '../assets/includes/head.php';?>

  <body>
    <?php include '../assets/includes/header.php';?>

    <main class="main main--home">

        <section class="content">
          <h2 class="title">Projects</h2>

          <div class="content__inner">

            <div class="project">
              <img class="project__img" src="<?php echo $index?>assets/img/project_birley.png" width="" height="" alt="Birley Archive Project Screenshot">
              <div class="project__info">
                <h3>Living Lines: The Birley Archive Project</h3>
              </div>
            </div>

          </div>

        </section>

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>

          <?php include '../assets/includes/sidebar.php';?>

        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js"></script>
  </body>

</html>

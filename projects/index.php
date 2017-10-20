<?php $index = ".."; ?>

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

            <section class="project">
              <h3 class="project__title">Living Lines: Birley Archive Project</h3>
              <div class="project__imgbtn-wrapper">
                <img class="project__img" src="<?php echo $index?>/assets/img/project_birley.png" width="" height="" alt="Birley Archive Project Screenshot">
                <button class="project__btn-view">View site</button>
              </div>
              <div class="project__info">
                <h3 class="project__title project__title--no-mob">Living Lines: Birley Archive Project</h3>
                <h4 class="project__header">Overview</h4>
                <p class="project__text"><span class="project__text--intro">Living Lines is a project documenting the changes that have occurred around the Hulme area of Manchester since the 1800s, with a particular focus on Birley, the site of Manchester Metropolitan University's newest campus.</span> A challenging project, as the sole web developer I was responsible for the design and development of the website, collating various media and content types to produce an accessible and responsive solution. The client had a concept based around illustrated (illustrations and handwritten titles by <a href="https://katedunstone.co.uk/">Kate Dunstone</a>), interactive maps to demonstrate the different 'layers' of history at the Birley site. Creating these and ensuring a sound mobile user experience was challenging but something from which I learned a great deal.</p>
                <h4 class="project__header">Tools</h4>
                <p class="project__text">HTML5, CSS3, Sass, jQuery, JavaScript, PHP</p>
              </div>
            </section>

            </div><!-- content inner ends -->
          </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include '../assets/includes/sidebar.php';?>
        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js"></script>
  </body>

</html>

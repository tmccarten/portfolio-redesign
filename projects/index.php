<?php $index = ".."; ?>

<?php $activePage = "Work"; ?>
<?php $title = "works | Thomas McCarten Portfolio"; ?>
<?php $description = "works and case studies Thomas McCarten has worked on as a web developer."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main class="main main--home">

        <section class="content">
          <h2 class="title">Projects</h2>

          <div class="content__item">
            <div class="breadcrumb">
              <a href=".." class="breadcrumb__link">Work</a><p class="breadcrumb__grey">Projects</p>
            </div>

            <section class="work">
              <h3 class="content__heading content__heading--no-desktop">Living Lines: Birley Archive Project</h3>
              <div class="work__imgbtn-wrapper">
                <img class="work__img" src="<?php echo $index?>/assets/img/project_birley.png" width="575" height="334" alt="Birley Archive Project Screenshot">
                <a href="#" class="work__btn-view">View site</a>
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Living Lines: Birley Archive Project</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text"><span class="work__text--intro">Living Lines is a project documenting the changes that have occurred around the Hulme area of Manchester since the 1800s, with a particular focus on Birley, the site of Manchester Metropolitan University's newest campus.</span> A challenging project, as the sole web developer I was responsible for the design and development of the website, collating various media and content types to produce an accessible and responsive solution. The client had a concept based around illustrated (illustrations and handwritten titles by <a href="https://katedunstone.co.uk/" class="content__link">Kate Dunstone</a>), interactive maps to demonstrate the different 'layers' of history at the Birley site. Creating these and ensuring a sound mobile user experience was challenging but something from which I learned a great deal.</p>
                <h4 class="work__header">Tools/Tech</h4>
                <p class="work__text">
                  <span class="tool-tag">HTML5</span>
                  <span class="tool-tag">CSS3</span>
                  <span class="tool-tag">Sass</span>
                  <span class="tool-tag">jQuery</span>
                  <span class="tool-tag">JavaScript</span>
                  <span class="tool-tag">PHP</span>
                </p>
              </div>
            </section>

          </div>

          <div class="content__item">

            <section class="work">
              <h3 class="content__heading content__heading--no-desktop">Liverpool, Pembroke & Sefton Athletics</h3>
              <div class="work__imgbtn-wrapper">
                <img class="work__img" src="<?php echo $index?>/assets/img/project_lps.png" width="575" height="334" alt="LPS Website Screenshot">
                <a href="#" class="work__btn-view">View site</a>
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Liverpool, Pembroke & Sefton Athletics</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text"><span class="work__text--intro">Liverpool, Pembroke and Sefton Harriers and Athletics Club is based at Edge Hill University in the North West of England. Their official website whilst fully functional was lacking any sort of responsiveness, ensuring a poor user experience for all mobile users. I identified this as an opportunity for which to base my final year university project on, and, working with the website editor as my client gave the website a contemporary and responsive overhaul.</p>
                <h4 class="work__header">Tools/Tech</h4>
                <p class="work__text">
                  <span class="tool-tag">HTML5</span>
                  <span class="tool-tag">CSS3</span>
                  <span class="tool-tag">Sass</span>
                  <span class="tool-tag">JavaScript</span>
                  <span class="tool-tag">PHP</span>
                </p>
              </div>
            </section>

          </div>

            </div><!-- content inner ends -->
          </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

        <div class="scroll-up">
          <img src="<?php echo $index?>/assets/img/icons/arrow-up.svg" class="scroll-up__icon" alt="Scroll-up" width="44" height="44">
        </div>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js?v=4"></script>
  </body>

</html>

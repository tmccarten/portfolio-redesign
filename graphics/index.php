<?php $index = ".."; ?>

<?php $activePage = "Work"; ?>
<?php $title = "Graphics | Thomas McCarten Portfolio"; ?>
<?php $description = "Illustrations and graphic design by web developer Thomas McCarten."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">
          <h2 class="title">Graphics</h2>
          <div class="breadcrumb">
            <a href=".." class="breadcrumb__link">Work</a><p class="breadcrumb__grey">Graphics</p>
          </div>

          <div class="content__item content__item--project">

            <section class="work">
              <h3 class="content__heading content__heading--no-desktop">Personas</h3>
              <div class="work__wrap">
                <a href="<?php echo $index?>/assets/img/graphics/personas.png">
                  <img class="work__img" src="<?php echo $index?>/assets/img/graphics/personas.png" width="575" height="404" alt="Illustrated colourful depictions of boy and girl portraits">
                </a>
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Personas</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text">Personas help keep in mind different types of users and their needs during the development phase of a project.</p>
                <p class="work__text"><a href="<?php echo $index?>/assets/docs/personas.pdf" class="content__link">Personas and user journeys</a></p>

              </div>
            </section>

          </div>

          <div class="content__item content__item--project">

            <section class="work">
              <h3 class="content__heading content__heading--no-desktop">Logos</h3>
              <div class="work__wrap">
                <a href="<?php echo $index?>/assets/img/graphics/logos.png">
                  <img class="work__img" src="<?php echo $index?>/assets/img/graphics/logos.png" width="575" height="334" alt="Collection of logos">
                </a>
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Logos</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text">A collection of logos I produced whilst trying my hand at speculative design work.</p>

              </div>
            </section>

          </div>

          <div class="content__item content__item--project">

            <section class="work">
              <h3 class="content__heading content__heading--no-desktop">Posters</h3>
              <div class="work__wrap">
                <a href="<?php echo $index?>/assets/img/graphics/other_docposter.jpg">
                  <img class="work__img" src="<?php echo $index?>/assets/img/graphics/other_docposter.jpg" width="575" height="813" alt="Documentary poster for Manchester IRA Bomb with a postbox broken up into pieces.">
                </a>
                <a href="<?php echo $index?>/assets/img/graphics/other_productposter.jpg">
                  <img class="work__img" src="<?php echo $index?>/assets/img/graphics/other_productposter.jpg" width="575" height="407" alt="Poster advertising a tour of Manchester IRA Bomb location with postbox and shattered glass appearance.">
                </a>
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Posters</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text">Posters made for the Creative Digital Media Production unit of BSc Web Development at university. The brief involved the production of a short film based on a subject of our choosing. The first poster advertises the film whilst the second is based around the idea of an associated 'product'. Both posters were to be inspired by a chosen art movement. I decided on cubism, although the link is rather tenuous.</p>
              </div>
            </section>

          </div>

          <div class="content__item content__item--project">

            <section class="work">
              <h3 class="content__heading content__heading--no-desktop">Ilustration</h3>
              <div class="work__wrap">
                <a href="<?php echo $index?>/assets/img/graphics/path.png">
                  <img class="work__img" src="<?php echo $index?>/assets/img/graphics/path.png" width="574" height="900" alt="Illustration of path leading into distance with mountains on horizon and tall trees either side. A male with a backpack looks ahead.">
                </a>
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Illustration</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text">This was a vector made in Illustrator, beginning as a simple perspective experiment and ending in whatever this is.</p>
              </div>
            </section>

          </div>

        </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

    </main>

    <?php include $index . '/assets/includes/footer.php';?>

    <script src="<?php echo $index?>/assets/js/script.js?v=<?php echo $jsVersion ?>"></script>
  </body>

</html>

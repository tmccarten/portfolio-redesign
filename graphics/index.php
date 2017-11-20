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
              <div class="work__imgbtn-wrapper work__imgbtn-wrapper--graphics">
                <img class="work__img" src="<?php echo $index?>/assets/img/graphics/personas.png" width="575" height="404" alt="Illustrated colourful depictions of boy and girl portraits">
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Personas</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text">Personas help keep in mind different types of users and their needs during the development phase of a project.</p>

              </div>
            </section>

          </div>

          <div class="content__item content__item--project">

            <section class="work">
              <h3 class="content__heading content__heading--no-desktop">Logos</h3>
              <div class="work__imgbtn-wrapper work__imgbtn-wrapper--graphics">
                <img class="work__img" src="<?php echo $index?>/assets/img/graphics/logos.png" width="575" height="334" alt="Collection of logos">
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Logos</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text">A collection of logos I produced whilst trying my hand at speculative design work. No winners here sadly but it's the taking part that counts.</p>

              </div>
            </section>

          </div>

          <div class="content__item content__item--project">

            <section class="work">
              <h3 class="content__heading content__heading--no-desktop">Posters</h3>
              <div class="work__imgbtn-wrapper work__imgbtn-wrapper--graphics">
                <img class="work__img" src="<?php echo $index?>/assets/img/graphics/other_docposter.jpg" width="575" height="813" alt="Documentary poster for Manchester IRA Bomb with a postbox broken up into pieces.">
                <img class="work__img" src="<?php echo $index?>/assets/img/graphics/other_productposter.jpg" width="575" height="407" alt="Poster advertising a tour of Manchester IRA Bomb location with postbox and shattered glass appearance.">
              </div>
              <div class="work__info">
                <h3 class="content__heading content__heading--no-mob">Posters</h3>
                <h4 class="work__header">Overview</h4>
                <p class="work__text">Posters made for the Creative Digital Media Production unit of BSc Web Development at university. The brief involved the production of a short film based on a subject of our choosing. The first poster advertises the film whilst the second is based around the idea of an associated 'product'. Both posters were to be inspired by a chosen art movement. I decided on cubism, although the link is rather tenuous.</p>

              </div>
            </section>

          </div>

        </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js?v=4"></script>
  </body>

</html>

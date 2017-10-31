<?php $index = ".."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Blog | Thomas McCarten Portfolio"; ?>
<?php $description = "Index of blog posts by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include '../assets/includes/head.php';?>

  <body>
    <?php include '../assets/includes/header.php';?>

    <main class="main main--home">

        <section class="content">
          <h2 class="title">Blog</h2>

          <div class="content__inner">

            <div class="bloglisting">
              <h3 class="bloglisting__title">Getting Started with WordPress Theme Development</h3>
              <p class="bloglisting__date">15th March, 2017</p>
              <div class="bloglisting__wrapper">
                <p class="bloglisting__teaser">What are WordPress Themes? Those new to the term may be forgiven for thinking they’re nothing but a ‘skin’ - a superficial alteration of typefaces and colour palettes. The reality is that themes are responsible for not only the style of the WordPress site but the structure, the functionality and the degree of customisation available to the user...</p>
                <a href="#" class="bloglisting__btn-read">Read post
                  <span class="visuallyhidden">on 'Getting Started with WordPress Theme Development'</span>
                </a>
              </div>
            </div>

          </div>

          <div class="content__inner">

            <div class="bloglisting">
              <h3 class="bloglisting__title">Getting to grips with Grid</h3>
              <p class="bloglisting__date">9th March, 2017</p>
              <div class="bloglisting__wrapper">
                <p class="bloglisting__teaser">Just over twenty years since its initial release it may seem hard to believe that, until now, CSS hasn’t really offered a method of creating page layouts in a way that doesn’t involve ‘hacks’ or forcing properties to behave in ways they were never designed for. Whilst Flexbox is and was an excellent addition to the developer’s toolbox, being a one-dimensional layout module makes it somewhat unconducive to overall page layout...</p>
                <a href="#" class="bloglisting__btn-read">Read post
                  <span class="visuallyhidden">on 'Getting to grips with Grid'</span>
                </a>
              </div>
            </div>

          </div>

          <div class="content__inner">

            <div class="bloglisting">
              <h3 class="bloglisting__title">Portfolio updates and improvements</h3>
              <p class="bloglisting__date">25th February, 2017</p>
              <div class="bloglisting__wrapper">
                <p class="bloglisting__teaser">After receiving feedback from lecturers and industry professionals alike, it was time to take heed of this advice and make amendments to the website...</p>
                <a href="#" class="bloglisting__btn-read">Read post
                  <span class="visuallyhidden">on 'Portfolio updates and improvements'</span>
                </a>
              </div>
            </div>

          </div>

          <div class="content__inner">

            <div class="bloglisting">
              <h3 class="bloglisting__title">Optimising for increased speed and integrity</h3>
              <p class="bloglisting__date">2nd December, 2016</p>
              <div class="bloglisting__wrapper">
                <p class="bloglisting__teaser">In wanting to make the switch from amateur to professional front end web developer I think optimisation (as a broad term) and knowing how to do it will be of paramount importance...</p>
                <a href="#" class="bloglisting__btn-read">Read post
                  <span class="visuallyhidden">on 'Optimising for increased speed and integrity'</span>
                </a>
              </div>
            </div>

          </div>

          <div class="content__inner">

            <div class="bloglisting">
              <h3 class="bloglisting__title">Building my portfolio</h3>
              <p class="bloglisting__date">6th November, 2016</p>
              <div class="bloglisting__wrapper">
                <p class="bloglisting__teaser">I had a vague idea of how I wanted the website to look (more personal than corporate) after experimenting with different ideas over summer. Nonetheless, I sought and found further inspiration in Creative Bloq’s '45 brilliant design portfolios to inspire you' rundown...</p>
                <a href="#" class="bloglisting__btn-read">Read post
                  <span class="visuallyhidden">on 'Building my portfolio'</span>
                </a>
              </div>
            </div>

          </div>

          </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include '../assets/includes/sidebar.php';?>
        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js"></script>
  </body>

</html>

<?php $index = "../.."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Optimising for increased speed and integrity | Blog | Tom McCarten Portfolio"; ?>
<?php $description = "Blog post detailing the optimisation process by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">

          <div class="breadcrumb">
            <a href=".." class="breadcrumb__link">Blog</a>
            <p class="breadcrumb__grey">Optimising for increased speed and integrity</p>
          </div>

          <div class="content__item">

            <article class="blogpost">

              <section class="blogpost__header">
                <h2 class="blogpost__title">Optimising for increased speed and integrity</h2>
                <p class="blogpost__meta blogpost__meta--author">by Tom McCarten</p>
                <time datetime="2016-12-02" class="blogpost__meta blogpost__meta--date">2nd December, 2016</time>
              </section>

              <div class="blogpost__main">
                <section class="blogpost__content">
                  <h3 class="blogpost__heading">Code validation</h3>
                  <p class="blogpost__text">In wanting to make the switch from amateur to professional front end web developer I think optimisation (as a broad term) and knowing how to do it will be of paramount importance.</p>

                  <p class="blogpost__text">With that in mind I have ensured that the HTML of every page of this website validates to HTML5 standards of W3C. There are different methods of ensuring that the code you’re writing is valid and semantic. I don’t think you can go wrong with the <a href="https://validator.w3.org/" class="content__link">W3C Markup Validation Service</a>. This is my preferred method of HTML validation, but there are alternatives available. These include validators built into the software you write your HTML in. HTML that doesn’t validate is always going to be a risk in terms of usability but more so accessibility. A page that looks perfectly functional may be broken and unusable for a screen reader user if the HTML is invalid.</p>

                  <h3 class="blogpost__heading">Page optimisation</h3>
                  <p class="blogpost__text">Speed is key, particularly now that the phone is the most widely used method of browsing the internet. 4G is all well and good but using up your data allowance on huge images you can’t even get the benefit of isn’t. I made the conscious decision to save my images as PNG and then use <a href="http://www.tinypng.com/" class="content__link">Tiny PNG</a> to drastically reduce the file size. I think this works well for images with a limited colour range but I saw room for improvement with some of the photography. I opened these up in Photoshop and manually applied compression to output as JPG. I ran <a href="https://addons.mozilla.org/en-gb/firefox/addon/dust-me-selectors/" class="content__link">Dust Me Selectors</a> across all pages in one sweep (the spider option) and this notified me of the CSS selectors not being used anywhere on the entire website. I then removed these, cutting down on the lines of code being sent from the server to user unnecessarily.</p>

                  <a href="<?php echo $index?>/assets/img/blog/dustme.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/dustme.png" class="blogpost__image" width="575" height="493" alt="List of unused selectors in Dust Me add-on">
                      <figcaption class="blogpost__figcaption">List of unused selectors.</figcaption>
                    </figure>
                  </a>

                  <h3 class="blogpost__heading">SEO integration</h3>
                  <p class="blogpost__text">Ensured that all pages had a present and appropriate page title. Page titles appear on Google as the blue text atop each search result, so it’s necessary to make these relevant. Not just for the user, but to satisfy the algorithms Google use behind the scenes. By the same token I gave each page a suitable page description via the meta tag and added a few keywords that I’d like to be associated with via search terms. The latter is somewhat outdated but does no harm. Backlinks are crucial for improving page ranking on Google so I’ll be sure to link to my portfolio on social media when it goes live. Similarly, I chose to embed the tweets within this blog post. The navigation structure, semantic HTML and none of the pages being broken are all good things for SEO.</p>

                </section><!-- blogpost content ends -->

                <aside class="blogpost__share">
                  <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//tommccarten.co.uk/blog/2016/optimising-for-increased-speed-and-integrity.php" class="btn-share">Share on Facebook</a>
                  <a href="https://twitter.com/home?status=http%3A//tommccarten.co.uk/blog/2016/optimising-for-increased-speed-and-integrity.php" class="btn-share btn-share--twitter">Share on Twitter</a>
                </aside>

              </div><!-- blogpost main ends -->

            </article>

          </div><!-- content inner ends -->

          <a href=".." class="return-link"><img src="<?php echo $index?>/assets/img/icons/back.svg" height="20" width="20" alt=""><p>Blog index</p></a>

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

<?php $index = "../.."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Portfolio updates and improvements | Blog | Thomas McCarten Portfolio"; ?>
<?php $description = "Blog post detailing portfolio website changes by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">

          <div class="breadcrumb">
            <a href=".." class="breadcrumb__link">Blog</a>
            <p class="breadcrumb__grey">Portfolio updates and improvements</p>
          </div>

          <div class="content__item">

            <article class="blogpost">

              <section class="blogpost__header">
                <h2 class="blogpost__title">Portfolio updates and improvements</h2>
                <p class="blogpost__meta blogpost__meta--author">by Tom McCarten</p>
                <time datetime="2017-02-25" class="blogpost__meta blogpost__meta--date">25th February, 2017</time>
              </section>

              <div class="blogpost__main">
                <section class="blogpost__content">
                  <p class="blogpost__text blogpost__text--intro">After receiving feedback from lecturers and industry professionals alike, it was time to take heed of this advice and make amendments to the website.</p>

                  <p class="blogpost__text">View the <a href="http://www.06167055.webdevmmu.uk/Other/Archived_Portfolio/index.php" class="content__link">old version here</a>

                  <h3 class="blogpost__heading">Information architecture</h3>
                  <p class="blogpost__text">The most glaring issue was on the <a href="http://www.06167055.webdevmmu.uk/Other/Archived_Portfolio/blog.php" class="content__link">blog page</a>, an obvious example of poorly considered information architecture. Whilst this in theory directed to the newest blog post by default, the only method to access other posts was via the sidebar. The sidebar numbered each post incrementally... unusual in itself, but particularly when there's no post date to go with each title. The fix for these problems therefore came in two parts - creating a landing page for the blog page with a list of all the blog posts and their post dates, and a new sidebar that displayed only the latest four posts with a date stamp adjacent to the title. The logical conclusion of the previous incarnation was a potential UX nightmare: a never-ending sidebar of numbered blog posts!</p>

                  <p class="blogpost__text">With the new sidebar complete I realised it could be useful on the home page, which had nothing on it but static content. Google monitors pages for fresh content and <a href="https://moz.com/blog/google-fresh-factor-new" class="content__link">may influence Google rankings</a>. With that in mind, the homepage was reorganised to make space for the sidebar. As well as potential SEO benefits, I thought it would also encourage the user to actually read the blog posts if they could see them straight away on the homepage.</p>

                  <h3 class="blogpost__heading">Aesthetics</h3>
                  <p class="blogpost__text">Whilst I liked the colour palette, it was essentially duo-tone and calling out for a third colour. You can see this on the blog dates, a small addition that to my eyes works in harmony with the blue tones and makes quite a difference to the overall aesthetic.</p>

                  <p class="blogpost__text">On each blog post the main title has been given the 'Merriweather' font treatment to match those on the tiles of the homepage, and given a substantial increase in size. At desktop size in particular I think this works well, looks more blog-like and ensures greater differentiation between the title and the sub-headings within each post.</p>

                  <p class="blogpost__text">The max-width of the site's container, that is, the area in the middle where everything sits, has been expanded from 960px wide to 1200px. 960px was already somewhat dated when I made the first version of the site, and 1200px reduces the amount of whitespace either side of the middle, mitigating slightly the effect of higher and higher resolutions being used for browsing at desktop width.</p>

                  <h3 class="blogpost__heading">Code</h3>
                  <p class="blogpost__text">There were some cross-browser issues with regards to the tiles on the homepage and the centering of their titles. Due to a <a href="https://developers.google.com/web/updates/2016/06/absolute-positioned-children" class="content__link">change in the Flexbox spec</a> that browsers have adopted at different rates, Chrome displayed the titles perfectly centred whilst Firefox and IE had them pushed off to the side. This was remedied by removing the inline images and therefore the need for absolute positioning. I may add the images back in as background images but I like the look of the tiles without for the time being.</p>

                  <p class="blogpost__text">The script tag linking to my JavaScript file was removed from the header and placed before the closing body tag. It's better practice to place JS files at the end, such that the website will always at least load before it gets to it.</p>

                </section><!-- blogpost content ends -->

                <aside class="blogpost__share">
                  <a href="http://www.facebook.com/share.php?u=http://10.77.251.14:8000/portfolio-redesign/blog/2016/building-my-portfolio.php&title=Building-my-portfolio" class="btn-share">Share on Facebook</a>
                  <a href="#" class="btn-share btn-share--twitter">Share on Twitter</a>
                </aside>

              </div><!-- blogpost main ends -->

            </article>

          </div><!-- content inner ends -->

          <a href=".." class="return-link"><img src="<?php echo $index?>/assets/img/icons/back.svg" height="20" width="20" alt=""><p class="blogpost__text">Blog index</p></a>

        </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

    </main>

    <?php include $index . '/assets/includes/footer.php';?>

    <script src="<?php echo $index?>/assets/js/script.js?v=4"></script>
  </body>

</html>

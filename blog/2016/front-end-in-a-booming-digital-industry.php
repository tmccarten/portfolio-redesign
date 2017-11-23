<?php $index = "../.."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Front-end in a booming digital industry | Blog | Thomas McCarten Portfolio"; ?>
<?php $description = "Blog post detailing the boom of digital industries by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">

          <div class="breadcrumb">
            <a href=".." class="breadcrumb__link">Blog</a>
            <p class="breadcrumb__grey">Front-end in a booming digital industry</p>
          </div>

          <div class="content__item">

            <article class="blogpost">

              <section class="blogpost__header">
                <h2 class="blogpost__title">Front-end in a booming digital industry</h2>
                <p class="blogpost__meta blogpost__meta--author">by Tom McCarten</p>
                <time datetime="2016-10-26" class="blogpost__meta blogpost__meta--date">26th October, 2016</time>
              </section>

              <div class="blogpost__main">
                <section class="blogpost__content">

                  <h3 class="blogpost__heading">The industry</h3>
                  <p class="blogpost__text">The UK’s digital tech industries are expanding and evolving at a rate that shows no sign of slowing. Between 2011 and 2014 UK digital tech industries had a job creation rate 2.8 times faster than the rest of the economy, with 1.56m people employed in digital tech occupations. Translated into turnover that’s £161bn, a 32% faster growth rate than the rest of the economy and an average salary 36% higher than the national average. These figures are taken from the <a href="http://www.techcityuk.com/wp-content/uploads/2016/02/Tech-Nation-2016_FINAL-ONLINE-1.pdf" class="content__link" title="Tech Nation 2016 report PDF.">Tech Nation 2016 Report</a>.It’s all good news for people like myself, hoping to forge a career in the digital tech industry.

                  <p class="blogpost__text">Yet with this expansion comes the emergence of roles within businesses up and down the country waiting and needing to be filled. A surprising outcome of the <a href="http://www.slideshare.net/ManchesterDigital/manchester-digital-skills-audit-2016-results" class="content__link" title="Digital Skills Audit 2016 slide deck">Manchester Digital Skills Audit 2016</a> (MDSA) was the significance of the ‘developer’ role to those businesses surveyed. Not only do they find it to be the most difficult role to fill, they believe that the skillsets needed to fulfil the role will grow in importance more than any other. As someone who wishes to become a professional front-end web developer this was both revealing and reassuring to know that the need is very much there.</p>

                  <a href="<?php echo $index?>/assets/img/blog/mdsaroles.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/mdsaroles.png" class="blogpost__image" width="575" height="432" alt="Pie chart showing the developer role the most difficult role to fill at 65% compared to 13% project management and 22% sales and business development.">
                      <figcaption class="blogpost__figcaption">List of unused selectors.</figcaption>
                    </figure>
                  </a>

                  <h3 class="blogpost__heading">What trends or expected practices do I need to be aware of as an aspiring professional front end web developer in 2016?</h3>

                  <p class="blogpost__text">Much like the industry in which it resides, front-end web development is constantly evolving. And with this comes the pressure to keep abreast of new techniques and technologies. At 57%, PHP was the most widely used programming language by the businesses surveyed in the MDSA. I found this mildly surprising. As someone with only limited PHP programming experience I hope to use this information as a motive to use it more.</p>

                  <p class="blogpost__text">In this article digital designer Jamie Leeson predicts <a href="https://www.zazzlemedia.co.uk/blog/digital-design-trends/" class="content__link" title="Zazzle Media post on digital design trends">further adoption of the mobile-first approach to web design</a>. After all, the <a href="https://www.theguardian.com/technology/2015/aug/06/smartphones-most-popular-way-to-browse-internet-ofcom" class="content__link" title="Guardian article on smartphone internet use.">smartphone became the most popular method</a> of browsing the internet for the first time last year. Rapid prototyping software like Webflow, Marvel and Invision appear to be increasing in popularity alongside the continued growth of <a href="https://www.usertesting.com/blog/2015/09/16/what-is-ux-design-15-user-experience-experts-weigh-in" class="content__link" title="Blog post defining UX Design.">user experience design</a>, and on that note the JavaScript library <a href="https://facebook.github.io/react/" class="content__link" title="Official github page for JavaScript React">React</a> deserves a mention. Formed out of a collaboration between Facebook and Instagram, React “makes it painless to create interactive UIs” (React, 2016). I hope to experiment with React in due course and perhaps write about my experiences in a future blog post, so watch this space. What else have I noticed? The increasing prevalence of WordPress. As by far the most widely used content management system with 58.7% of the market share, <a href="https://w3techs.com/technologies/overview/content_management/all" class="content__link" title="W3Techs WordPress usage statistics.">WordPress makes up 27% of the web </a>itself. This represents, in WordPress development, a further skillset I need to acquire and at the very least have some basic knowledge of in order to enhance my employability.</p>

                  <h3 class="blogpost__heading">The community</h3>
                  <p class="blogpost__text">One of the great things about the web development industry is its community. Web developers like to help other web developers. Ideas, work methods and solutions to problems are shared and discussed both online (websites like Chris Coyier’s <a href="https://css-tricks.com/" class="content__link" title="CSS-Tricks homepage.">CSS-Tricks</a> and <a href="http://alistapart.com" class="content__link" title="A List Apart homepage.">A List Apart</a> are fantastic, generous resources for all things CSS and general web development respectively) and at the many events and conferences that take place across the country. As well as Front End North, more recently I attended NUX5 and WordCamp Manchester 2016:</p>

                  <div class="blogpost__tweet-wrap"><blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">In my seat for <a href="https://twitter.com/hashtag/NUX5?src=hash">#NUX5</a> <a href="https://t.co/MQV2GMT5lQ">pic.twitter.com/MQV2GMT5lQ</a></p>&mdash; Tom McCarten (@thomasmccarten) <a href="https://twitter.com/thomasmccarten/status/784314817884545025">October 7, 2016</a></blockquote></div>

                  <div class="blogpost__tweet-wrap"><blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Fantastic crew of <a href="https://twitter.com/hashtag/AR_MMU?src=hash">#AR_MMU</a> students at <a href="https://twitter.com/hashtag/wcmcr?src=hash">#wcmcr</a> today 👏 <a href="https://t.co/HwSezGECyA">pic.twitter.com/HwSezGECyA</a></p>&mdash; Richard Eskins (@eskins) <a href="https://twitter.com/eskins/status/789857770782720002">October 22, 2016</a></blockquote>
                  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>

                  <p class="blogpost__text">Whilst educational, events like these are equally about the networking opportunities they provide. The MDSA showed how, of the businesses surveyed, the majority sourced new talent through peer recommendation. Although a good portfolio and academic achievements are useful, enthusiasm, passion and involvement in the industry are essential – exemplified here by Senior Developer at Make Do, Dave Green, who earned his current position on the back of an appearance at a web conference:</p>

                  <div class="blogpost__tweet-wrap"><blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">As I&#39;ve found out first hand in the last 18 months, web conferences can and do change your life. Make the most of them! <a href="https://twitter.com/hashtag/wcmcr?src=hash">#wcmcr</a></p>&mdash; Dave Green (@davetgreen) <a href="https://twitter.com/davetgreen/status/789760413181280256">October 22, 2016</a></blockquote>
                  <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>

                  <p class="blogpost__text">And with that comes an important, if unsurprising conclusion. That to succeed in the digital industries one must not only stay dedicated to learning and expanding ones knowledge, but exhibit passion and enthusiasm for doing so.</p>

                  <h4 class="blogpost__heading blogpost__heading--small">References</h4>

                  <p class="blogpost__text"><small>React. (2016) A JavaScript library for building user interfaces - react. 2016. [Online] [Accessed on 1st November 2016] https://facebook.github.io/react/</small></p>
                  <p class="blogpost__text"><small>Tech Nation. (2016) Transforming UK Industries. [Online] [Accessed on 1st November 2016] http://www.techcityuk.com/wp-content/uploads/2016/02/Tech-Nation-2016_FINAL-ONLINE-1.pdf</small></p>
                  <p class="blogpost__text"><small>W3Techs Web Technology Surveys. (2016) Usage statistics and market share of content management systems for Websites, November 2016. 1st November. [Online] [Accessed on 1st November 2016] https://w3techs.com/technologies/overview/content_management/all</small></p>

                </section><!-- blogpost content ends -->

                <aside class="blogpost__share">
                  <a href="http://www.facebook.com/share.php?u=http://10.77.251.14:8000/portfolio-redesign/blog/2016/building-my-portfolio.php&class="content__link" title=Building-my-portfolio" class="btn-share">Share on Facebook</a>
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

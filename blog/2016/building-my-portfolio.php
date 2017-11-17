<?php $index = "../.."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Building my portfolio | Blog | Thomas McCarten Portfolio"; ?>
<?php $description = "Blog post detailing the building of a portfolio website by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">

          <div class="content__item">

            <div class="breadcrumb">
              <a href=".." class="breadcrumb__link">Blog</a>
              <p class="breadcrumb__grey">Building my portfolio</p>
            </div>

            <article class="blogpost">

              <section class="blogpost__header">
                <h2 class="blogpost__title">Building my portfolio</h2>
                <p class="blogpost__meta blogpost__meta--author">by Tom McCarten</p>
                <time datetime="2016-11-06" class="blogpost__meta blogpost__meta--date">6th November, 2016</time>
              </section>

              <div class="blogpost__main">
                <section class="blogpost__content">
                  <h3 class="blogpost__heading">Inspiration</h3>

                  <p class="blogpost__text">I had a vague idea of how I wanted the website to look (more personal than corporate) after experimenting with different ideas over summer. Nonetheless, I sought and found further inspiration in Creative Bloq’s <a href="http://www.creativebloq.com/portfolios/examples-712368" class="content__link">45 brilliant design portfolios to inspire you</a> rundown. I was especially interested in the layout decisions the designers made in choosing how to best showcase their work. Whilst some solutions were truly unique, the tried and tested method of presenting each case study or category of work as a clickable square or rectangle in a grid layout seemed the most widely used. The <a href="http://strange.wales/" class="content__link">homepage of Gareth Strange</a> is an excellent example of this, combining clean minimalism with sensible responsive breakpoints to let the beauty of the artwork speak for itself.</p>

                  <a href="<?php echo $index?>/assets/img/blog/strangelove.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/strangelove.png" class="blogpost__image" width="575" height="315" alt="Tiled homepage of Gareth Strange">
                      <figcaption class="blogpost__figcaption">Gareth Strange's homepage.</figcaption>
                    </figure>
                  </a>

                  <p class="blogpost__text">I don’t have a portfolio of work anything like Gareth’s, but a similar grid layout is something I wanted to use in my own design. I think it’s useful to browse examples of work that we find particularly attractive. Doing so may subconsciously influence our future work even if we don’t realise the information has been absorbed at the time. Creative Something go over this in more detail in this interesting <a href="http://creativesomething.net/post/66982583259/the-creative-processing-your-brain-wont-tell-you" class="content__link">article on creative processing</a>.</p>

                  <h3 class="blogpost__heading">Designing it</h3>

                  <p class="blogpost__text">For the design, I skipped straight into creating a high fidelity concept in Photoshop. Don’t do this. Not only does it run the risk of wasting hours of development time on a website that may prove to be unfeasible in a user experience sense, it limits your thinking. Fortunately, whilst not evidenced on paper, I had roughly considered the organisation of pages and content before I began coding. But if I were to do it again I’d follow the correct procedure of brainstorming and <a href="http://www.experienceux.co.uk/faqs/what-is-wireframing" class="content__link">wireframing</a> different options. The information architecture could be improved - I'd like the homepage to feature teasers of content from other pages. I will rectify that in due course.</p>

                  <a href="<?php echo $index?>/assets/img/blog/wireframes.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/wireframes.png" class="blogpost__image" alt="Home and about page wireframes">
                      <figcaption class="blogpost__figcaption">Wireframes... reverse engineering.</figcaption>
                    </figure>
                  </a>

                  <a href="<?php echo $index?>/assets/img/blog/concept.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/concept.png" class="blogpost__image" alt="Initial homepage concept">
                      <figcaption class="blogpost__figcaption">My hi-fi mockup in Photoshop.</figcaption>
                    </figure>
                  </a>

                  <p class="blogpost__text">Despite this, one thing I was highly conscious of from the beginning and let dictate the design of the layout somewhat was line length. Websites with overly long line lengths give off a conspicuous air of amateurism, so it was important to me to keep it within the ideal range of 45 to 75 characters. This Laura Franz <a href="https://www.smashingmagazine.com/2014/09/balancing-line-length-font-size-responsive-web-design" class="content__link">article on line length and font-size</a> for Smashing Magazine was an excellent resource on the topic, suggesting that it’s the width of the text container that should be altered to preserve line length, not the size of the font. Overly large font sizes have a negative impact on readability.</p>

                  <h3 class="blogpost__heading">Building it</h3>

                  <p class="blogpost__text">Otherwise known as the technical bit. The first step was to setup a folder structure for development. I tend to use the same setup now for all web projects, and the folder structure was something I learned from Travis Neilson of DevTips. His <a href="https://github.com/DevTips/DevTips-Starter-Kit" class="content__link">DevTips Starter Kit</a> was a perfect introduction to thinking about the organisation of the development process more professionally. In doing so I became an advocate of <a href="http://sass-lang.com/" class="content__link">Sass</a>, <a href="http://gulpjs.com/" class="content__link">Gulp</a> and <a href="https://git-scm.com/" class="content__link">Git</a>. Using Sass in conjunction with Gulp greatly improved the ease and speed of my workflow; the former allowing the use of variables, nesting and partials enabled me to write code in a more organised, modular fashion than vanilla CSS. As well as using Gulp to compile my Sass to CSS, I used <a href="https://www.browsersync.io/" class="content__link">Browsersync</a> to allow for instant browser reloading after saving code, <a href="https://autoprefixer.github.io/" class="content__link">Autoprefixer</a> to automatically add the vendor prefixes to CSS properties for older browsers and <a href="https://www.npmjs.com/package/gulp-connect-php" class="content__link">gulp-connect-php</a> to run a local PHP server during development.</p>

                  <a href="<?php echo $index?>/assets/img/blog/sassgulp.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/sassgulp.png" class="blogpost__image" alt="Sass code and JavaScript in a gulp file">
                      <figcaption class="blogpost__figcaption">Variables in Sass and my gulpfile.js</figcaption>
                    </figure>
                  </a>

                  <p class="blogpost__text">Using Git for version control meant I could experiment to my heart’s content without fear of breaking something past the point of no return. I found having such peace of mind valuable to say the least.</p>

                  <p class="blogpost__text">Thanks to flexbox the overall layout was relatively simple to code, major breakpoints usually entailed simply changing the flex-direction to ‘column’ or ‘row’, depending on the context, and then tweaking. One aspect I found rewarding was figuring out how I could create those boxed headers with the dotted border and horizontal lines either side. My first attempt was almost successful but the horizontal line was visible behind the header text. After experimenting for a while I arrived at the answer by breaking up the header into three distinct parts and applying a negative top margin to the box in the middle. I <a href="https://codepen.io/blackmath/pen/qaGEog" class="content__link">saved the technique on CodePen</a> if this interests you.</p>

                  <p class="blogpost__text">Here’s <a href="https://github.com/tmccarten/agency_ready" class="content__link">my Github repository</a> if you want to see how much blood, sweat and tears went into making this site.</p>

                  <h3 class="blogpost__heading">References</h3>

                </section><!-- blogpost content ends -->

                <aside class="blogpost__share">
                  <a href="http://www.facebook.com/share.php?u=http://10.77.251.14:8000/portfolio-redesign/blog/2016/building-my-portfolio.php&title=Building-my-portfolio" class="btn-share">Share on Facebook</a>
                  <a href="#" class="btn-share btn-share--twitter">Share on Twitter</a>
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


    <script src="<?php echo $index?>/assets/js/script.js?v=4"></script>
  </body>

</html>

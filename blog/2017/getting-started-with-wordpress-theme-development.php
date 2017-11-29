<?php $index = "../.."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Getting started with WordPress Theme Development | Blog | Thomas McCarten Portfolio"; ?>
<?php $description = "Blog post detailing an introduction to WordPress Theme Development by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>
<?php $ogimage = $index . "/assets/img/meta/ogimage.jpg"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main id="main" class="main main--home">

        <section class="content">

          <div class="breadcrumb">
            <a href=".." class="breadcrumb__link">Blog</a>
            <p class="breadcrumb__grey">Getting started with WordPress Theme Development</p>
          </div>

          <div class="content__item">

            <article class="blogpost">

              <section class="blogpost__header">
                <h2 class="blogpost__title">Getting started with WordPress Theme Development</h2>
                <p class="blogpost__meta blogpost__meta--author">by Tom McCarten</p>
                <time datetime="2016-11-06" class="blogpost__meta blogpost__meta--date">6th November, 2016</time>
              </section>

              <div class="blogpost__main">
                <section class="blogpost__content">
                  <h3 class="blogpost__heading">Aim</h3>
                  <p class="blogpost__text">To develop a WordPress Theme loosely based on this website.</p>

                  <h3 class="blogpost__heading">Objectives</h3>
                  <ol class="blogpost__ordered-list">
                    <li>To demonstrate understanding of how WordPress Themes work.</li>
                    <li>To set up a development environment for theme development.</li>
                    <li>To create and apply a theme to the WordPress version of my website.</li>
                  </ol>

                  <h3 class="blogpost__heading">Definition</h3>
                  <p class="blogpost__text">What are WordPress Themes? Those new to the term may be forgiven for thinking they’re nothing but a ‘skin’ - a superficial alteration of typefaces and colour palettes. The reality is that themes are responsible for not only the style of the WordPress site but the structure, the functionality and the degree of customisation available to the user.</p>

                  <blockquote class="blogpost__quote">"[Themes remove] the need for a typical WordPress site owner to have to learn CSS, HTML, and PHP in order to have a great-looking website." (<a href="https://codex.wordpress.org/Theme_Development" class="content__link">WordPress Codex</a>, 2017)</blockquote>

                  <p class="blogpost__text">This makes them incredibly powerful, and goes some way to explaining why it’s possible to make a living <a href="https://managewp.com/how-much-wordpress-developers-make" class="content__link">developing and selling them</a>.</p>

                  <p class="blogpost__text">Learning the basics of theme development has been an enlightening and inspiring process. As a beginner to WordPress itself this meant a large chunk of the project was spent simply getting my head around how the platform's architecture works to organise the pages and templates that make up each WordPress site.</p>

                  <h3 class="blogpost__heading">Setup</h3>
                  <p class="blogpost__text">I used a 'starter theme' called <a href="http://underscores.me/" class="content__link">Underscores</a> to build my theme upon. For development I used <a href="https://netbeans.org/" class="content__link">NetBeans IDE</a> as it incorporates greater functionality than typical text editors when dealing with functions in PHP. I used <a href="http://gulpjs.com/" class="content__link"> Gulp</a> to compile SASS to CSS and provide features like 'Browsersync' for a speedier development workflow. I also used <a href="http://www.wampserver.com/en/" class="content__link">WAMP</a> so I could develop locally before uploading to the live site.</p>

                  <p class="blogpost__text">Morten Rand-Hendriksen's <a href="https://www.lynda.com/WordPress-tutorials/WordPress-Building-Themes-from-Scratch-Using-Underscores/491704-2.html" class="content__link">WordPress: Building Themes from Scratch Using Underscores</a> was an extremely valuable resource and helped me immensely.</p>

                  <h3 class="blogpost__heading">Location</h3>
                  <p class="blogpost__text"><a href="https://github.com/tmccarten/wp" class="content__link">GitHub repository</a>, <a href="http://06167055.webdevmmu.uk/wp" class="content__link">WordPress theme (demonstrator)</a></p>

                  <h3 class="blogpost__heading">How</h3>
                  <h4 class="blogpost__heading blogpost__heading--small">The Template Hierarchy</h4>
                  <p class="blogpost__text">It was necessary for me to become acquainted with how WordPress applies formatting to pages depending on their content. This meant becoming familiar with <a href="https://developer.wordpress.org/themes/basics/template-hierarchy/" class="content__link">The Template Hierarchy</a>.</p>

                  <a href="<?php echo $index?>/assets/img/blog/template-hierarchy.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/template-hierarchy.png" class="blogpost__image" width="674" height="421" alt="Diagram of WordPress Template Hierarchy">
                      <figcaption class="blogpost__figcaption">WordPress Template Hierarchy</figcaption>
                    </figure>
                  </a>

                  <p class="blogpost__text">To explain how this works, let's imagine someone is viewing a WordPress site, clicks the title of a blog post and is taken to a page containing that single blog post. To determine how that page is generated, looking at the diagram, WordPress will follow the path starting from Singular Page, to Single Post Page, to Blog Post, to single-post.php. The page will be generated from whatever is in the single-post.php file. If this file isn't present within the theme, it will carry on right - to single.php - and generate it from that. This makes index.php the last resort, used only when none of the other templates are appropriate.</p>

                  <a href="<?php echo $index?>/assets/img/blog/templates.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/templates.png" class="blogpost__image" width="674" height="466" alt="Plain WordPress page with templates dropdown menu">
                      <figcaption class="blogpost__figcaption">The Underscores theme (renamed McCarten) applied with no styling. Here I've installed a plugin that shows the template currently in use (page.php) and the templates included within it that make up the page.</figcaption>
                    </figure>
                  </a>

                  <h3 class="blogpost__heading">Theme Unit Test Data</h3>
                  <p class="blogpost__text">In order to assess how our theme displays different types of content and all of its possible permutations, WordPress.org provides <a href="https://codex.wordpress.org/Theme_Unit_Test" class="content__link">theme unit test data</a> - posts and pages of dummy content that covers a wide range of scenarios and HTML elements. This means everything can be styled accordingly, and won't cause any nasty surprises for the theme's user.</p>

                  <a href="<?php echo $index?>/assets/img/blog/test_data.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/test_data.png" class="blogpost__image" width="674" height="433" alt="A blog post showing decreasing header sizes">
                      <figcaption class="blogpost__figcaption">This particularly useful blog post provided by the Theme Unit Test Data shows how various HTML tags are formatted within the theme. At this stage I've applied some basic styling to the CSS.</figcaption>
                    </figure>
                  </a>

                  <h3 class="blogpost__heading">Functions.php</h3>
                  <p class="blogpost__text">In order to offer the theme’s user customisable features to be accessed via the WordPress UI, each WordPress theme comes with a PHP file named ‘functions’. It is here where scripts and various aspects of WordPress’ inbuilt functionality can be written or hooked onto. I decided in my theme to provide the user with the option of uploading their own custom logo.</p>

                  <p class="blogpost__text">To enable this functionality, I located the function named <code class="blogpost__code">mccarten_setup</code>. It is within this (automatically named after the theme name) that the features unique to the theme are generated on page load. Using the guide provided by the <a href="https://codex.wordpress.org/Theme_Logo" class="content__link">WordPress Codex</a> I specified a default height and width for the logo and enabled the user to crop their logo image if they wish.</p>

                  <a href="<?php echo $index?>/assets/img/blog/custom_logo.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/custom_logo.png" class="blogpost__image" width="674" height="151" alt="WordPress PHP code for custom logo">
                      <figcaption class="blogpost__figcaption">PHP snippet enabling custom logo functionality.</figcaption>
                    </figure>
                  </a>

                  <h3 class="blogpost__heading">Conditional styling</h3>
                  <p class="blogpost__text">If pages in WordPress all share the same limited number of PHP template files to determine their construction, you may be wondering how we can apply specific and unique styling to a page when required. I discovered that there are various ways of achieving this.</p>

                  <p class="blogpost__text">The first involves the template hierarchy. On the theme's homepage I wanted the sidebar (or the 'widget area') to display to the side of the content above a certain device width, and I only wanted this to occur in this instance, not on every page. The template hierarchy shows how the front-page.php template file has greater specificity than what was initially in use - page.php. By creating a front-page.php file, WordPress automatically detected that my homepage should use front-page.php as the template. This was then reflected in the class names of the body tag - a class name of 'home' was appended to the body tag on this page and nowhere else. This meant I could apply specific styles to the elements on the page by simply prefixing the relevant class names in the SASS with <code class="blogpost__code">.home </code></p>

                  <a href="<?php echo $index?>/assets/img/blog/body_class.png" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/body_class.png" class="blogpost__image" width="674" height="318" alt="WordPress CSS code">
                      <figcaption class="blogpost__figcaption">Note the 'home' class at the beginning of the body element which enabled me to style specifically for this page.</figcaption>
                    </figure>
                  </a>

                  <h3 class="blogpost__heading">Evaluation</h3>
                  <p class="blogpost__text">I found this a surprisingly difficult project but that has only motivated me to seek further clarity on the workings of theme development and its best practices. It is clear that, if not proficiency, a strong working knowledge of PHP is required to truly reap the rewards.</p>

                  <p class="blogpost__text">I would have liked to have refined the theme and applied more styles as at the moment it's neither here nor there. With that said, I didn't want to run the risk of spending all of my time on design as that may have missed the point of the project.</p>

                  <p class="blogpost__text">Powering <a href="http://venturebeat.com/2015/11/08/wordpress-now-powers-25-of-the-web/" class="content__link">25% of the web</a> as it stands, it seems almost inevitable that WordPress will grow to the point where it becomes as much a standard of web development as are HTML, CSS and JavaScript.</p>

                  <p class="blogpost__text"><a href="http://06167055.webdevmmu.uk/wp" class="content__link">WordPress theme (demonstrator)</a></p>

                  <h4 class="blogpost__heading blogpost__heading--small">References</h4>

                  <p class="blogpost__text"><small>Barron, B. (2014) <cite>How Much Do WordPress Developers Make?</cite>. ManageWP. [Online] [Accessed on 13 March 2017] <a href="https://managewp.com/how-much-wordpress-developers-make" class="content__link">https://managewp.com/how-much-wordpress-developers-make</a></small></p>

                  <p class="blogpost__text"><small>Lynda.com, (2017) <cite>WordPress: Building Themes from Scratch Using Underscores.</cite> [video] [Accessed on 13 March 2017] <a href="https://www.lynda.com/WordPress-tutorials/WordPress-Building-Themes-from-Scratch-Using-Underscores/491704-2.html" class="content__link">https://www.lynda.com/WordPress-tutorials/WordPress-Building-Themes-from-Scratch-Using-Underscores/491704-2.html</a></small></p>

                  <p class="blogpost__text"><small>Theme Development. (n.d.) WordPress.org. [Online] [Accessed on 13 March 2017] <a href="https://codex.wordpress.org/Theme_Development" class="content__link">https://codex.wordpress.org/Theme_Development</a></small></p>

                </section><!-- blogpost content ends -->

                <aside class="blogpost__share">
                  <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//tommccarten.co.uk/blog/2017/getting-started-with-wordpress-theme-development.php" class="btn-share">Share on Facebook</a>
                  <a href="https://twitter.com/home?status=http%3A//tommccarten.co.uk/blog/2017/getting-started-with-wordpress-theme-development.php" class="btn-share btn-share--twitter">Share on Twitter</a>
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

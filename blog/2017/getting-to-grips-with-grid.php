<?php $index = "../.."; ?>

<?php $activePage = "Blog"; ?>
<?php $title = "Getting to grips with Grid | Blog | Thomas McCarten Portfolio"; ?>
<?php $description = "Blog post detailing CSS Grid Layout by Web Developer Tom McCarten."; ?>
<?php $keywords = "Tom McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main class="main main--home">

        <section class="content">

          <div class="content__item">

            <div class="breadcrumb">
              <a href=".." class="breadcrumb__link">Blog</a>
              <p class="breadcrumb__grey">Getting to grips with Grid</p>
            </div>

            <article class="blogpost">

              <section class="blogpost__header">
                <h2 class="blogpost__title">Getting to grips with Grid</h2>
                <p class="blogpost__meta blogpost__meta--author">by Tom McCarten</p>
                <time datetime="2016-11-06" class="blogpost__meta blogpost__meta--date">9th March, 2017</time>
              </section>

              <div class="blogpost__main">
                <section class="blogpost__content">
                  <h3 class="blogpost__heading">Aim</h3>
                  <p class="blogpost__text">To demonstrate a comprehensive understanding of the CSS Grid Layout module (Grid).</p>

                  <h3 class="blogpost__heading">Objectives</h3>
                  <ol class="blogpost__ordered-list">
                    <li>To research Grid and explore the reasons behind its creation.</li>
                    <li>To create examples on CodePen of possible use cases for Grid’s different properties.</li>
                    <li>To demonstrate how Grid can be used in conjunction with media queries for responsiveness.</li>
                    <li>To showcase what I’ve learned by rebuilding this website’s homepage using Grid.</li>
                  </ol>

                  <h3 class="blogpost__heading">Definition</h3>
                  <p class="blogpost__text">Just over twenty years since its initial release it may seem hard to believe that, until now, CSS hasn’t really offered a method of creating page layouts in a way that doesn’t involve ‘hacks’ or forcing properties to behave in ways they were never designed for. Whilst Flexbox is and was an excellent addition to the developer’s toolbox, being a one-dimensional layout module makes it somewhat unconducive to overall page layout:</p>

                  <blockquote class="blogpost__quote">“THE CSS GRID LAYOUT MODULE is a new CSS module that defines a two-dimensional grid layout system. Once a grid has been established on a containing element, the children of that element can be placed into slots on a flexible or fixed layout grid.” (Andrew, 2016:4)</blockquote>

                  <p class="blogpost__text">Grid therefore caters for defining layout across both axes simultaneously. Being able to place the elements of a website’s structure into areas of a malleable grid of fixed or flexible height and width affords the developer much easier and greater control over the layout.</p>

                  <div class="blogpost__tweet-wrap">
                    <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Flexbox vs CSS Grid Layout. Grid layout = no media queries and less CSS! <a href="https://t.co/T8qNbQ2Fxd">pic.twitter.com/T8qNbQ2Fxd</a></p>&mdash; Guil Hernandez (@guilh) <a href="https://twitter.com/guilh/status/839625256750940160">March 8, 2017</a></blockquote>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </div>

                  <p class="blogpost__text">Although I’ve a fairly concrete knowledge of Flexbox (which works well alongside Grid), I approach this with totally fresh eyes and ears with no prior insight into the workings of Grid, so this is as new to me as it may be to you reading.</p>

                  <h3 class="blogpost__heading">Setup</h3>
                  <p class="blogpost__text">I’ll be using CodePen to demonstrate examples of Grid’s properties and how grids can be made responsive with media queries. For my final demonstrator I’ll be writing the code in Atom, using plain HTML and vanilla CSS. I’ll also create a GitHub repository, both for version control and so you can see the process of the final demonstrator being built.</p>

                  <h3 class="blogpost__heading">Location</h3>
                  <a href="https://github.com/tmccarten/wp" class="content__link">GitHub repository</a> / <a href="http://codepen.io/tommccarten/pens/public/" class="content__link">CodePens</a> / <a href="http://tommccarten.co.uk/work/css_grid_layout/index.html" class="content__link">Demonstrator</a>

                  <h3 class="blogpost__heading">How</h3>
                  <p class="blogpost__text">My homepage is a perfect candidate for demonstrating the capabilities of Grid. But before I dive in to that, let’s look at how Grid generally works…</p>

                  <h4 class="blogpost__heading blogpost__heading--small">Creating a grid</h4>

                  <p class="blogpost__text">After setting the <code class="blogpost__code">display</code> property to <code class="blogpost__code">grid</code> on a containing element, we use <code class="blogpost__code">grid-template-columns</code> and <code class="blogpost__code">grid-template-rows</code> to define our columns and rows.</p>

                  <a href="<?php echo $index?>/assets/img/blog/grid_template_columns.jpg" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/grid_template_columns.jpg" class="blogpost__image" width="674" height="173" alt="Code depicting CSS Grid properties">
                      <figcaption class="blogpost__figcaption">A grid with two columns and three rows. The columns are set to 600px and 200px widths respectively. The second row is set to automatically size according to its contents.</figcaption>
                    </figure>
                  </a>

                  <h4 class="blogpost__heading blogpost__heading--small">Positioning elements in the grid</h4>
                  <p class="blogpost__text">Children of the grid can be positioned using the <code class="blogpost__code">grid-column</code> and <code class="blogpost__code">grid-row</code> properties. With these properties we specify the lines of the grid at which we want our element to start and where we want it to end.</p>

                  <a href="<?php echo $index?>/assets/img/blog/grid_lines.jpg" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/grid_lines.jpg" class="blogpost__image" width="575" height="575" alt="A drawn representation of a grid with measurements">
                      <figcaption class="blogpost__figcaption">A visual depiction of our grid. Note that the number of lines is always one greater than the number of columns or rows.</figcaption>
                    </figure>
                  </a>

                  <p class="blogpost__text">In the example above, our child ‘content’ div would thus be positioned:</p>

                  <a href="<?php echo $index?>/assets/img/blog/content_position.jpg" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/content_position.jpg" class="blogpost__image" width="673" height="93" alt="CSS code depicting CSS Grid properties">
                      <figcaption class="blogpost__figcaption">The first number represents the starting line, the second the end.</figcaption>
                    </figure>
                  </a>

                  <p class="blogpost__text">Only <a href="https://rachelandrew.co.uk/archives/2015/06/19/css-grid-layout-solving-the-gutter-problem/" class="content__link">latterly added to the spec</a>, with the <code class="blogpost__code">grid-column-gap</code> and <code class="blogpost__code">grid-row-gap</code> properties we can also specify the size of the gaps we require between our rows or columns, or, if we want them to be the same, the <code class="blogpost__code">grid-gap</code> property. Here’s a pen I created in summary of the above:</p>

                  <div class="blogpost__codepen-wrap">
                    <p data-height="265" data-theme-id="dark" data-slug-hash="pebYPL" data-default-tab="css,result" data-user="tommccarten" data-embed-version="2" data-pen-title="CSS Grid Layout - Basic Grid" class="codepen">See the Pen <a href="http://codepen.io/tommccarten/pen/pebYPL/">CSS Grid Layout - Basic Grid</a> by Tom McCarten (<a href="http://codepen.io/tommccarten">@tommccarten</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                    <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
                  </div>

                  <h4 class="blogpost__heading blogpost__heading--small">Naming grid lines</h4>

                  <p class="blogpost__text">In addition to specifying grid lines by number, we can give each line a name. If we were to give unique names to each of the three lines of the two columns in our previous example, that would look like this:</p>

                  <p class="blogpost__text"><code class="blogpost__code">grid-template-columns: [name1] 600px [name2] 200px [name3]</code></p>

                  <p class="blogpost__text">In addition to specifying grid lines by number, we can give each line a name. If we were to give unique names to each of the three lines of the two columns in our previous example, that would look like this:</p>

                  <p class="blogpost__text">Rachel Andrew details this idea at 18:11 in her 'Start Using CSS Grid Layout' presentation:</p>

                  <div class="blogpost__video-wrap">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Felq4z_rdPQ?start=1091" allowfullscreen></iframe>
                  </div>

                  <h4 class="blogpost__heading blogpost__heading--small">Grid template areas and grid responsiveness</h4>

                  <p class="blogpost__text">Perhaps the most exciting aspect of Grid is the ability to give the grid children a grid-area name which can then be referred to on the grid container in a manner that visually simulates where you want them to appear on the grid. The following pen demonstrates how this works. For slightly more complexity a second, nested grid has been added. The <code class="blogpost__code">fr</code> unit is fractional: <code class="blogpost__code">1fr 1fr 1fr</code> is three columns of equal width.</p>

                  <div class="blogpost__codepen-wrap">
                    <p data-height="265" data-theme-id="dark" data-slug-hash="JWKQYz" data-default-tab="css,result" data-user="tommccarten" data-embed-version="2" data-pen-title="CSS Grid Layout - Grid Template Areas" class="codepen">See the Pen <a href="http://codepen.io/tommccarten/pen/JWKQYz/">CSS Grid Layout - Grid Template Areas</a> by Tom McCarten (<a href="http://codepen.io/tommccarten">@tommccarten</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                    <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
                  </div>

                  <p class="blogpost__text">Making the grid responsive simply involves changing the template areas on the <code class="blogpost__content">grid-template-areas</code> property of the grid container. With a mobile-first workflow, this means beginning with the grid children arranged into a single column. At 500px the nested ‘tiles’ grid becomes two columns with the third tile spanning two columns using the <code class="blogpost__content">span</code> rule. At 900px the original layout is formed, and the <code class="blogpost__content">minmax</code> property applies a minimum and maximum width rule to the third column (sidebar):</p>

                  <div class="blogpost__codepen-wrap">
                    <p data-height="265" data-theme-id="dark" data-slug-hash="LWbvbE" data-default-tab="html,result" data-user="tommccarten" data-embed-version="2" data-pen-title="CSS Grid Layout - Responsive Grid" class="codepen">See the Pen <a href="http://codepen.io/tommccarten/pen/LWbvbE/">CSS Grid Layout - Responsive Grid</a> by Tom McCarten (<a href="http://codepen.io/tommccarten">@tommccarten</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                    <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
                  </div>

                  <h3 class="blogpost__heading">Evaluation</h3>

                  <p class="blogpost__text">To apply the module to a real-world example I applied what I’d learned to a <a href="http://tommccarten.co.uk/work/css_grid_layout/index.html" class="content__link">rebuild of my homepage</a>. For a few reasons, I found Grid a joy to work with:</p>

                  <p class="blogpost__text">• The <code class="blogpost__code">grid-gap</code> property. This eradicated the need for margins, and, in the case of my homepage, the annoyance of applying different margins to nth children as I do currently:</p>

                  <a href="<?php echo $index?>/assets/img/blog/nth_child.jpg" class="blogpost__figure-wrap">
                    <figure class="blogpost__figure">
                      <img src="<?php echo $index?>/assets/img/blog/nth_child.jpg" class="blogpost__image" width="674" height="179" alt="CSS code depicting CSS nth child properties">
                      <figcaption class="blogpost__figcaption">I could do away with this as grid-gap took care of it for me.</figcaption>
                    </figure>
                  </a>

                  <p class="blogpost__text">• • The <code class="blogpost__code">grid-template-areas</code> property made making major layout changes incredibly simple. The intuitive nature of simulating the layout with the named grid areas made me feel like I had greater control of what I wanted to achieve, e.g. the sidebar switching from underneath the tiles to the side of them and making the footer span the width of both.</p>

                  <p class="blogpost__text">• It behaves like you expect it to. Working on my demonstrator was painless in that there were no head-scratching moments. The consequence of this is reduced development time which is obviously a good thing.</p>

                  <p class="blogpost__text">In review, I’m satisfied that I achieved my aim and all of the objectives I set at the top of the project. Whilst there are other properties like <code class="blogpost__code">grid-auto-flow</code> (dictates how grid children are automatically placed into a grid) I would have liked to demonstrate, I understand how they work due to excellent resources like <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/grid-auto-flow" class="content__link">MDN</a>.</p>

                  <p class="blogpost__text">It is clear in conclusion that Grid is a fantastic addition to the developer’s arsenal and will greatly enhance the development process, both in terms of speed and reduction of code. Whilst there is a <a href="https://rachelandrew.co.uk/archives/2015/07/28/modern-css-layout-power-and-responsibility/" class="content__link">potential accessibility concern</a> due to displacement of source order, I have confidence that the industry will adapt and address these concerns as they become acquainted with Grid going forward.</p>

                  <h4 class="blogpost__heading blogpost__heading--small">References</h4>

                  <h3 class="blogpost__heading">Evaluation</h3>
                  <p class="blogpost__text">I found this a surprisingly difficult project but that has only motivated me to seek further clarity on the workings of theme development and its best practices. It is clear that, if not proficiency, a strong working knowledge of PHP is required to truly reap the rewards.</p>

                  <p class="blogpost__text">I would have liked to have refined the theme and applied more styles as at the moment it's neither here nor there. With that said, I didn't want to run the risk of spending all of my time on design as that may have missed the point of the project.</p>

                  <p class="blogpost__text">Powering <a href="http://venturebeat.com/2015/11/08/wordpress-now-powers-25-of-the-web/" class="content__link">25% of the web</a> as it stands, it seems almost inevitable that WordPress will grow to the point where it becomes as much a standard of web development as are HTML, CSS and JavaScript.</p>

                  <a href="http://06167055.webdevmmu.uk/wp" class="content__link">WordPress theme (demonstrator)</a>

                  <h4 class="blogpost__heading blogpost__heading--small">References</h4>

                  <p class="blogpost__text"><small>Barron, B. (2014) <cite>How Much Do WordPress Developers Make?</cite>. ManageWP. [Online] [Accessed on 13 March 2017] <a href="https://managewp.com/how-much-wordpress-developers-make" class="content__link">https://managewp.com/how-much-wordpress-developers-make</a></small></p>

                  <p class="blogpost__text"><small>Lynda.com, (2017) <cite>WordPress: Building Themes from Scratch Using Underscores.</cite> [video] [Accessed on 13 March 2017] <a href="https://www.lynda.com/WordPress-tutorials/WordPress-Building-Themes-from-Scratch-Using-Underscores/491704-2.html" class="content__link">https://www.lynda.com/WordPress-tutorials/WordPress-Building-Themes-from-Scratch-Using-Underscores/491704-2.html</a></small></p>

                  <p class="blogpost__text"><small>Theme Development. (n.d.) WordPress.org. [Online] [Accessed on 13 March 2017] <a href="https://codex.wordpress.org/Theme_Development" class="content__link">https://codex.wordpress.org/Theme_Development</a></small></p>

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


    <script src="<?php echo $index?>/assets/js/script.js"></script>
    script src="<?php echo $index?>/assets/js/sharebuttons.js"></script>
  </body>

</html>

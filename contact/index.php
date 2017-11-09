<?php $index = ".."; ?>

<?php $activePage = "Contact"; ?>
<?php $title = "Contact | Thomas McCarten Portfolio"; ?>
<?php $description = "Contact details for Thomas McCarten Web Developer."; ?>
<?php $keywords = "Thomas McCarten,Front-End,Design,Web Development,Logo Design,Illustrations"; ?>

<?php include $index . '/assets/includes/head.php';?>

  <body>
    <?php include $index . '/assets/includes/header.php';?>

    <main class="main main--home">

        <section class="content">
          <h2 class="title">Contact</h2>

          <div class="content__item">

            <section class="contact">
              <div class="contact__wrapper-form">
                <h3 class="content__heading">Get in touch...</h3>

                <form method="POST" action="../assets/includes/form-to-email.php" class="contactform">
                  <label for="name" class="contactform__label">Name</label>
                  <input type="text" name="name" class="contactform__input">
                  <label for="email" class="contactform__label">Email</label>
                  <input type="email" name="email" class="contactform__input">
                  <label for="message" class="contactform__label">Message</label>
                  <textarea name="message" class="contactform__textarea"></textarea>
                  <button type="submit" class="contactform__submit">Send</button>
                </form>
              </div>

              <aside class="contact__wrapper-aside">

                <div class="contact__wrapper-social">
                  <div class="socialmedia-link-wrapper">
                    <a href="#" class="socialmedia-link">
                      <img src="../assets/img/icons/github.svg" height="44" width="44" alt="">GitHub
                    </a>
                  </div>
                  <div class="socialmedia-link-wrapper">
                    <a href="#" class="socialmedia-link">
                      <img src="../assets/img/icons/twitter.svg" height="44" width="44" alt="">Twitter
                    </a>
                  </div>
                  <div class="socialmedia-link-wrapper">
                    <a href="#" class="socialmedia-link">
                      <img src="../assets/img/icons/facebook.svg" height="44" width="44" alt="">Facebook
                    </a>
                  </div>
                </div>

                <div class="contact__wrapper-other">
                  <div class="socialmedia-link-wrapper">
                    <a href="#" class="socialmedia-link">
                      <img src="../assets/img/icons/contact2.svg" height="44" width="44" alt="">Email me
                    </a>
                  </div>
                  <div class="socialmedia-link-wrapper">
                    <a href="#" class="socialmedia-link">
                      <img src="../assets/img/icons/download.svg" height="44" width="44" alt="">View CV
                    </a>
                  </div>
                </div>

              </aside>


            </section>

          </div>
        </section><!-- content ends -->

        <aside class="sidebar">
          <h4 class="sidebar__title">Recent blog posts</h4>
          <?php include $index . '/assets/includes/sidebar.php';?>
        </aside>

    </main>


    <script src="<?php echo $index?>/assets/js/script.js"></script>
  </body>

</html>

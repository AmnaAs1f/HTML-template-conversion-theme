






<!-- info section -->

<section class="info_section layout_padding">
    <div class="container">
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
            <img src="<?php echo get_theme_mod('footer_location_image', get_theme_file_uri('./images/location-white.png')); ?>" alt="">


              <span>
              <?php echo $location = get_theme_mod('footer_location', ''); ?>
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
            <img src="<?php echo get_theme_mod('footer_call_image', get_theme_file_uri('./images/telephone-white.png')); ?>" alt="">

              <span>
              <?php echo $call = get_theme_mod('footer_call', ''); ?>
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
            <img src="<?php echo get_theme_mod('footer_email_image', get_theme_file_uri('./images/email-white.png')); ?>" alt="">
              <span>
               <?php echo $email = get_theme_mod('footer_email', ''); ?>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
              <img src="<?php echo get_theme_mod('footer_social_image1', get_theme_file_uri('./images/fb.png')); ?>" alt="">

              </a>
            </div>
            <div>
              <a href="">
              <img src="<?php echo get_theme_mod('footer_social_image2', get_theme_file_uri('./images/youtube.png')); ?>" alt="">
              </a>
            </div>
            <div>
              <a href="">
              <img src="<?php echo get_theme_mod('footer_social_image3', get_theme_file_uri('./images/linkedin.png')); ?>" alt="">
              </a>
            </div>
            <div>
              <a href="">
              <img src="<?php echo get_theme_mod('footer_social_image4', get_theme_file_uri('./images/instagram.png')); ?>" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  

 <footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
          &copy; <span id="displayDateYear"></span> <?php echo get_theme_mod('copyright_text' ); ?>
            <!-- <a href="https://html.design/">Free Html Templates</a> -->
          </p>
        </div>
      </div>
    </div>
  </footer> 
  <!-- end footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>

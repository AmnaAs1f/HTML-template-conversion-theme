
<?php get_header('First'); ?>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (jQuery is required) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
   </button>

    <!--  slider section-->
    
    <section class="slider_section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail_box">
          <h1>
          
            <?php echo   get_theme_mod('slider_heading', 'Default Heading'); ?>
          </h1>
          <p>
            <?php echo get_theme_mod('slider_content', 'Default Content'); ?>
          </p>

          <a href="<?php echo get_theme_mod('slider_button_link', '#'); ?>">
            <?php echo get_theme_mod('slider_button_text', 'Contact us'); ?>
          </a>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 offset-lg-1">
            <div class="img_content">
              <div class="img_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="img-box">
                      <img src="<?php echo get_theme_mod('slider_image_1', get_theme_file_uri('/images/default-slider-image.jpg')); ?>" alt="">

                      </div> 
                    </div>
                    <div class="carousel-item">
                      <div class="img-box">
                      <img src="<?php echo get_theme_mod('slider_image_2', get_theme_file_uri('/images/default-slider-image.jpg')); ?>" alt="">
                      </div>
                    </div>
                    
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div> 
    </section> 

    <!-- end slider section -->
    
                                       


  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
        <?php echo  get_theme_mod('services_main_heading', 'Our Services'); ?>
        </h2>
        <img src= "<?php echo get_theme_file_uri('./images/plug.png'); ?>" alt="">
      </div>

      <div class="service_container">
        <div class="box">
          <div class="img-box">
          <img src= "<?php echo get_theme_mod('service_1_image', get_theme_file_uri('./images/s1.png')); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
           <?php echo get_theme_mod('service_1_title', 'Service 1 Title'); ?>
            </h5>
            <p>
            <?php echo get_theme_mod('service_1_description', 'Service 1 Description'); ?>  </p>
          </div>
        </div>

 
        <div class="box active">
          <div class="img-box">
          <img src= "<?php echo get_theme_mod('service_2_image', get_theme_file_uri('./images/s2.png')); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
            <?php echo get_theme_mod('service_2_title', 'Service 2 Title'); ?>
            </h5>
            <p>
            <?php echo get_theme_mod('service_2_description', 'Service 2 Description'); ?>
            </p>
          </div>
        </div>
     
        <div class="box">
          <div class="img-box">
          <img src= "<?php echo get_theme_mod('service_3_image', get_theme_file_uri('./images/s3.png')); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              <?php echo get_theme_mod('service_3_title', 'Service 3 Title');?>
            </h5>
            <p>
           <?php echo get_theme_mod('service_3_description', 'Service 3 Description');?>            </p>
          </div>
        </div>

      
        <div class="box ">
        
          <div class="img-box">
          <img src= "<?php echo get_theme_mod('service_4_image', get_theme_file_uri('./images/s4.png')); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              <?php echo get_theme_mod('service_4_title', 'Service 4 Title'); ?>
            </h5>
            <p>
    <?php echo get_theme_mod('service_4_description', 'Service 4 Description'); ?>        </p>
          </div>
        </div>

        <div class="box">
          <div class="img-box">
          <img src= "<?php echo get_theme_mod('service_5_image', get_theme_file_uri('./images/s5.png')); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
            <?php echo get_theme_mod('service_5_title', 'Service 5 Title'); ?>
            </h5>
            <p>
            <?php echo get_theme_mod('service_5_description', 'Service 5 Description'); ?>            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>
  <!-- <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
        <img src= "<?php echo get_theme_file_uri('./images/plug.png'); ?>" alt="">
      </div>

      <div class="service_container">
        <div class="box">
          <div class="img-box">
          <img src= "<?php echo get_theme_file_uri('./images/s1.png'); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Equipment installation
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
            </p>
          </div>
        </div>
        <div class="box active">
          <div class="img-box">
          <img src= "<?php echo get_theme_file_uri('./images/s2.png'); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Windmill Energy
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
          <img src= "<?php echo get_theme_file_uri('./images/s3.png'); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Equipment Maintenance
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
            </p>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
          <img src= "<?php echo get_theme_file_uri('./images/s4.png'); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Offshore Engineering
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
          <img src= "<?php echo get_theme_file_uri('./images/s5.png'); ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Electrical Wiring
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section> -->
  <!-- end service section -->

  <!-- about section -->
  <!-- <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
              <img src= "<?php echo get_theme_file_uri('./images/plug.png'); ?>" alt="">
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
            <img src= "<?php echo get_theme_file_uri('./images/about-img1.jpg'); ?>" alt="">
            </div>
            <div class="img-box b2">
            <img src= "<?php echo get_theme_file_uri('./images/about-img2.jpg'); ?>" alt="">
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
   -->
   <?php $my_option= get_option('my_data');
          $image1= $my_option['image1'];
          $about_heading = $my_option['about_heading'];
           $about_paragraph = $my_option['about_paragraph'];
           $button_text = $my_option['button_text'];
          $image2= $my_option['image2'];

          ?>
<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
              <?php echo $about_heading; ?>
              <img src= "<?php echo get_theme_file_uri('./images/plug.png'); ?>" alt="">
            </div>
            <p>
            <?php echo $about_paragraph; ?>
            </p>
            <a href="">
            <?php echo $button_text; ?>

            </a>
          </div>
        </div>

        
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
            
            <img src = "<?php echo $image1; ?>">
            <!-- <img src= "<?php echo get_theme_file_uri('./images/about-img1.jpg'); ?>" alt=""> -->
            </div>
            <div class="img-box b2">
             <img src = "<?php echo $image2; ?>"> 

            <!-- <img src= "<?php echo get_theme_file_uri('./images/about-img2.jpg'); ?>" alt=""> -->
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
  <!-- end about section -->


<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (jQuery is required) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Blog
        </h2>
        <img src= "<?php echo get_theme_file_uri('./images/plug.png'); ?>" alt="">
      </div>

    
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
            <img src= "<?php echo get_theme_file_uri('./images/blog1.jpg'); ?>" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Blog Title Goes Here
              </h5>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
            <img src= "<?php echo get_theme_file_uri('./images/blog2.jpg'); ?>" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Blog Title Goes Here
              </h5>
              <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->



  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
        <img src= "<?php echo get_theme_file_uri('./images/plug.jpg'); ?>" alt="">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  
  <?php get_footer(); ?>

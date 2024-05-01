
<?php
/*
Template Name: Services Template
*/
?>


<?php get_header('first'); ?>



              
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
        <?php echo  get_theme_mod('services_button_text' , 'Read More'); ?>
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->



  <?php get_footer(); ?>
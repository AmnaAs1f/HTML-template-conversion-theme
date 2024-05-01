<?php
/*
Template Name: About Us Template
*/
?>

<?php get_header('first'); ?>
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

<?php get_footer(); ?>

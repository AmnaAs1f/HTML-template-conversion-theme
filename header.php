<!-- <!DOCTYPE html>
<html>

<head>
<?php wp_head(); ?>


  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Electrochip</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>

  <div class="hero_area">
  
    <!-- header section strats -->

    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
          <?php echo get_custom_logo(); ?>

          <?php $my_option= get_option('my_data');
          $font_color= $my_option['font_color'];
          $font_family= $my_option['font_family'];
          $font_weight= $my_option['font_weight'];
          $font_size= $my_option['font_size'];

          ?>
          
        <span class="bloginfo">
          <h1 style="color:<?php echo $font_color; ?>; font-family: <?php echo $font_family; ?>; font-weight: <?php echo $font_weight; ?>; font-size: <?php echo $font_size; ?>;">
              <?php bloginfo(); ?>
          </h1>

       </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>
          <?php 
               wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'menu_class' => 'nav navbar-nav ml-auto align-items-center',  // UL Class
                'menu_id' => '', //ul id
                'container' => false,
                'add_li_class'  => 'nav-item',
                'add_a_class'     => 'nav-link',
              ) ); 
                ?> -->
       
          <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Service </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.html"> Blog </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact </a>
                </li>
              </ul>
            </div>
          </div> -->
        </nav>
      </div>
    </header>
    <!-- end header section -->

    
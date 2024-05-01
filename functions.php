<?php 


function electrochip_files(){

    wp_enqueue_style('css linking' , get_stylesheet_uri()  );
    wp_enqueue_style('css linking main1' , get_theme_file_uri('./css/style.css') );
    wp_enqueue_style('css linking main2' , get_theme_file_uri('./css/bootstrap.css') );
    wp_enqueue_style('css linking main3' , get_theme_file_uri('./css/responsive.css') );
    wp_enqueue_style('css linking main4' , get_theme_file_uri('./css/style.css,map') );
    wp_enqueue_style('css linking main5' , get_theme_file_uri('./css/style.scss') );


    wp_enqueue_script('js linking' , get_theme_file_uri('./js/bootstrap.js') );
    wp_enqueue_script('js linking' , get_theme_file_uri('./js/jquery-3.4.1.min.js') );

}

    add_action('wp_enqueue_scripts', 'electrochip_files');



function electrochip_backend_files(){

    wp_enqueue_style('css linking' , get_stylesheet_uri()  );
    wp_enqueue_style('css backend linking main1' , get_theme_file_uri('./admin-styling.css') );
    


    wp_enqueue_script('js backend linking' , get_theme_file_uri('./admin-styling.js') );
}
    add_action('admin_enqueue_scripts', 'electrochip_backend_files');




function theme_features()
{
    register_nav_menus(array(
        'primary' => 'Header menu',
        'secondary' => 'Secondary Menu',
        'useful'  => 'Useful Links'
    ));

    add_theme_support('custom-logo');



}


    
  

function Theme_settings_page()
{
    add_menu_page(
        'Theme settings',   // Page Title
        'Theme settings',    // Menu Title
        'manage_options',    // Capability Required
        'Theme-settings',    // Menu Slug
        'mytheme_settings_page',  // Callback function
        'dashicons-admin-generic',
        10,
    );
        add_theme_support('custom-logo');

}

add_action('admin_menu',  'Theme_settings_page');


require_once(get_theme_file_path('/includes/theme-settings.php'));



// Add Li Class
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// Add a Class
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


        








    
function custom_footer_customize_register($wp_customize) {
    // Add a section for the footer
    $wp_customize->add_section('custom_footer_section', array(
        'title'    => __('Footer', 'your-theme'),
        'priority' => 130,
    ));

    // Add setting and control for the call
    $wp_customize->add_setting('footer_call', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_call', array(
        'label'    => __('Call', 'your-theme'),
        'section'  => 'custom_footer_section',
        'type'     => 'tel',
    ));

    // Add setting and control for the email
    $wp_customize->add_setting('footer_email', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_email', array(
        'label'    => __('Email', 'your-theme'),
        'section'  => 'custom_footer_section',
        'type'     => 'email',
    ));

    // Add setting and control for the location
    $wp_customize->add_setting('footer_location', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_location', array(
        'label'    => __('Location', 'your-theme'),
        'section'  => 'custom_footer_section',
        'type'     => 'text',
    ));

    // Add setting and control for the location image
    $wp_customize->add_setting('footer_location_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_location_image_control', array(
        'label'    => __('Location Image', 'your-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_location_image',
    )));

    // Add setting and control for the call image
    $wp_customize->add_setting('footer_call_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_call_image_control', array(
        'label'    => __('Call Image', 'your-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_call_image',
    )));

    // Add setting and control for the email image
    $wp_customize->add_setting('footer_email_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_email_image_control', array(
        'label'    => __('Email Image', 'your-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_email_image',
    )));
       // Add setting and control for the Social icon 1 image
    $wp_customize->add_setting('footer_social_image1', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_social_image1_control', array(
        'label'    => __('social Image1', 'your-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_social_image1',

       // Add setting and control for the Social icon 2 image

    )));
    $wp_customize->add_setting('footer_social_image2', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_social_image2_control', array(
        'label'    => __('social Image2', 'your-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_social_image2',
      // Add setting and control for the Social icon 3 image

    )));
    $wp_customize->add_setting('footer_social_image3', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_social_image3_control', array(
        'label'    => __('social Image3', 'your-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_social_image3',
    )));

      // Add setting and control for the Social icon 4 image

    $wp_customize->add_setting('footer_social_image4', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_social_image4_control', array(
        'label'    => __('social Image4', 'your-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_social_image4',
    )));



    
    $wp_customize->add_setting('copyright_text', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('copyright_text', array(
        'label'    => __('Copyright Text', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'copyright_text',
        'type'     => 'text',
    ));
    

}


add_action('customize_register', 'custom_footer_customize_register');


function mytheme_customize_register($wp_customize) {
    // Create Slider Section
    $wp_customize->add_section('slider_section', array(
        'title' => __('Slider', 'mytheme'),
        'priority' => 30,
    ));

    // Slider Heading
    $wp_customize->add_setting('slider_heading', array(
        'default'   => 'Default Heading',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('slider_heading', array(
        'label'     => __('Slider Heading', 'mytheme'),
        'section'   => 'slider_section',
        'settings'  => 'slider_heading',
        'type'      => 'textarea',
    ));



    // Slider Content
    $wp_customize->add_setting('slider_content', array(
        'default'   => 'Default Content',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('slider_content', array(
        'label'     => __('Slider Content', 'mytheme'),
        'section'   => 'slider_section',
        'settings'  => 'slider_content',
        'type'      => 'textarea',
    ));

    // Slider Button Text
    $wp_customize->add_setting('slider_button_text', array(
        'default'   => 'Contact us',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('slider_button_text', array(
        'label'     => __('Slider Button Text', 'mytheme'),
        'section'   => 'slider_section',
        'settings'  => 'slider_button_text',
        'type'      => 'text',
    ));

    // Slider Button Link
    $wp_customize->add_setting('slider_button_link', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('slider_button_link', array(
        'label'     => __('Slider Button Link', 'mytheme'),
        'section'   => 'slider_section',
        'settings'  => 'slider_button_link',
        'type'      => 'text',
    ));
    

    $wp_customize->add_setting('slider_image_1', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image_1_control', array(
        'label'    => __('Slider Image 1', 'mytheme'),
        'section'  => 'slider_section',
        'settings' => 'slider_image_1',
    )));

    // Slider Image 2
    $wp_customize->add_setting('slider_image_2', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_image_2_control', array(
        'label'    => __('Slider Image 2', 'mytheme'),
        'section'  => 'slider_section',
        'settings' => 'slider_image_2',
    )));

    
}

add_action('customize_register', 'mytheme_customize_register');


function enqueue_custom_scripts() {
     
        wp_enqueue_media();
        wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/js/custom-admin.js', array('jquery'), null, true);
    
}
add_action('admin_enqueue_scripts', 'enqueue_custom_scripts');






function custom_services_customize_register($wp_customize)
{
    // Add a section for the Services
    $wp_customize->add_section('custom_services_section', array(
        'title'    => __('Services', 'your-theme'),
        'priority' => 130,
    ));

    // Main heading
    $wp_customize->add_setting('services_main_heading', array(
        'default'   => 'Our Services',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('services_main_heading', array(
        'label'    => __('Main Heading', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'text',
    ));

    // Button text
    $wp_customize->add_setting('services_button_text', array(
        'default'   => 'Read More',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('services_button_text', array(
        'label'    => __('Button Text', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'text',
    ));

    // Button URL
    $wp_customize->add_setting('services_button_url', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('services_button_url', array(
        'label'    => __('Button URL', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'url',
    ));

    // Service 1
    // Title
    $wp_customize->add_setting('service_1_title', array(
        'default'   => 'Service 1 Title',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_1_title', array(
        'label'    => __('Service 1 Title', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'text',
    ));

    // Description
    $wp_customize->add_setting('service_1_description', array(
        'default'   => 'Service 1 Description',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_1_description', array(
        'label'    => __('Service 1 Description', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('service_1_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_1_image_control', array(
        'label'    => __('Service 1 Image', 'your-theme'),
        'section'  => 'custom_services_section',
        'settings' => 'service_1_image',
    )));

    // Service 2
    // Title
    $wp_customize->add_setting('service_2_title', array(
        'default'   => 'Service 2 Title',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_2_title', array(
        'label'    => __('Service 2 Title', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'text',
    ));

    // Description
    $wp_customize->add_setting('service_2_description', array(
        'default'   => 'Service 2 Description',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_2_description', array(
        'label'    => __('Service 2 Description', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('service_2_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_2_image_control', array(
        'label'    => __('Service 2 Image', 'your-theme'),
        'section'  => 'custom_services_section',
        'settings' => 'service_2_image',
    )));

    // Service 3
    // Title
    $wp_customize->add_setting('service_3_title', array(
        'default'   => 'Service 3 Title',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_3_title', array(
        'label'    => __('Service 3 Title', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'text',
    ));

    // Description
    $wp_customize->add_setting('service_3_description', array(
        'default'   => 'Service 3 Description',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_3_description', array(
        'label'    => __('Service 3 Description', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('service_3_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_3_image_control', array(
        'label'    => __('Service 3 Image', 'your-theme'),
        'section'  => 'custom_services_section',
        'settings' => 'service_3_image',
    )));

    // Service 4
    // Title
    $wp_customize->add_setting('service_4_title', array(
        'default'   => 'Service 4 Title',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_4_title', array(
        'label'    => __('Service 4 Title', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'text',
    ));

    // Description
    $wp_customize->add_setting('service_4_description', array(
        'default'   => 'Service 4 Description',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_4_description', array(
        'label'    => __('Service 4 Description', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('service_4_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_4_image_control', array(
        'label'    => __('Service 4 Image', 'your-theme'),
        'section'  => 'custom_services_section',
        'settings' => 'service_4_image',
    )));

    // Service 5
    // Title
    $wp_customize->add_setting('service_5_title', array(
        'default'   => 'Service 5 Title',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_5_title', array(
        'label'    => __('Service 5 Title', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'text',
    ));

    // Description
    $wp_customize->add_setting('service_5_description', array(
        'default'   => 'Service 5 Description',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('service_5_description', array(
        'label'    => __('Service 5 Description', 'your-theme'),
        'section'  => 'custom_services_section',
        'type'     => 'textarea',
    ));

    // Image
    $wp_customize->add_setting('service_5_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_5_image_control', array(
        'label'    => __('Service 5 Image', 'your-theme'),
        'section'  => 'custom_services_section',
        'settings' => 'service_5_image',
    )));

}
add_action('customize_register', 'custom_services_customize_register');






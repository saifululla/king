<?php 



/**
 * 
 * Function code start.........
 */

// include astraa option framework

get_template_part('/inc/astraa-options');


// require_once get_template_part('/inc/astraa-activation');

require_once(get_template_directory().'/inc/astraa-activation.php');
require_once(get_template_directory().'/inc/astraa-demo-content.php');
//  setup theme
 function astraa_theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post','slider','team','testimonial','portfolio'));



    register_nav_menus(array(
        'main-menu' => __('Primary Menu','astraa'),
    ));



 }
 add_action('after_setup_theme','astraa_theme_setup');




// comments template setup
function astraa_comments_form($fields){
    $comment   = $fields['comment'];
    $author    = $fields['author'];
    $email     = $fields['email'];
    $url       = $fields['url'];
    $cookies   = $fields['cookies'];

    unset($fields['comment']);
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['cookies']);


  
   $fields['author']  =   $author ;
   $fields['email']   = $email    ;
   $fields['url']     =  $url     ;
   $fields['comment'] =  $comment ;
   $fields['cookies'] = $cookies  ;

   return $fields;




}
add_filter( 'comment_form_fields', 'astraa_comments_form' );

// custome sidebar widgets 
function astraa_custom_widgets(){

            // main sidebar
            register_sidebar(array(
                'name' => __('Main Sidebar','astraa'),
                'id' => 'main_sidebar',
                'discription' =>__('Write your about main sidebar','astraa'),
                'before_widget'=> '<div class="single-sidebar">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title'=> '</h4>',
            ));

             // footer 1 sidebar
            register_sidebar(array(
                'name' => __('Footer 1','astraa'),
                'id' => 'footer1',
                'discription' =>__('Write your about main sidebar','astraa'),
                'before_widget'=> ' <div class="single-footer footer-logo">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title'=> '</h3>',
            ));
             // footer 2 sidebar
             register_sidebar(array(
                'name' => __('Footer 2','astraa'),
                'id' => 'footer2',
                'discription' =>__('Write your about main sidebar','astraa'),
                'before_widget'=> '<div class="single-footer">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title'=> '</h4>',
            ));

             // footer 3 sidebar
             register_sidebar(array(
                'name' => __('Footer 3','astraa'),
                'id' => 'footer3',
                'discription' =>__('Write your about main sidebar','astraa'),
                'before_widget'=> '<div class="single-footer">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title'=> '</h4>',
            ));

             // footer 4 sidebar
             register_sidebar(array(
                'name' => __('Footer 4','astraa'),
                'id' => 'footer4',
                'discription' =>__('Write your about main sidebar','astraa'),
                'before_widget'=> '<div class="single-footer contact-box">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title'=> '</h4>',
            ));






}
add_action('widgets_init','astraa_custom_widgets');


// link Css and Js file load function

function css_js_link_load_enqueue(){


    wp_enqueue_style('bootstrapCss',get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('awesomeCss',get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style('','https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('magnificCss',get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('carouselCss',get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsiveCss',get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('maincss',get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('styleCss',get_stylesheet_uri());

  
   

wp_enqueue_script('bootstrapJs',get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('popperjs',get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('carouseljs',get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('magnificJs',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('isotopejs',get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('imageloadedjs',get_template_directory_uri().'/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('counterupjs',get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('waypointjs',get_template_directory_uri().'/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('mainjs',get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true);



}
add_action('wp_enqueue_scripts','css_js_link_load_enqueue');
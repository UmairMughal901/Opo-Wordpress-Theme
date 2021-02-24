<?php 

//Add navigation menu for 
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'wpNetsdemy' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

//Add theme support - this is for logo
add_theme_support( 'custom-logo' );

//Add action to style sheet using wp enqueue 
add_action(
    'wp_enqueue_scripts', 
    'netsdemy_theme_scripts'
);
function netsdemy_theme_scripts()
{
    //echo "Does this output to the actual page?";
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    //Adding Bootstrap CSS - It is good practice to put your style sheet on top that will help you to enforce your changings
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assests/bootstrap/css/bootstrap.min.css');
    //wp_enqueue_script('my-slider', get_template_directory_uri().'/assests/js/myjs.js');
    //Add jquery file using wp https://developer.wordpress.org/themes/basics/including-css-javascript/
    // add jquery using inlcluded and registered scripts of wordpress
    wp_enqueue_script('jquery');
    //Adding Bootstrap JS -
    wp_enqueue_script('Bootstrap-js', get_template_directory_uri() . '/assests/bootstrap/js/bootstrap.min.js');
}



?>
<?php

// Change all instances of eatery_danika to your theme name.
if ( ! function_exists( 'eatery_danika_setup' ) ) :
 
   function eatery_danika_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo', array(
      'height'      => 800,
      'width'       => 800,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description')
   ));

   register_nav_menus( array(
      'menu-meals'         =>       'Meal Menus',
      'menu-socials'       =>       'Social Menu',
      'menu-footer'        =>       'Footer Menu'
   ));  
   }
 
endif;
 
add_action('after_setup_theme', 'eatery_danika_setup');
 
function eatery_danika_scripts_styles(){
   wp_enqueue_style('eatery_danika_style', get_stylesheet_uri(), array(), time());

   wp_enqueue_style( 'eatery_danika_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

   wp_enqueue_style('eatery_danika_google_fonts', 'https://fonts.googleapis.com/css2?family=Spectral+SC:wght@400;500&family=Spectral:wght@400;500', array(), null);
}
 
add_action('wp_enqueue_scripts', 'eatery_danika_scripts_styles');
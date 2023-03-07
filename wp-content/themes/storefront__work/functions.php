<?php
/**
 * Test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package test-task
 */

	add_filter( 'show_admin_bar', '__return_false' );

	/**
	* denqueue scripts and styles.
	*/


  function give_dequeue_plugin() {
    wp_dequeue_style('storefront-style');
    wp_deregister_style('storefront-style');

    wp_dequeue_script('storefront-navigation');
    wp_deregister_script('storefront-navigation');

    wp_dequeue_script('storefront-homepage');
    wp_deregister_script('storefront-homepage');
  }
  
  add_action('wp_enqueue_scripts','give_dequeue_plugin', 100);


	/**
	* Enqueue scripts and styles.
	*/


	function my_scripts() {
	  wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/assets/css/swiper.min.css' );
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/assets/css/style.min.css' );
	
    wp_enqueue_script( 'swiper-script', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js' , array(), null, true);
    wp_enqueue_script( 'jquery-script', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' , array(), null, true);
	  wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array('jquery'), null, true);
  }

	add_action( 'wp_enqueue_scripts', 'my_scripts');

  
	

?>
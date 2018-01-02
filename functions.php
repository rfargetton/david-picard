<?php

/**
 * Test theme functions and definitions
 */

	// Test theme setup

  function test_theme_setup(){
    // let WP manage document title
		add_theme_support('title-tag');
    add_theme_support('menus');
    //  registering the navbar
		register_nav_menu('top_bar', 'Top Bar');

  }

  // test function bullshit

	function say_hello(){
		echo "Bienvenue sur le site de ".get_bloginfo('name');
	}

	// Test theme assets

  function enqueue_test() {
		wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css' );
		wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js');
  }

  // loading functions

	add_action('wp_enqueue_scripts', 'enqueue_test');
  add_action('after_setup_theme', 'test_theme_setup');

?>

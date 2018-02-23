<?php

/**
 * Test theme functions and definitions
 */

	// Test theme setup

  function test_theme_setup(){
    // let WP manage document title
		add_theme_support('title-tag');
    // enable custom menus
    add_theme_support('menus');
    //  registering the navbar
		register_nav_menu('top_bar', 'Top Bar');

  }

  // test function bullshit

	function say_hello(){
		echo "Bienvenue sur le site de ".get_bloginfo('name');
	}

  // removing the gallery shortcode from the_content()

  function remove_gallery($content) {
      $content = strip_shortcodes($content);
      return $content;
  }

	// Test theme assets loading

  function enqueue_test() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all' );
		wp_enqueue_script( 'swipe', get_template_directory_uri() . '/assets/js/swipe.js', array(), false, true);
		wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
  }

  // loading functions

	add_action('wp_enqueue_scripts', 'enqueue_test');
  add_action('after_setup_theme', 'test_theme_setup');

  add_filter( 'the_content', 'remove_gallery');

  add_theme_support('post-thumbnails');
  add_theme_support('post-formats',  array('aside', 'image', 'video'));


?>

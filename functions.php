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
		register_nav_menu('footer', 'Footer');

  }

  // test function bullshit

	function say_hello(){
		echo "Bienvenue sur le site de ".get_bloginfo('name');
	}

  //

  // Get Corresponding Category for each Page

  function get_corresponding_category_ID( $id, $lang ) {
    if ($lang == 'fr-FR'){
      switch ($id) {
        case 73 :
          return 5;
          break;
        case 34 :
          return 6;
          break;
        case 754 :
          return 7;
          break;
        case 39 :
          return 9;
          break;
        case 18 :
          return 10;
          break;
      }
    } else {
      switch ($id) {
        case 295 :
          return 25;
          break;
        case 313 :
          return 33;
          break;
        case 789 :
          return 68;
          break;
        case 300 :
          return 37;
          break;
        case 323 :
          return 39;
          break;
      }
    }
  }


  // Get Image Type for Tile Gallery Script 
  function get_orientation($id){
    $img = wp_get_attachment_metadata( $id );
    $width = $img['width'];
    $height = $img['height'];
    if ($width < $height){
      echo "portrait";
    } else {
      echo "landscape";
    }
  }

  function get_my_custom_boundary_post( $in_same_term = false, $excluded_terms = '', $start = true, $taxonomy = 'category' ) {
    $post = get_post();
    if ( ! $post || ! is_single() || is_attachment() || ! taxonomy_exists( $taxonomy ) )
        return null;

    $query_args = array(
        'post_type' => 'MYPOSTTYPE',
        'posts_per_page' => 1,
        'order' => $start ? 'ASC' : 'DESC',
        'update_post_term_cache' => false,
        'update_post_meta_cache' => false
    );

    $term_array = array();

    if ( ! is_array( $excluded_terms ) ) {
        if ( ! empty( $excluded_terms ) )
            $excluded_terms = explode( ',', $excluded_terms );
        else
            $excluded_terms = array();
    }

    if ( $in_same_term || ! empty( $excluded_terms ) ) {
        if ( $in_same_term )
            $term_array = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

        if ( ! empty( $excluded_terms ) ) {
            $excluded_terms = array_map( 'intval', $excluded_terms );
            $excluded_terms = array_diff( $excluded_terms, $term_array );

            $inverse_terms = array();
            foreach ( $excluded_terms as $excluded_term )
                $inverse_terms[] = $excluded_term * -1;
            $excluded_terms = $inverse_terms;
        }

        $query_args[ 'tax_query' ] = array( array(
            'taxonomy' => $taxonomy,
            'terms' => array_merge( $term_array, $excluded_terms )
        ) );
    }

    return get_posts( $query_args );
  }

  // removing the gallery shortcode from the_content()

  function remove_gallery($content) {
      $content = strip_shortcodes($content);
      return $content;
  }

	// Test theme assets loading

  function enqueue_test() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all' );
		wp_enqueue_style( 'mailchimp', "//cdn-images.mailchimp.com/embedcode/classic-10_7.css", array(), false, 'all' );
		wp_enqueue_script( 'swipe', get_template_directory_uri() . '/assets/js/swipe.js', array(), false, true);
                wp_enqueue_script( 'vimeo', 'https://player.vimeo.com/api/player.js', array(), false, true);
		wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
  }



  // loading functions

	add_action('wp_enqueue_scripts', 'enqueue_test');
  add_action('after_setup_theme', 'test_theme_setup');

  add_filter( 'the_content', 'remove_gallery');

  add_theme_support('post-thumbnails');
  add_theme_support('post-formats',  array('aside', 'image', 'video'));


?>

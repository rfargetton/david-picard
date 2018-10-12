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

  //

  function get_orientation($id){
    $img = wp_get_attachment_metadata( $id );
    $width = $img[width];
    $height = $img[height];
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
		wp_enqueue_script( 'swipe', get_template_directory_uri() . '/assets/js/swipe.js', array(), false, true);
    wp_enqueue_script( 'vimeo','https://player.vimeo.com/api/player.js', array(), false, true);
		wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
  }



  // loading functions

	add_action('wp_enqueue_scripts', 'enqueue_test');
  add_action('after_setup_theme', 'test_theme_setup');

  add_filter( 'the_content', 'remove_gallery');

  add_theme_support('post-thumbnails');
  add_theme_support('post-formats',  array('aside', 'image', 'video'));


?>

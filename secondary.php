<?php

  /*
  Template Name: Secondary Page
  */

	get_header();
        $lang = get_bloginfo('language');
        $page_slug = strtolower(get_post_field( 'post_title' ));
        $cat_ID = get_corresponding_category_ID(get_the_ID(), $lang);

?>

  <main>

    <div class="container">

      <?php
        $args = array( 'category_name' => $page_slug );
        $projects = new WP_Query($args);
        if($projects->have_posts()) :

          while($projects->have_posts()) : $projects->the_post();

            get_template_part('template-parts/featured-secondary');

          endwhile;

        endif;
      ?>

    </div>

  </main>

<?php get_footer(); ?>

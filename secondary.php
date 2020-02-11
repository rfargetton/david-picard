<?php

  /*
  Template Name: Secondary Page
  */

	get_header();
        $lang = get_bloginfo('language');
        $cat_ID = get_corresponding_category_ID(get_the_ID(), $lang);

?>

  <main>

    <div class="container">

      <?php
        $args = array( 'cat' => $cat_ID );
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

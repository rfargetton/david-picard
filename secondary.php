<?php

  /*
  Template Name: Secondary Page
  */

	get_header();
  $section = strtolower(get_the_title());

?>

  <main>

    <div class="container">

      <?php
        $projects = new WP_Query(array('category_name'=> $section ));
        if($projects->have_posts()) :

          while($projects->have_posts()) : $projects->the_post();

            get_template_part('template-parts/featured-secondary');

          endwhile;

        endif;
      ?>

    </div>

  </main>

<?php get_footer(); ?>

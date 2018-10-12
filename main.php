<?php

  /*
  Template Name: Main Page
  */

	get_header();
  $section = strtolower(get_the_title());

?>

  <main>

    <div class="container">

      <div class="main grid">

          <?php
            $projects = new WP_Query(array('category_name'=> $section ));
            if($projects->have_posts()) :

              while($projects->have_posts()) : $projects->the_post();

                get_template_part('template-parts/featured');

              endwhile;

            endif; ?>

      </div>

    </div>

  </main>

<?php get_footer(); ?>

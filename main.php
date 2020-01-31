<?php

  /*
  Template Name: Main Page
  */

	get_header();
        $cat_ID = get_corresponding_category_ID(get_the_ID());
  
?>

  <main>

    <div class="container">

      <div class="main grid">

          <?php
            $args = array( 'cat' => $cat_ID );
            $projects = new WP_Query($args);
            if($projects->have_posts()) :

              while($projects->have_posts()) : $projects->the_post();

                get_template_part('template-parts/featured');

              endwhile;

            endif; ?>

      </div>

    </div>

  </main>

<?php get_footer(); ?>

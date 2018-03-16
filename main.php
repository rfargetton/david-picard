<?php

  /*
  Template Name: Main Page
  */

	get_header();
  $section = strtolower(get_the_title());

?>

  <main>

		<!-- <h1>
			Bienvenue sur <?php echo $section  ?>
		</h1> -->

    <div class="grid">

      <div class="gallery-inner">
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

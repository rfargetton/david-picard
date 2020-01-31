<?php

  /*
  Template Name: About Page
  */

	get_header();
  $section = strtolower(get_the_title());

?>

  <main>

    <div class="container">

      <?php
        if(have_posts()):
          while(have_posts()): the_post(); ?>
          
            <article id="about-intro" class="project">

              <div class="intro-text">

                  <h1><?php the_field('texte_introduction') ?></h1>

              </div>

              <div class="project-content">

                <div class="avatar">
                  <img src="<?php the_field('photo_profil'); ?>" /> 
                </div>

              </div>

            </article>

          <?php endwhile;
        endif;  
      ?>
            
      <?php $projects = new WP_Query(array('category_name'=> $section ));
        if($projects->have_posts()) :

          while($projects->have_posts()) : $projects->the_post();

            get_template_part('template-parts/featured-secondary');

          endwhile;

        endif;
      ?>

    </div>

  </main>

<?php get_footer(); ?>

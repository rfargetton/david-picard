<?php

  /*
  Template Name: About Page
  */

  get_header();
  $lang = get_bloginfo('language');
  $cat_ID = get_corresponding_category_ID(get_the_ID(), $lang);

?>

  <main>

    <div class="container">

      <?php
        if(have_posts()):
          while(have_posts()): the_post(); ?>
          
            <article id="about-intro" class="project">

              <div class="intro-text">
                <h1><?php the_field('texte_introduction') ?></h1>
                <a href="<?php the_field('portfolio') ?>" class="button">Télécharger le portfolio PDF</a>
              </div>

              <div class="project-description">

                <div class="avatar">
                  <img src="<?php the_field('photo_profil'); ?>" /> 
                </div>

              </div>

            </article>

          <?php endwhile;
        endif;  
      ?>
            
      <?php $projects = new WP_Query(array('cat'=> $cat_ID ));
        if($projects->have_posts()) :

          while($projects->have_posts()) : $projects->the_post();

            get_template_part('template-parts/featured-secondary');

          endwhile;

        endif;
      ?>

    </div>

  </main>

<?php get_footer(); ?>

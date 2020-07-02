<?php

  /*
  Template Name: About Page
  */

  get_header();
  $lang = get_bloginfo('language');
  $page_slug = strtolower(get_post_field( 'post_title' ));

?>

  <main>

    <div class="container">

      <?php
        if(have_posts()):
          while(have_posts()): the_post(); ?>
          
            <article id="about-intro" class="project">

              <div class="intro-text">
                <h1><?php the_field('texte_introduction') ?></h1>
                <?php if (get_field('portfolio')) : ?>
                  <?php $file = get_field("portfolio") ?>
                  <div><a class="button" href="<?php echo $file["url"] ?>" target=_blank > &darr; <?php echo $file["filename"] ?></a></div>
                <?php endif; ?>
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

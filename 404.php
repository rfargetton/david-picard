<?php

  get_header();

?>

  <main>

    <div class="container">

          
            <article id="404-intro" class="project">

              <div class="intro-text">
                <h1>Erreur 404</h1>
                <p class="primary">Désolé, il n'y a rien ici ! Retour à la <a href="<?php echo get_home_url(); ?>">home</a>.</p>
              </div>

              <div class="project-description">
              </div>

            </article>

            
      <?php $projects = new WP_Query();
        if($projects->have_posts()) :

          while($projects->have_posts()) : $projects->the_post();

            get_template_part('template-parts/featured');

          endwhile;

        endif;
      ?>

    </div>

  </main>

<?php get_footer(); ?>

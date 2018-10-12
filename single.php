<?php

/**
 * Test theme main template file
 */

	get_header();
?>

    <main>

      <div class="container">

        <?php if(have_posts()) :

          while(have_posts()) : the_post();

            get_template_part('template-parts/content', get_post_format());

          endwhile;

        endif; ?>

      </div>

    </main>

<?php get_footer(); ?>

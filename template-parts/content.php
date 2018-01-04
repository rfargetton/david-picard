<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <h2><?php the_title(); ?></h2>
  <p><?php the_field('date'); ?></p>
  <?php the_content(); ?>

</article>

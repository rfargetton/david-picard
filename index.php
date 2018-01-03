<?php

/**
 * Test theme main template file
 */

	get_header();
?>

		<h1>
			<?php say_hello(); ?>
		</h1>

    <?php
      $recent_posts = new WP_Query(array('category_name' => 'travaux', 'posts_per_page' => 8 ));
      if($recent_posts->have_posts()) : ?>

      <div class="posts">
        <?php while($recent_posts->have_posts()) : $recent_posts->the_post(); ?>

            <div id="<?php the_title(); ?>" class="project-thumbnail">
              <a href= "<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('date'); ?></p>
              </a>

            </div>

          <?php endwhile; ?>
      </div>

    <?php endif; ?>

	</body>
</html>

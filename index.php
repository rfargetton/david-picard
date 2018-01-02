<?php

/**
 * Test theme main template file
 */

	get_header();
?>

		<h1>
			<?php say_hello(); ?>
		</h1>

    <?php if(have_posts()) : ?>

      <div class="posts">
        <?php while(have_posts()) : the_post(); ?>

            <div id="<?php the_title(); ?>" class="project-thumbnail">
              <a href= "<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('date'); ?></p>
                <?php the_content(); ?>
              </a>

            </div>

          <?php endwhile; ?>
      </div>

    <?php endif; ?>

	</body>
</html>

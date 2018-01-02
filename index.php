<?php

/**
 * Test theme main template file
 */

	get_header();
?>

		<h1>
			<?php say_hello(); ?>
		</h1>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="post">
            <a href= "<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
              <?php the_category() ?>
              <?php the_content(); ?>
            </a>

          </div>

        <?php endwhile; endif; ?>

	</body>
</html>

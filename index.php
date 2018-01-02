<?php

/**
 * Test theme main template file
 */

	get_header();
?>

		<h1>
			<?php say_hello(); ?>
		</h1>

    <?php if(have_posts()):
      $latest_posts = get_posts(array('numberposts'=>2));
    ?>
      <div class="posts">
        <?php foreach ($latest_posts as $post): setup_postdata( $post ); ?>

          <div class="post">
            <a href= "<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
              <?php the_category() ?>
              <?php the_content(); ?>
              
            </a>

          </div>

        <?php endforeach; ?>


      </div>
    <?php  endif; ?>

	</body>
</html>

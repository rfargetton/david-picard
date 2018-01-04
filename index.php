<?php

/**
 * Test theme main template file
 */

	get_header();
?>

		<h1>
			<?php say_hello(); ?>
		</h1>

    <?php if(have_posts()) :

      while(have_posts()) : the_post();

        get_template_part('template-parts/content', get_post_format());    

      endwhile;

    endif; ?>

	</body>
</html>

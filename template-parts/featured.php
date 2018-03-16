<?php
  $id = get_post_thumbnail_id();
  $url = get_the_post_thumbnail_url();
 ?>

<li class="cell <?php echo get_orientation($id) ?>">

    <a href="<?php the_permalink(); ?>">

      <article>
        <header>
          <p><?php the_field('date'); ?></p>
          <h3><?php the_title(); ?></h3>
        </header>
      </article>
      <img src="<?php echo $url; ?>" alt="">

    </a>


</li>

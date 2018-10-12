<?php
  $id = get_post_thumbnail_id();
  $img = get_the_post_thumbnail_url();
 ?>

<li class="cell landscape">

    <a href="<?php the_permalink(); ?>">

      <img src="<?php echo $img; ?>" alt="">
      <article>
        <header>
          <p><?php the_field('date'); ?></p>
          <h3><?php the_title(); ?></h3>
        </header>
      </article>

    </a>

</li>

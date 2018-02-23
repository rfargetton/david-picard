<?php
  $slideshow = get_post_galleries( get_the_ID(), false )[0];
  $gallery = get_post_galleries( get_the_ID(), false )[1];
?>
<div id="slider" class="swipe">

  <div class="swipe-wrap">
    <?php
      foreach( $slideshow['src'] as $src ) : ?>
          <div><img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" /></div>
          <?php
      endforeach;
     ?>
  </div>

</div>

<article id="post-<?php the_ID(); ?>" class="project">

  <h1><?php the_title(); ?></h1>

  <div class="project-details">

    <div class="info">
      <p>
        <?php the_field('date'); ?></br>
        <?php the_field('type'); ?>
      </p>
      <p>
        <?php if (the_field('medium')) :
          the_field('medium');
        endif; ?>
      </p>
    </div>

    <div class="content">
      <?php the_content() ?>
    </div>

  </div>


  <div class="gallery grid">

    <?php
      foreach( $gallery['src'] as $src ) : ?>
          <li class="cell"><img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" /></li>
          <?php
      endforeach;
     ?>

  </div>

</article>

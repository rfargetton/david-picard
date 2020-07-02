<?php

//==========================================
// David Picard theme content template part
//==========================================

  $category = get_the_category()[0];
  $slideshow = get_post_galleries( get_the_ID(), false )[0];
  $gallery = get_post_galleries( get_the_ID(), false )[1];

?>

<?php if ($slideshow) : ?>
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
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" class="project">

  <?php get_template_part("template-parts/project-facts"); ?>

  <div class="project-description">

    <div class="description">
      <?php the_content() ?>
    </div>

  </div>

  <?php if ($gallery) : ?>
    <div class="gallery grid">


        <?php
          $id_array = explode(",", $gallery['ids']);
          for ($i=0; $i < count($gallery['src']); $i++) {
            $src = $gallery['src'][$i];
            $id = $id_array[$i];
          ?>
            <li class="cell <?php echo get_orientation($id) ?>"><img src="<?php echo $src; ?>" /></li>
          <?php }
        ?>


    </div>
  <?php endif; ?>

</article>

<div class="nextprev-navigation grid">

    <?php get_template_part('template-parts/previous'); ?>
    <?php get_template_part('template-parts/next'); ?>

</div>

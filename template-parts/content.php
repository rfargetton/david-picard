<?php
  $category = get_the_category()[0];
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

  <div class="project-details">
      
    <p class='date'><?php the_field('date'); ?></p>
    <h1><?php the_title(); ?></h1>

    <?php if (in_category(array(5, 25))) : ?>
      <p>
        <?php the_field('type') ?></br>
        <?php the_field('details') ?>
      </p>
    <?php endif; ?>
  
    <?php if (in_category(array(6, 33))) : ?>
      <p>
        <?php the_field('description') ?></br>
        <?php the_field('lieu') ?>
      </p>
    <?php endif; ?>

    <?php if (get_field('informations')) : ?>
      <p class='informations'><?php the_field('informations') ?></p>
    <?php endif; ?>

  </div>

  <div class="project-content">

    <div class="content">
      <?php the_content() ?>
    </div>

  </div>

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

</article>

<div class="nextprev-navigation grid">

    <?php get_template_part('template-parts/previous'); ?>
    <?php get_template_part('template-parts/next'); ?>

</div>

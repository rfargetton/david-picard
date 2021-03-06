<?php

//==========================================
// David Picard theme featured secondary
//==========================================

  $gallery = get_post_galleries( get_the_ID(), false )[0];

?>

<article id="post-<?php the_ID(); ?>" class="project">

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

  <div class="project-facts">

    <h2><?php the_title(); ?></h2>

    <?php if (in_category('textes')) : ?>
      <p>
        <?php the_field('publication') ?></br>
        par <?php the_field('auteur') ?>
      </p>
      <?php if (get_field('fichier')) : ?>
        <?php $file = get_field("fichier") ?>
        <div><a class="button" href="<?php echo $file["url"] ?>" target=_blank > &darr; <?php echo $file["filename"] ?></a></div>
      <?php endif; ?>
    <?php endif; ?>

  </div>

  <div class="project-description">

    <div class="description">
      <?php the_content() ?>
    </div>

  </div>

</article>

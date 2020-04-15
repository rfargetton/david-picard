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
    <?php endif; ?>

  </div>

  <div class="project-description">

    <div class="description">
      <?php the_content() ?>
      <?php if (in_category('textes')) : ?>
        <a class="button" href="<?php the_field('fichier'); ?>" target=_blank > &darr; Télécharger le texte</a>
      <?php endif; ?>
    </div>

  </div>

</article>

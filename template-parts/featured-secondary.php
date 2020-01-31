
<article id="post-<?php the_ID(); ?>" class="project">

  <div class="project-details">

    <h1><?php the_title(); ?></h1>

    <?php if (in_category('textes')) : ?>
      <p>
        <?php the_field('publication') ?></br>
        par <?php the_field('auteur') ?>
      </p>
    <?php endif; ?>

  </div>

  <div class="project-content">

    <div class="content">
      <?php the_content() ?>
      <?php if (in_category('textes')) : ?>
        <a class="download-link" href="<?php the_field('fichier'); ?>" target=_blank > &darr; Télécharger le texte</a>
      <?php endif; ?>
    </div>

  </div>

</article>

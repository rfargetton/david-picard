  
  <div class="project-facts">
      
    <h1><?php the_title(); ?></h1>

    <div class='primary'>
      <?php if (in_category(array(5, 25))) : ?>
        <?php the_field('type') ?></br>
        <?php the_field('details') ?></br>
        <?php the_field('date'); ?>
      <?php endif; ?>
  
      <?php if (in_category(array(6, 33))) : ?>
        <?php the_field('description') ?></br>
        <?php the_field('lieu') ?></br>
        <?php the_field('date'); ?>
      <?php endif; ?>
    </div>

    <?php if (get_field('informations')) : ?>
      <?php the_field('informations') ?>
    <?php endif; ?>

    <?php if (get_field('fichier_1')) : ?>
      <?php $file = get_field("fichier_1") ?>
      <div><a class="button" href="<?php echo $file["url"] ?>" target=_blank > &darr; <?php echo $file["filename"] ?></a></div>
    <?php endif; ?>
    <?php if (get_field('fichier_2')) : ?>
      <?php $file2 = get_field("fichier_2") ?>
      <div><a class="button" href="<?php echo $file2["url"] ?>" target=_blank > &darr; <?php echo $file2["filename"] ?></a></div>
    <?php endif; ?>
  </div>


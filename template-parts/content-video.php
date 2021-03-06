<?php
  $gallery = get_post_galleries( get_the_ID(), false )[0];
  $next = get_next_post(true, "", 'category');
  $previous = get_previous_post(true, "", 'category');
?>
<div class="video-player">

  <div class="video vimeo	playing">

  	<iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_video_id'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen id="video"></iframe>
  	<div class="video-thumb" style="background-image: url(<?php the_field('video_image'); ?>);">
  	<div id="play-button"></div>
  	</div>

  </div>

</div>

<article id="post-<?php the_ID(); ?>" class="project">

  <?php get_template_part("template-parts/project-facts"); ?>

  <div class="project-description">

    <div class="description">
      <?php the_content() ?>
    </div>

  </div>

  <div class="gallery grid">

      <?php if ($gallery) :

        $id_array = explode(",", $gallery['ids']);
        for ($i=0; $i < count($gallery['src']); $i++) {
          $src = $gallery['src'][$i];
          $id = $id_array[$i];
        ?>
          <li class="cell <?php echo get_orientation($id) ?>"><img src="<?php echo $src; ?>" /></li>
        <?php }

      endif;?>


  </div>

</article>

<div class="nextprev-navigation grid">


    <?php get_template_part('template-parts/previous'); ?>
    <?php get_template_part('template-parts/next'); ?>


</div>

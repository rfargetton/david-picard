<?php
  $postcatID = get_the_category()[0]->term_id;
  $previous = get_next_post(true, '', 'category');
  $last = get_posts(array('cat'=> $postcatID, 'order'=> 'ASC', 'posts_per_page'=>1));

  if (!empty($previous)) :
    $previouspost = $previous ;
  else :
    $previouspost = $last[0] ;
  endif;

?>

<li class="previous cell">

  <a href="<?php echo get_permalink($previouspost->ID); ?>">

    <img src="<?php echo get_the_post_thumbnail_url($previouspost->ID); ?>" alt="">

    <article>
      <header>
        <p>Projet Précédent</p>
        <h3><?php echo $previouspost->post_title; ?></h3>
      </header>
    </article>
    
  </a>

</li>

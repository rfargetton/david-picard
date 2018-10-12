<?php
  $postcatID = get_the_category()[0]->term_id;
  $next = get_previous_post(true, '', 'category');
  $first = get_posts(array('cat'=> $postcatID, 'order'=> 'DESC', 'posts_per_page'=>1));

  if (!empty($next)) :
    $nextpost = $next ;
  else :
    $nextpost = $first[0] ;
  endif;

?>

<li class="next cell landscape">

  <a href="<?php echo get_permalink($nextpost->ID); ?>">

    <img src="<?php echo get_the_post_thumbnail_url($nextpost->ID); ?>" alt="">

    <article>
      <header>
        <p>Projet Suivant</p>
        <h3><?php echo $nextpost->post_title; ?></h3>
      </header>
    </article>
    
  </a>

</li>

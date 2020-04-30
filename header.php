<?php

//==========================================
// David Picard theme header file
//==========================================

  $post_type = get_post_type();

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name='viewport' content='width= device-width, initialscale=1' >

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >
    <div class="logo loading">
      <img src="<?php echo get_template_directory_uri()."/assets/dp-logo.svg"; ?>" alt="logo">
    </div>
      <header class="site-header">
        
          <p class="site-title">
            <a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name') ?></a>
          </p>

        <nav id="nav" class="navigation">

          <?php if($post_type === 'page') : ?>
            <h1 class="page-title"><?php echo the_title() ?></h1>
          <?php else : ?>
            <p class="post-title"><?php echo the_title() ?></p>
          <?php endif ?>

          <button id="slide-toggle" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <?php
                  wp_nav_menu(array('theme_location' => 'top_bar', 'container_class' => 'slide-menu' ));
          ?>
        </nav>

      </header>

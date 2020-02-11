<?php

/**
 * Test theme header template file
 */

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

  		<a class="title" href="<?php echo get_home_url(); ?>">
        <div><?php echo get_bloginfo('name') ?></div>
      </a>

       <nav id="nav" class="navigation">
        <span>Menu</span>
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

<?php

/**
 * Test theme header template file
 */

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<?php wp_head(); ?>
	</head>
	<body>
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

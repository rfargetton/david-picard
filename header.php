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

  	<?php
  		wp_nav_menu(array('theme_location' => 'top_bar', 'menu_class' => 'offcanvas-menu' ));
  	 ?>

  	<header class="site-header">
  		<a class="title" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name') ?></a>
  	</header>

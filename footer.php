    <footer>

      <div class="footer-container">

        <?php
          wp_nav_menu(array('theme_location' => 'footer', 
                            'menu_class' => 'footer-menu-inner',
                            'container_class' => 'footer-menu' ));
        ?>

        <div class="footer-social">
          <ul class="footer-social-inner">
            <li><a href="<?php the_field('instagram', 371); ?>" target="blank">Instagram</a></li>
            <li><a href="<?php the_field('facebook', 371); ?>" target="blank">Facebook</a></li>
            <li><a href="<?php the_field('vimeo', 371); ?>" target="blank">Vimeo</a></li>
          </ul>
        </div>
      </div>

    </footer>
    <div class="loader"></div>
    <?php wp_footer(); ?>

  </body>
</html>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <a class="navbar-brand" href="#"><strong><?php bloginfo( 'name'); ?></strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php
  wp_nav_menu( array(
  	'theme_location'  => 'primary',
  	'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
  	'container'       => 'div',
  	'container_class' => 'collapse navbar-collapse',
  	'container_id'    => 'navbarSupportedContent',
  	'menu_class'      => 'navbar-nav mr-auto',
  	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  	'walker'          => new WP_Bootstrap_Navwalker(),
  ) );
  ?>
</nav>

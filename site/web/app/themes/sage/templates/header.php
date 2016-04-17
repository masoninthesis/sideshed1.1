<header class="banner" id="nav">
  <div class="container">
    <ul class="list-inline">
      <li><a class="brand" href="<?= esc_url(home_url('/')); ?>"><svg class="nav-logo" height="72" width="133"><?php get_template_part( 'assets/svg/inline', 'logo.svg' ); ?></svg></a></li>
      <li class="nav-primary"><nav>
        <!-- <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?> -->
        <ul class="list-inline menu">
          <li><a href="http://sideshed.dev/talent/">Talent</a></li>
          <li><a href="http://sideshed.dev/portfolio/">Portfolio</a></li>
          <li><a href="http://sideshed.dev/services/">Services</a></li>
          <li><a href="#modal-home" data-toggle="modal" class="brand-primary btn btn-md btn-modal">Hire Us</a></li>
        </ul>
      </nav></li>
    </ul>
  </div>
</header>

<header class="banner">
  <div class="container">
<<<<<<< HEAD
    <ul class="list-inline">
      <li><a class="brand" href="<?= esc_url(home_url('/')); ?>"><svg class="nav-logo" height="72" width="133"><?php get_template_part( 'assets/svg/inline', 'logo.svg' ); ?></svg></a></li>
      <li class="nav-primary"><nav>
        <!-- <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?> -->
        <ul class="list-inline menu">
          <li><a href="#">Talent</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#modal-home" data-toggle="modal" class="brand-primary btn btn-md btn-primary">Hire Us</a></li>
        </ul>
      </nav></li>
    </ul>
=======
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
>>>>>>> parent of c44bdc9... Laid base styles for home page
  </div>
</header>

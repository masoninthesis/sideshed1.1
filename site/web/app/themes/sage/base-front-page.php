<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <div class="container">
      <div class="bg-borders">
        <div class="column-border col-xs-4"></div>
        <div class="column-border col-xs-4"></div>
        <div class="column-border col-xs-4"></div>
      </div>
    </div>
    <div class="container">
      <div class="cta text-center">
        <svg class="top-tri" height="18"><?php get_template_part( 'assets/svg/inline', 'doubletris.svg' ); ?></svg>
        <h2>The</h2>
        <h2>The</h2>
        <h1>Story</h1>
        <svg class="bottom-tri" height="18"><?php get_template_part( 'assets/svg/inline', 'doubletris.svg' ); ?></svg>
      </div>
      <svg class="vid-thumb" height="80"><?php get_template_part( 'assets/svg/inline', 'vidthumb.svg' ); ?></svg>
    </div>
    <div class="bg-img">
      <svg class="moonzags" width="800" height="720"><?php get_template_part( 'assets/svg/inline', 'moonzags.svg' ); ?></svg>
    </div>
    <div class="container navbar-fixed-bottom footer">
      <div class="footer-cell">
        <svg class="clients img-resposive" width="1000" height="100"><?php get_template_part( 'assets/svg/inline', 'clients.svg' ); ?></svg>
      </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <?php get_template_part('templates/modal', 'home'); ?>
=======
>>>>>>> origin/master
=======
>>>>>>> parent of 449e788... Bootstrap JS isn't firing. Reverting back for testing.
  </body>
</html>

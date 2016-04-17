<?php
/**
 * Template Name: Talent
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/modal', 'home'); ?>

<?php endwhile; ?>

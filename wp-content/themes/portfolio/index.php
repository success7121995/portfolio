<?php
  get_header();
?>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php esc_html_e('No post available.'); ?></p>
  <?php endif; ?>

<?php
  get_footer();
?>
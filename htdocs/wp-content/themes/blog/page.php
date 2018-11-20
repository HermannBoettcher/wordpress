<?php get_header(); ?>
<!-- Section: Blog v.4 -->

<section class="my-5">

<?php if (have_posts()):
  while (have_posts()):the_post(); ?>
      <?php the_content('Weiterlesen ...'); ?>
<?php endwhile; endif; ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

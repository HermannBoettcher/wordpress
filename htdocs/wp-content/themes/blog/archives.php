<?php
/*
Template name: Archive
*/
 ?>
 <?php get_header(); ?>

 <?php if (have_posts()):
   while (have_posts()):the_post(); ?>
   <div class="entry">
     <h1>Archiv</h1>
     <ul class="archives">
       <?php wp_get_archives('type=monthly'); ?>
     </ul>
   </div>

<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

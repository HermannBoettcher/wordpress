<?php get_header(); ?>

<h1 class="archive">Kategorie: <?php single_cat_title(); ?></h1>
<?php echo category_description(); ?>

<?php if (have_posts()):
  while (have_posts()): the_post(); ?>
  <div class="entry">
    <h2><a href="<?php the_permalink(); ?>" title="Lesen Sie &quot;<?php the_title(); ?>&quot; vollständig"><?php the_title(); ?></a></h2>
    <p class="blogmeta"><?php the_author_posts_link(); ?>
    <a href="<?php bloginfo('url'); ?>/archiv/">
    <?php the_time("d.m.Y"); ?></a>
    <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', '', 'Kommentare geschlossen'); ?></p>
    <?php the_content('Weiterlesen ...'); ?>
  </div>
<?php endwhile else: ?>
  <p>Es wurden leider keine Beiträge gefunden.</p>
<?php endif; ?>
<p><?php posts_nav_link(' | ', '&laquo; Ältere Artikel', 'Neuere Artikel &raquo;'); ?></p>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

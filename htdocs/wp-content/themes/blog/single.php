<?php  get_header(); ?>

<?php if (have_posts()):
  while(have_posts()): the_post(); ?>

<div data-jarallax data-speed="0.3" class="view jarallax" style="height: 100vh;">
  <img class="jarallax-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
  <div class="mask">
    <div class="container flex-center text-center text-white">
      <div class="row mt-5">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>

</header>

<main>
<!--Main layout-->

  <div class="blogmeta-box">
    <p class="blogmeta text-center">
      <?php the_author_posts_link(); ?> &bull;
      <a href="<?php bloginfo('url'); ?>/archiv/"><?php the_time("d.m.Y"); ?></a> &bull;
      <?php the_category(', '); ?> &bull; 
      <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', '', 'Kommentar geschlossen'); ?>
    </p>
  </div>
  <div class="container">
    <?php the_content('Weiterlesen ... '); ?>
    <p class="tags">Tags: <?php the_tags('', ' &bull; ', ''); ?></p>
  </div>

<!--/.Main layout-->
</main>

<?php endwhile; endif; ?>

<?php  get_footer(); ?>

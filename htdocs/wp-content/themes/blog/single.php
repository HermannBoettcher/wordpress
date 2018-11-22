<?php  get_header(); ?><?php get_header(); ?>

<div data-jarallax data-speed="0.5" class="jarallax jarallax-100vh">

    <img class="jarallax-img"
    src=url('<?php the_post_thumbnail_url(); ?>') alt="">
  <div class="mask">
    <div class="container flex-center text-center text-white">
      <div class="row mt-5">
        <h1><?php the_title(); ?></h1>
        <br>
        <p>Hier findet ihr meine letzten Reise- und Tourenberichte.</p>
        <br>
        <p>Freut euch arg, denn sie sind toll.</p>
      </div>
    </div>
  </div>
</div>

</header>

<main>
<!--Main layout-->
<div class="container">
  <!--Main column-->
  <div class="col-md-8">
    <?php
        if ( have_posts() ) {
        the_post(); }
    ?>
  </div


        <!--Sidebar-->
        <div class="col-md-4">
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
        </div>
        <!--/.Sidebar-->
</div>
<!--/.Main layout-->
</main>
<?php  get_footer(); ?>

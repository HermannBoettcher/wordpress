<?php  get_header(); ?><?php get_header(); ?>


<div class="container-fluid intro view" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center; background-size: cover;">
  <div class="full-bg-img">
    <div class="mask flex-center">
      <div class="container text-center white-text wow fadeInUp">
        <h1><?php the_title(); ?></h1>
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

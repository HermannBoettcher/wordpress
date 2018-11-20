
<?php  get_header(); ?>
<main>
<!--Main layout-->
<div class="container">
  <!--Main column-->
  <div class="col-md-8">
    <h2 class="h1-responsive font-weight-bold text-center my-5">Letzte Beiträge</h2>
    <?php
        if ( have_posts() ) {
        while ( have_posts() ) {
        the_post();
    ?>

    <!--Post-->
    <div class="post-wrapper">
      <!-- even posts -->
      <?php if ($wp_query->current_post % 2 == 0): ?>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-7">

            <!-- Category -->
            <a href="#!" class="pink-text">
              <h6 class="font-weight-bold mb-3"><i class="fa fa-image pr-2"></i><?php the_category(); ?></h6>
            </a>

            <!-- Post title -->
            <h3 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h3>

            <!-- Excerpt -->
            <p><?php the_content(); ?></p>

            <!-- Post data -->
            <p>by <a><strong><?php the_author(); ?></strong></a>, <?php the_date(); ?></p>
            <!-- Read more button -->
            <a class="btn btn-pink btn-md mb-lg-0 mb-4">Weiterlesen</a>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-5">

            <!-- Featured image -->
            <div class="view overlay rounded z-depth-2">
              <?php the_post_thumbnail('full',  array('class' => 'img-fluid z-depth-2')); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="my-5">

      <!-- odd posts -->
      <?php else: ?>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-5">

          <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <?php the_post_thumbnail('full',  array('class' => 'img-fluid z-depth-2')); ?>
            <a href="<?php the_permalink(); ?>">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7">

          <!-- Category -->
          <a href="#!" class="green-text">
            <h6 class="font-weight-bold mb-3"><i class="fa fa-cutlery pr-2"></i><?php the_category(); ?></h6>
          </a>

          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h3>

          <!-- Excerpt -->
          <p><?php the_content(); ?></p>
          <!-- Post data -->
          <p>by <a><strong><?php the_author(); ?></strong></a>, <?php the_date(); ?></p>
          <!-- Read more button -->
          <a class="btn btn-success btn-md">Weiterlesen</a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <hr class="my-5">

    <?php endif ?>
  </div>



        <!--Sidebar-->
        <div class="col-md-4">
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
        </div>
        <!--/.Sidebar-->
    </div>
</div>
<!--/.Main layout-->
</main>
<?php  get_footer(); ?>

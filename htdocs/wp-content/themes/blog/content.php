<?php if ($wp_query->current_post % 2 == 0): ?>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-6">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h3>

      <!-- Excerpt -->
      <p><?php the_excerpt(); ?></p>

      <!-- Post data -->
      <p>by <a><strong><?php the_author(); ?></strong></a>, <?php echo get_the_date(); ?></p>
      <!-- Read more button -->
      <a href="<?php the_permalink(); ?>" class="btn btn-pink btn-md mb-lg-0 mb-4">Weiterlesen</a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <?php the_post_thumbnail('full',  array('class' => 'img-fluid z-depth-2')); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

<!-- odd posts -->
<?php else: ?>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-6">

    <!-- Featured image -->
    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
      <?php the_post_thumbnail('full',  array('class' => 'img-fluid z-depth-2')); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-6">

    <!-- Post title -->
    <h3 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h3>

    <!-- Excerpt -->
    <p><?php the_content(); ?></p>
    <!-- Post data -->
    <p>by <a><strong><?php the_author(); ?></strong></a>, <?php echo get_the_date(); ?></p>
    <!-- Read more button -->
    <a href="<?php the_permalink(); ?>" class="btn btn-success btn-md">Weiterlesen</a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<?php endif ?>

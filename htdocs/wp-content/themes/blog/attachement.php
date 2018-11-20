<?php get_header(); ?>

<?php if (have_posts()):
  while (have_posts()): the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content('Weiterlesen ...'); ?>

    <?php
      $metadata = wp_get_attachement_metadata();

      // File is an image
      if (wp_attachement_is_image()) {
        $content_width = 620; // maximum width of the content area in pixels
        if ($metadata['width'] <= $content_width) {
          $image_width = $metadata['width'];
        }
        else {
          $image_width = $content_width;
        }
        echo "<p><img src='" . wp_get_attachement_url() ."' width='" . $image_width ."' \></p>";
        echo "<p> Das Originalbild hat die Größe <a href=" . wp_get_attachement_url() . " title='Originalbild &quot;" . get_the_title() . "&quot;'>" . $metadata['width'] . " x " . $metadata['height'] . "</a> Pixel. </p>";
      }
      // file is no image
      else {
        echo "Hier geht es zum Download der Datei &raquo; <a href='" . wp_get_attachement_url() . "' title='Download &quot;" . get_the_title() . "&quot;'>" .
        get_the_title() . "</a>.";
      }
    ?>
  </div>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

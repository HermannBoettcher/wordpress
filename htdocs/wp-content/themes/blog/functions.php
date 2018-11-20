<?php

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Reset', get_template_directory_uri() . '/css/reset.css');
        wp_enqueue_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/css/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '3.2.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MyJS', get_template_directory_uri() . '/js/my.js', array(), '1.0.0', true );

        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


/**
 * Include external files
 */
require_once('inc/mdb_bootstrap_navwalker.php');

// Register Custom Navigation Walker
require_once(get_template_directory() . '/class-wp-bootstrap-navwalker.php');


/**
 * Setup Theme
 */
function MDB_setup() {
  // Navigation Menus
  register_nav_menus(array(
    'primary' => __( 'Primary Menu', 'MainNav' ),
    'navbar' => __( 'Navbar Menu'),
    'footer1' => __( 'Footer #1 Column'),
    'footer2' => __( 'Footer #2 Column'),
    'footer3' => __( 'Footer #3 Column')
    ));
  // Add featured image support
  add_theme_support('post-thumbnails');
  add_image_size('main-full', 1078, 516, false); // main post image in full width
  }
  add_action('after_setup_theme', 'MDB_setup');



/**
 * Register our sidebars and widgetized areas.
 */
function mdb_widgets_init() {

  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );

  register_sidebar( array(
    'name'          => 'Navbar',
    'id'            => 'navbar',
    'class'         => 'navbar-nav mr-auto',
    'before_widget' => '<ul class="navbar-nav mr-auto">',
    'after_widget'  => '</ul>',
    'before_title'  => '',
    'after_title'   => '',
  ) );

}
add_action( 'widgets_init', 'mdb_widgets_init' );


/**
 * Include external files
 */
require_once('inc/mdb_bootstrap_navwalker.php');
require_once('inc/mdb_pagination.php');



/**
* Removes width and height attributes from image tags
*
* @param string $html
*
* @return string
*/
function remove_image_size_attributes( $html ) {
return preg_replace( '/(width|height)="\d*"/', '', $html );
}

// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );

?>

<?php
  function callback_comment($comment, $args, $depth) {
  $GLOBALS['comment']=$comment;
?>
  <li <?php comment_class(); ?>
    id="li-comment-<?php comment_ID() ?>">

    <?php echo get_avatar($comment, $size='64'); ?>
    <p class="comment-author"><?php echo get_comment_author_link(); ?></p>
    <p class="comment-meta">
      <?php echo get_comment_date("d.m.Y"); ?>,
      <?php echo get_comment_time(); ?> Uhr
    </p>
    <?php comment_text(); ?>
    <div class="clear"></div>
    <?php }  ?>
